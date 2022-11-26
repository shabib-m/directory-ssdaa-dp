<?php

namespace Drupal\custom_breadcrumbs\Form;

use Drupal\Core\Entity\ContentEntityType;
use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Entity\EntityTypeBundleInfoInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\Core\Language\LanguageManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Custom breadcrumbs form.
 *
 * @property \Drupal\custom_breadcrumbs\CustomBreadcrumbsInterface $entity
 */
class CustomBreadcrumbsForm extends EntityForm {

  /**
   * EntityTypeBundleInfo.
   *
   * @var \Drupal\Core\Entity\EntityTypeBundleInfoInterface
   */
  protected $entityTypeBundleInfo;

  /**
   * Language interface.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * CustomBreadcrumbsForm constructor.
   *
   * @param \Drupal\Core\Entity\EntityTypeBundleInfoInterface $entityTypeBundleInfo
   *   EntityTypeBundleInfo service.
   * @param \Drupal\Core\Language\LanguageManagerInterface $languageManager
   *   LanguageManager service.
   */
  public function __construct(EntityTypeBundleInfoInterface $entityTypeBundleInfo, LanguageManagerInterface $languageManager) {
    $this->entityTypeBundleInfo = $entityTypeBundleInfo;
    $this->languageManager = $languageManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.bundle.info'),
      $container->get('language_manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {

    $form = parent::form($form, $form_state);

    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $this->entity->label(),
      '#description' => $this->t('Label for the custom breadcrumb.'),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $this->entity->id(),
      '#machine_name' => [
        'exists' => '\Drupal\custom_breadcrumbs\Entity\CustomBreadcrumbs::load',
      ],
      '#disabled' => !$this->entity->isNew(),
    ];

    $form['status'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enabled'),
      '#default_value' => $this->entity->status(),
    ];

    $form['description'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Description'),
      '#default_value' => $this->entity->get('description'),
      '#description' => $this->t('Description of the custom breadcrumb.'),
    ];

    $form['type'] = [
      '#type' => 'select',
      '#title' => $this->t('Type of breadcrumb'),
      '#options' => [
        1 => $this->t('Content entity'),
        2 => $this->t('Path'),
      ],
      '#requires' => TRUE,
      '#default_value' => $this->entity->get('type'),
    ];

    $entity = $this->entity->get('entityType');
    $entity = ($form_state->hasValue('entityType')) ? $form_state->getValue('entityType') : $entity;

    $form['entityType'] = [
      '#type' => 'select',
      '#title' => $this->t('Entity type'),
      '#default_value' => $entity,
      '#description' => $this->t('Select your entity type.'),
      '#options' => $this->getEntityTypes(),
      '#empty_value' => '_none',
      '#ajax' => [
        'callback' => [$this, 'ajaxCallback'],
        'wrapper' => 'entity_bundle_configuration',
        'method' => 'replace',
        'effect' => 'fade',
      ],
      '#states' => [
        'visible' => [
          ':input[name="type"]' => ['value' => '1'],
        ],
      ],
    ];

    $form['entityBundle'] = [
      '#prefix' => '<div id="entity_bundle_configuration">',
      '#suffix' => '</div>',
      '#type' => 'select',
      '#title' => $this->t('Entity bundle'),
      '#default_value' => $this->entity->get('entityBundle'),
      '#description' => $this->t('Select your entity bundle.'),
      '#options' => $this->getEntityBundle($entity),
      '#empty_value' => '_none',
      '#ajax' => [
        'callback' => [$this, 'tokenAjaxCallback'],
        'wrapper' => 'entity_token_configuration',
        'method' => 'replace',
        'effect' => 'fade',
      ],
      '#states' => [
        'visible' => [
          ':input[name="type"]' => ['value' => '1'],
        ],
      ],
    ];

    $form['language'] = [
      '#type' => 'select',
      '#title' => $this->t('Language'),
      '#default_value' => $this->entity->get('language'),
      '#description' => $this->t('Select language'),
      '#options' => $this->getAvailableLanguages(),
    ];

    $form['pathPattern'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Path pattern'),
      '#default_value' => $this->entity->get('pathPattern'),
      '#description' => $this->t('A set of patterns separated by a newline. @front_key@ is used to front page. The \'*\' character is a wildcard. An example path is /admin/* for every admin pages.', ['@front_key@' => '<front>']),
      '#states' => [
        'visible' => [
          ':input[name="type"]' => ['value' => '2'],
        ],
      ],
    ];

    $form['breadcrumbPaths'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Breadcrumb paths'),
      '#default_value' => $this->entity->get('breadcrumbPaths'),
      '#required' => TRUE,
      '#description' => $this->t('One url per line, you can use <a href="@token">Token</a> module. Url must start from "/". Use @nolink_key if you don\'t want to set a link for the respective title.', ['@token' => 'https://www.drupal.org/project/token', '@nolink_key' => '<nolink>']),
    ];

    $form['breadcrumbTitles'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Breadcrumb titles'),
      '#default_value' => $this->entity->get('breadcrumbTitles'),
      '#required' => TRUE,
      '#description' => $this->t('One title per line, you can use <a href="@token">Token</a> module.', ['@token' => 'https://www.drupal.org/project/token']),
    ];

    $form['extraCacheContexts'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Extra cache contexts'),
      '#default_value' => $this->entity->get('extraCacheContexts'),
      '#description' => $this->t('You can define an extra cache contexts for example for curent request query "url.query_args:search".'),
    ];

    $form['token_tree'] = [
      '#prefix' => '<div id="entity_token_configuration">',
      '#suffix' => '</div>',
      '#theme' => 'token_tree_link',
      '#token_types' => [self::getTokenEntity($entity)],
      '#show_restricted' => TRUE,
      '#weight' => 90,
    ];

    $form['token_details'] = [
      '#type' => 'details',
      '#title' => $this->t('Custom breadcrumbs extra vars'),
      '#open' => FALSE,
    ];

    $form['token_details']['vars'] = [
      '#theme' => 'item_list',
      '#items' => [
        $this->t('&ltnolink&gt - adds ability to create crumb without url'),
        $this->t('&ltterm_hierarchy:field_name&gt - taxonomy term field with hierarchy'),
      ],
    ];

    return $form;
  }

  /**
   * Get token type by entity.
   *
   * @param string $entity_type
   *   Entity type.
   *
   * @return string
   *   Array of token types.
   */
  public static function getTokenEntity($entity_type) {
    if ($entity_type === 'taxonomy_term') {
      return 'term';
    }

    return $entity_type;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

    $values = $form_state->getValues();

    $pages = $values['breadcrumbPaths'];

    $urlList = [];
    $urlList = explode(PHP_EOL, $pages);

    foreach ($urlList as $url) {

      $trimUrl = trim($url);

      // Validate Slash.
      if ($trimUrl !== '<front>' && $trimUrl !== '<nolink>' && $trimUrl[0] !== '/' && $trimUrl[0] !== '[') {
        $form_state->setErrorByName('pages', $this->t("@url needs to start with a slash if it is a URL or with a square bracket if it is a token.", ['@url' => $trimUrl]));
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $result = parent::save($form, $form_state);
    $message_args = ['%label' => $this->entity->label()];
    $message = $result == SAVED_NEW
      ? $this->t('Created new custom breadcrumb %label.', $message_args)
      : $this->t('Updated custom breadcrumb %label.', $message_args);
    $this->messenger()->addStatus($message);
    $form_state->setRedirectUrl($this->entity->toUrl('collection'));
    return $result;
  }

  /**
   * Ajax callback for the entity bundle dependent configuration options.
   *
   * @param array $form
   *   Form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Form State.
   *
   * @return array
   *   The form element containing the entity bundle options.
   */
  public static function ajaxCallback(array &$form, FormStateInterface $form_state) {
    return $form['entityBundle'];
  }

  /**
   * Ajax callback for the entity bundle dependent configuration options.
   *
   * @param array $form
   *   Form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Form State.
   *
   * @return array
   *   The form element containing the entity bundle options.
   */
  public static function tokenAjaxCallback(array &$form, FormStateInterface $form_state) {
    return $form['token_tree'];
  }

  /**
   * Get all available content entity types.
   *
   * @return array
   *   Array of entity types.
   */
  private function getEntityTypes() {
    $options = [];
    $options['_none'] = $this->t('Select entity type');
    $types = $this->entityTypeManager->getDefinitions();
    foreach ($types as $key => $type) {
      if ($type instanceof ContentEntityType && $type->getLinkTemplates('canocical')) {
        $options[$key] = $type->getLabel();
      }
    }
    return $options;
  }

  /**
   * Get list of entity bundle.
   *
   * @param string $entity
   *   Entity type.
   *
   * @return array
   *   Array of values.
   */
  private function getEntityBundle($entity) {
    $options = [];
    $options['_none'] = $this->t('Select entity bundle');
    foreach ($this->entityTypeBundleInfo->getBundleInfo($entity) as $key => $type) {
      $options[$key] = $type['label'];
    }
    return $options;
  }

  /**
   * Get all available languages.
   *
   * @return array
   *   Array of available languages.
   */
  private function getAvailableLanguages() {
    $options = ['und' => $this->t('Language not specified')];
    $langs = $this->languageManager->getLanguages(LanguageInterface::STATE_CONFIGURABLE);
    foreach ($langs as $key => $lang) {
      $options[$key] = $lang->getName();
    }

    return $options;
  }

}
