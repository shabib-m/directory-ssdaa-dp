<?php

namespace Drupal\Tests\custom_breadcrumbs\Unit;

use Drupal\Core\Config\Config;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Controller\TitleResolverInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\Core\Path\PathMatcherInterface;
use Drupal\Core\Routing\AdminContext;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Utility\Token;
use Drupal\Tests\UnitTestCase;
use Drupal\custom_breadcrumbs\BreadcrumbBuilder;
use Drupal\path_alias\AliasManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Route;

/**
 * @coversDefaultClass \Drupal\custom_breadcrumbs\BreadcrumbBuilder
 *
 * @group custom_breadcrumbs
 */
class BreadcrumbBuilderTest extends UnitTestCase {

  /**
   * The admin context mock.
   *
   * @var \Drupal\Core\Routing\AdminContext|\PHPUnit\Framework\MockObject\MockObject
   */
  protected $adminContext;

  /**
   * Builds a BreadcrumbBuilder with the given settings and admin context.
   *
   * @param array $settings
   *   The custom_breadcrumbs.settings raw data.
   *
   * @return \Drupal\custom_breadcrumbs\BreadcrumbBuilder
   *   The configured breadcrumb builder.
   */
  protected function createBuilder(array $settings): BreadcrumbBuilder {
    $config = $this->getMockBuilder(Config::class)
      ->disableOriginalConstructor()
      ->getMock();
    $config->method('getRawData')->willReturn($settings);

    $configFactory = $this->createMock(ConfigFactoryInterface::class);
    $configFactory->method('get')
      ->with('custom_breadcrumbs.settings')
      ->willReturn($config);

    $requestStack = new RequestStack();
    $requestStack->push(new Request());

    return new BreadcrumbBuilder(
      $configFactory,
      $this->createMock(EntityTypeManagerInterface::class),
      $this->createMock(LanguageManagerInterface::class),
      $requestStack,
      $this->createMock(TitleResolverInterface::class),
      $this->createMock(Token::class),
      $this->createMock(AliasManagerInterface::class),
      $this->createMock(PathMatcherInterface::class),
      $this->adminContext
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->adminContext = $this->createMock(AdminContext::class);
  }

  /**
   * @covers ::applies
   */
  public function testAppliesReturnsTrueByDefault(): void {
    $builder = $this->createBuilder(['admin_pages_disable' => FALSE]);
    $routeMatch = $this->createMock(RouteMatchInterface::class);
    $routeMatch->method('getRouteObject')->willReturn(new Route('/node/1'));

    $this->assertTrue($builder->applies($routeMatch));
  }

  /**
   * @covers ::applies
   */
  public function testAppliesReturnsFalseOnAdminRouteWhenDisabled(): void {
    $this->adminContext->method('isAdminRoute')->willReturn(TRUE);
    $builder = $this->createBuilder(['admin_pages_disable' => TRUE]);

    $routeMatch = $this->createMock(RouteMatchInterface::class);
    $routeMatch->method('getRouteObject')->willReturn(new Route('/admin/content'));

    $this->assertFalse($builder->applies($routeMatch));
  }

  /**
   * @covers ::applies
   */
  public function testAppliesReturnsTrueOnAdminRouteWhenNotDisabled(): void {
    $this->adminContext->method('isAdminRoute')->willReturn(TRUE);
    $builder = $this->createBuilder(['admin_pages_disable' => FALSE]);

    $routeMatch = $this->createMock(RouteMatchInterface::class);
    $routeMatch->method('getRouteObject')->willReturn(new Route('/admin/content'));

    $this->assertTrue($builder->applies($routeMatch));
  }

  /**
   * @covers ::applies
   */
  public function testAppliesReturnsTrueWhenRouteObjectMissing(): void {
    $builder = $this->createBuilder(['admin_pages_disable' => TRUE]);

    $routeMatch = $this->createMock(RouteMatchInterface::class);
    $routeMatch->method('getRouteObject')->willReturn(NULL);

    $this->assertTrue($builder->applies($routeMatch));
  }

  /**
   * @covers ::checkHierarchyToken
   *
   * @dataProvider providerHierarchyToken
   */
  public function testCheckHierarchyToken(string $href, bool $expected): void {
    $builder = $this->createBuilder([]);
    $method = new \ReflectionMethod($builder, 'checkHierarchyToken');
    $method->setAccessible(TRUE);

    $this->assertSame($expected, $method->invoke($builder, $href));
  }

  /**
   * Data provider for ::testCheckHierarchyToken.
   *
   * @return array[]
   *   Test cases of href strings and expected results.
   */
  public function providerHierarchyToken(): array {
    return [
      'hierarchy token present' => ['<term_hierarchy:field_category>', TRUE],
      'hierarchy token mid string' => ['prefix <term_hierarchy:field_x>', TRUE],
      'plain path' => ['/some/path', FALSE],
      'other token' => ['[node:title]', FALSE],
      'empty string' => ['', FALSE],
    ];
  }

  /**
   * @covers ::prepareTitle
   */
  public function testPrepareTitleTrimsLongTitles(): void {
    $builder = $this->createBuilder(['trim_title' => 5]);
    $method = new \ReflectionMethod($builder, 'prepareTitle');
    $method->setAccessible(TRUE);

    $this->assertSame('Hello...', $method->invoke($builder, 'Hello World'));
  }

  /**
   * @covers ::prepareTitle
   */
  public function testPrepareTitleLeavesShortTitlesUntouched(): void {
    $builder = $this->createBuilder(['trim_title' => 20]);
    $method = new \ReflectionMethod($builder, 'prepareTitle');
    $method->setAccessible(TRUE);

    $this->assertSame('Short', $method->invoke($builder, 'Short'));
  }

  /**
   * @covers ::prepareTitle
   */
  public function testPrepareTitleWithoutTrimReturnsOriginal(): void {
    $builder = $this->createBuilder(['trim_title' => 0]);
    $method = new \ReflectionMethod($builder, 'prepareTitle');
    $method->setAccessible(TRUE);

    $long = str_repeat('a', 100);
    $this->assertSame($long, $method->invoke($builder, $long));
  }

  /**
   * @covers ::prepareTitle
   */
  public function testPrepareTitleWithNonStringReturnsOriginal(): void {
    $builder = $this->createBuilder(['trim_title' => 5]);
    $method = new \ReflectionMethod($builder, 'prepareTitle');
    $method->setAccessible(TRUE);

    $title = ['not', 'a', 'string'];
    $this->assertSame($title, $method->invoke($builder, $title));
  }

}
