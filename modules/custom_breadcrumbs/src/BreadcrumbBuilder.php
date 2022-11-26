<?php

namespace Drupal\custom_breadcrumbs;

use Drupal\path_alias\AliasManagerInterface;
use Drupal\Core\Breadcrumb\Breadcrumb;
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Controller\TitleResolverInterface;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\Core\Link;
use Drupal\Core\Path\PathMatcherInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Url;
use Drupal\Core\Utility\Token;
use Drupal\Component\Utility\Html;
use Drupal\Component\Utility\Xss;
use Drupal\custom_breadcrumbs\Entity\CustomBreadcrumbs;
use Drupal\custom_breadcrumbs\Form\CustomBreadcrumbsForm;
use Drupal\taxonomy\TermInterface;
use Drupal\Core\Routing\AdminContext;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class BreadcrumbBuilder.
 *
 * @package Drupal\abv_app
 */
class BreadcrumbBuilder implements BreadcrumbBuilderInterface {

  /**
   * Custom breadcrumbs settings.
   *
   * @var array
   */
  protected $customBreadcrumbsSettings;

  /**
   * Custom breadcrumbs settings data.
   *
   * @var mixed
   */
  protected $customBreadcrumbsSettingsData;

  /**
   * EntityTypeManager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Language manager.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * Current request.
   *
   * @var \Symfony\Component\HttpFoundation\Request|null
   */
  protected $currentRequest;

  /**
   * Token.
   *
   * @var \Drupal\Core\Utility\Token
   */
  protected $token;

  /**
   * Title resolver.
   *
   * @var \Drupal\Core\Controller\TitleResolverInterface
   */
  protected $titleResolver;

  /**
   * Alias Manager.
   *
   * @var \Drupal\Core\Path\AliasManagerInterface
   */
  protected $aliasManager;

  /**
   * Path matcher.
   *
   * @var \Drupal\Core\Path\PathMatcherInterface
   */
  protected $pathMatcher;

  /**
   * Router admin context.
   *
   * @var \Drupal\Core\Routing\AdminContext
   */
  protected $routerAdminContext;

  /**
   * BreadcrumbBuilder constructor.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $configFactory
   *   Config factory.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   EntityTypeManager service.
   * @param \Drupal\Core\Language\LanguageManagerInterface $languageManager
   *   LanguageManager service.
   * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
   *   Request stack.
   * @param \Drupal\Core\Controller\TitleResolverInterface $titleResolver
   *   Title resolver.
   * @param \Drupal\Core\Utility\Token $token
   *   Token.
   * @param \Drupal\path_alias\AliasManagerInterface $aliasManager
   *   Alias manager.
   * @param \Drupal\Core\Path\PathMatcherInterface $pathMatcher
   *   Path matcher.
   * @param Drupal\Core\Routing\AdminContext $routerAdminContext
   *   Router admin context.
   */
  public function __construct(ConfigFactoryInterface $configFactory,
                              EntityTypeManagerInterface $entityTypeManager,
                              LanguageManagerInterface $languageManager,
                              RequestStack $requestStack,
                              TitleResolverInterface $titleResolver,
                              Token $token,
                              AliasManagerInterface $aliasManager,
                              PathMatcherInterface $pathMatcher,
                              AdminContext $routerAdminContext) {
    $this->entityTypeManager = $entityTypeManager;
    $this->languageManager = $languageManager;
    $this->token = $token;
    $this->customBreadcrumbsSettingsData = $configFactory->get('custom_breadcrumbs.settings');
    $this->customBreadcrumbsSettings = $this->customBreadcrumbsSettingsData->getRawData();
    $this->titleResolver = $titleResolver;
    $this->currentRequest = $requestStack->getCurrentRequest();
    $this->aliasManager = $aliasManager;
    $this->pathMatcher = $pathMatcher;
    $this->routerAdminContext = $routerAdminContext;
  }

  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $route_match) {
    $route = $route_match->getRouteObject();

    if ((isset($this->customBreadcrumbsSettings['admin_pages_disable']) && $this->customBreadcrumbsSettings['admin_pages_disable'] == TRUE)
      && (!empty($route) && $this->routerAdminContext->isAdminRoute($route))) {
      return FALSE;
    }

    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function build(RouteMatchInterface $route_match) {
    $breadcrumb = new Breadcrumb();

    // Set up homepage link.
    if ($this->customBreadcrumbsSettings['home'] && !$this->pathMatcher->isFrontPage()) {
      $home_text = Xss::filter($this->customBreadcrumbsSettingsData->get('home_link'));
      $breadcrumb->addLink(Link::createFromRoute($home_text, '<front>'));
    }

    // Prepare all route parameters.
    $params = $route_match->getParameters()->all();

    // Check breadcrumbs by patch.
    if ($breadcrumbSetting = $this->matchPaths($route_match)) {
      $this->applyBreadcrumb($breadcrumb, $breadcrumbSetting, NULL);
    }
    else {
      // Set up breadcrumbs by content entity configs.
      $this->applyContentEntityBreadcrumb($breadcrumb, $route_match);
    }

    // Set up the last current page crumb.
    if ($this->customBreadcrumbsSettings['current_page'] && !$this->pathMatcher->isFrontPage()) {
      $title = '';
      $route = '<none>';
      $route_parameters = $route_parameters_link = [];
      foreach ($params as $key => $value) {
        if ($value instanceof ContentEntityInterface) {
          $route_parameters_link[$key] = $value->id();
          $title = $value->label();
        }
      }

      if ($this->customBreadcrumbsSettings['current_page_link']) {
        $route = $route_match->getRouteName();
        $route_parameters = $route_parameters_link;
      }

      // Title resolver works good when you render breadcrumb on full page,
      // when we attach breadcrumb on node teaser, it doesn't work.
      if (empty($title)) {
        try {
          $title = $this->titleResolver->getTitle($this->currentRequest, $route_match->getRouteObject());
        }
        catch (\InvalidArgumentException $exception) {
          $title = NULL;
        }
      }
      if ($title != NULL) {
        $breadcrumb->addLink(Link::createFromRoute($this->prepareTitle($title), $route, $route_parameters));
      }
    }

    $breadcrumb->addCacheContexts(['url.path']);

    return $breadcrumb;
  }

  /**
   * Added breadcrumbs based content entity.
   *
   * @param \Drupal\Core\Breadcrumb\Breadcrumb $breadcrumb
   *   Breadcrumb.
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   Route match.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  protected function applyContentEntityBreadcrumb(Breadcrumb &$breadcrumb, RouteMatchInterface $route_match) {
    // Prepare all route parameters.
    $params = $route_match->getParameters()->all();

    $entityTypeIds = array_keys($params);
    $entityTypeId = reset($entityTypeIds);
    $entity = isset($params[$entityTypeId]) ? $params[$entityTypeId] : NULL;

    $breadcrumbSettings = $this->entityTypeManager->getStorage('custom_breadcrumbs')
      ->loadByProperties([
        'entityType' => $entityTypeId,
        'status' => TRUE,
        'type' => 1,
      ]);

    $this->filterPerBundle($breadcrumbSettings, $route_match);
    $this->filterPerLanguage($breadcrumbSettings);

    $breadcrumbSetting = reset($breadcrumbSettings);

    if ($breadcrumbSetting) {
      $this->applyBreadcrumb($breadcrumb, $breadcrumbSetting, $entity);
    }
  }

  /**
   * Apply breadcrumb per settings.
   *
   * @param \Drupal\Core\Breadcrumb\Breadcrumb $breadcrumb
   *   Breadcrumb object.
   * @param \Drupal\custom_breadcrumbs\Entity\CustomBreadcrumbs $customBreadcrumbs
   *   Breadcrumb settings.
   * @param mixed $entity
   *   Entity.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  protected function applyBreadcrumb(Breadcrumb &$breadcrumb, CustomBreadcrumbs $customBreadcrumbs, $entity) {
    $paths = $customBreadcrumbs->getMultiValues('breadcrumbPaths');
    $titles = $customBreadcrumbs->getMultiValues('breadcrumbTitles');
    $extraContexts = $customBreadcrumbs->getMultiValues('extraCacheContexts');
    $token_vars = [];

    if ($entity instanceof EntityInterface) {
      $token_vars = [CustomBreadcrumbsForm::getTokenEntity($entity->getEntityTypeId()) => $entity];
    }

    foreach ($paths as $key => $path) {
      if (isset($titles[$key])) {
        $href = file_url_transform_relative($this->token->replace($path, $token_vars, ['clear' => TRUE]));
        $link_title = $this->token->replace($titles[$key], $token_vars, ['clear' => TRUE]);
        $link_title = Html::decodeEntities($link_title);

        // Skip empty href, for example when token is empty.
        if (empty($href) || empty($link_title)) {
          continue;
        }

        if ($href === '<nolink>') {
          $link = Link::createFromRoute($this->prepareTitle($link_title), $href);
          $breadcrumb->addLink($link);
        }
        else {
          if ($this->checkHierarchyToken($href)) {
            $field_name = explode(':', $href)[1];
            $field_name = str_replace('>', '', $field_name);
            if ($entity instanceof EntityInterface) {
              if ($entity->hasField($field_name)) {
                $term = $entity->get($field_name)->entity;
                if ($term instanceof TermInterface) {
                  $parents = $this->getAllParents($term->id());
                  foreach (array_reverse($parents) as $parent) {
                    $link = $parent->toLink($this->prepareTitle($parent->label()));
                    $breadcrumb->addLink($link);
                    $breadcrumb->addCacheableDependency($parent);
                  }
                }
              }
            }
            continue;
          }
          else {
            $url = Url::fromUserInput($href);
            $link = Link::fromTextAndUrl($this->prepareTitle($link_title), $url);
            $breadcrumb->addLink($link);
          }
        }
        $breadcrumb->addCacheableDependency($entity);
        $breadcrumb->addCacheableDependency($customBreadcrumbs);
      }
    }

    if (array_filter($extraContexts)) {
      $breadcrumb->addCacheContexts($extraContexts);
    }

  }

  /**
   * Get term parents.
   *
   * @param int $tid
   *   Term id.
   *
   * @return mixed
   *   List of entities.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  protected function getAllParents($tid) {
    return $this->entityTypeManager->getStorage("taxonomy_term")
      ->loadAllParents($tid);
  }

  /**
   * Check token.
   *
   * @param string $href
   *   Token string.
   *
   * @return bool
   *   True or false.
   */
  protected function checkHierarchyToken($href) {
    if (strpos($href, '<term_hierarchy:') !== FALSE) {
      return TRUE;
    }

    return FALSE;
  }

  /**
   * Helper function for filter available settings per bundle.
   *
   * @param array $settings
   *   Array of settings.
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   Route match.
   */
  protected function filterPerBundle(array &$settings, RouteMatchInterface $route_match) {
    $params = $route_match->getParameters()->all();
    $entity = reset($params);

    if ($entity instanceof EntityInterface) {
      $bundle = $entity->bundle();
      foreach ($settings as $key => $setting) {
        if ($setting->get('entityBundle') !== $bundle) {
          unset($settings[$key]);
        }
      }
    }
  }

  /**
   * Helper function for filter available settings per language.
   *
   * @param array $settings
   *   Array of settings.
   */
  protected function filterPerLanguage(array &$settings) {
    $currentLanguage = $this->languageManager->getCurrentLanguage();
    $und = [];
    foreach ($settings as $key => $setting) {
      if ($setting->get('language') === LanguageInterface::LANGCODE_NOT_SPECIFIED) {
        $und[$key] = $setting;
      }

      if ($setting->get('language') !== $currentLanguage->getId()) {
        unset($settings[$key]);
      }
    }

    if (empty($settings)) {
      $settings = $und;
    }

  }

  /**
   * Check breadcrumbs by path.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   Route match.
   *
   * @return bool|\Drupal\Core\Entity\EntityInterface
   *   CustomBreadcrumb entity or False.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  protected function matchPaths(RouteMatchInterface $route_match) {
    $breadcrumbSettingsIDs = $this->entityTypeManager->getStorage('custom_breadcrumbs')
      ->getQuery()
      ->condition('pathPattern', '', '<>')
      ->condition('status', TRUE)
      ->execute();
    $breadcrumbSettings = CustomBreadcrumbs::loadMultiple(array_keys($breadcrumbSettingsIDs));

    $url = Url::fromRouteMatch($route_match);

    foreach ($breadcrumbSettings as $breadcrumbSetting) {
      $langcode = $breadcrumbSetting->get('language') != 'und' ? $breadcrumbSetting->get('language') : NULL;

      $aliases = [];
      $aliases[] = $this->aliasManager->getAliasByPath('/' . $url->getInternalPath(), $langcode);
      $aliases[] = '/' . $url->getInternalPath();
      $pattern = $breadcrumbSetting->get('pathPattern');

      foreach ($aliases as $alias) {
        if ($this->pathMatcher->matchPath($alias, $pattern)) {
          return $breadcrumbSetting;
        }
      }
    }

    return FALSE;
  }

  /**
   * Helper method to trim title.
   *
   * @param string $title
   *   Title.
   *
   * @return string
   *   Substring.
   */
  private function prepareTitle($title) {
    if ($length = $this->customBreadcrumbsSettings['trim_title']) {
      // We should catch the case when title is array or object.
      if (is_string($title) && mb_strlen($title) > $length) {
        return mb_substr($title, 0, $length) . '...';
      }
    }

    return $title;
  }

}
