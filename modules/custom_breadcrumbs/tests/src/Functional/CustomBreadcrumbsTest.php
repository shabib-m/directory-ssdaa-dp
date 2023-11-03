<?php

namespace Drupal\Tests\custom_breadcrumbs\Functional;

use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\system\Functional\Menu\AssertBreadcrumbTrait;

/**
 * Tests custom breadcrumbs.
 *
 * @group custom_breadcrumbs
 */
class CustomBreadcrumbsTest extends BrowserTestBase {

  use AssertBreadcrumbTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'block',
    'node',
    'custom_breadcrumbs',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $web_user = $this->drupalCreateUser([
      'bypass node access',
      'administer custom_breadcrumbs',
    ]);
    $this->drupalLogin($web_user);

    // Create Basic page and Article node types.
    $this->drupalCreateContentType([
      'type' => 'page',
      'name' => 'Basic page',
    ]);
    $this->drupalCreateContentType([
      'type' => 'article',
      'name' => 'Article',
    ]);

    $this->drupalPlaceBlock('system_breadcrumb_block');
  }

  /**
   * Tests a custom breadcrumbs for nodes.
   */
  public function testNodeBreadcrumbs() {

    // Add a custom breadcrumbs to the Basic page and Article.
    $edit = [
      'label' => 'Article breadcrumbs',
      'id' => 'article_breadcrumbs',
      'status' => 1,
      'breadcrumbPaths' => "/foo\n/bar",
      'breadcrumbTitles' => "Foo\nBar",
      'entityType' => 'node',
    ];
    $this->drupalGet('admin/structure/custom_breadcrumbs/add');
    $this->submitForm($edit, 'Save');

    $edit = [
      'label' => 'Page breadcrumbs',
      'id' => 'page_breadcrumbs',
      'status' => 1,
      'breadcrumbPaths' => "/foo2\n/bar2",
      'breadcrumbTitles' => "Foo2\nBar2",
      'entityType' => 'node',
    ];
    $this->drupalGet('admin/structure/custom_breadcrumbs/add');
    $this->submitForm($edit, 'Save');

    // An additional additional options were not available the first time due to
    // the disabled ajax. Edit the custom breadcrumbs again and select the
    // entity bundle.
    $edit = [
      'entityBundle' => 'article',
    ];
    $this->drupalGet('admin/structure/custom-breadcrumbs/article_breadcrumbs');
    $this->submitForm($edit, 'Save');
    $edit = [
      'entityBundle' => 'page',
    ];
    $this->drupalGet('admin/structure/custom-breadcrumbs/page_breadcrumbs');
    $this->submitForm($edit, 'Save');

    $this->drupalCreateNode([
      'title' => $this->randomString(),
      'id' => 1,
      'type' => 'article',
    ]);
    $this->drupalCreateNode([
      'title' => $this->randomString(),
      'id' => 2,
      'type' => 'page',
    ]);

    $home_path = Url::fromRoute('<front>')->toString();
    $this->assertBreadcrumb('node/1', [
      $home_path => 'Home',
      'foo' => 'Foo',
      'bar' => 'Bar',
    ]);
    $this->assertBreadcrumb('node/2', [
      $home_path => 'Home',
      'foo2' => 'Foo2',
      'bar2' => 'Bar2',
    ]);
  }

  /**
   * Tests custom breadcrumbs settings.
   */
  public function testCustomBreadcrumbsSettings() {
    // Add a custom breadcrumbs to the Article.
    $edit = [
      'label' => 'Article breadcrumbs',
      'id' => 'article_breadcrumbs',
      'status' => 1,
      'breadcrumbPaths' => "/foo\n/bar",
      'breadcrumbTitles' => "Foo\nBar",
      'entityType' => 'node',
    ];
    $this->drupalGet('admin/structure/custom_breadcrumbs/add');
    $this->submitForm($edit, 'Save');
    $edit = [
      'entityBundle' => 'article',
    ];
    $this->drupalGet('admin/structure/custom-breadcrumbs/article_breadcrumbs');
    $this->submitForm($edit, 'Save');

    $this->config('custom_breadcrumbs.settings')
      ->set('home', TRUE)
      ->set('home_link', 'Home')
      ->set('current_page', FALSE)
      ->set('current_page_link', FALSE)
      ->set('trim_title', 0)
      ->set('admin_pages_disable', FALSE)
      ->save();

    $label = 'Test article';
    $article = $this->drupalCreateNode([
      'title' => $label,
      'type' => 'article',
    ]);

    $home_path = Url::fromRoute('<front>')->toString();

    $this->assertBreadcrumb('node/' . $article->id(), [
      $home_path => 'Home',
      'foo' => 'Foo',
      'bar' => 'Bar',
    ]);

    $this->config('custom_breadcrumbs.settings')
      ->set('home_link', 'Home Page')
      ->save();
    $this->drupalGet('node/' . $article->id());

    $this->drupalGet('node/' . $article->id());

    $this->assertBreadcrumb('node/' . $article->id(), [
      $home_path => 'Home Page',
      'foo' => 'Foo',
      'bar' => 'Bar',
    ]);

    $this->config('custom_breadcrumbs.settings')
      ->set('home', FALSE)
      ->save();

    $this->assertBreadcrumb('node/' . $article->id(), [
      'foo' => 'Foo',
      'bar' => 'Bar',
    ]);

    $this->config('custom_breadcrumbs.settings')
      ->set('current_page', TRUE)
      ->set('current_page_link', TRUE)
      ->save();

    $this->assertBreadcrumb('node/' . $article->id(), [
      'foo' => 'Foo',
      'bar' => 'Bar',
      $article->toUrl()->toString() => 'Test article',
    ]);

    $length = 10;

    $this->config('custom_breadcrumbs.settings')
      ->set('trim_title', $length)
      ->save();

    $this->assertBreadcrumb('node/' . $article->id(), [
      'foo' => 'Foo',
      'bar' => 'Bar',
      $article->toUrl()->toString() => substr('Test article', 0, $length) . '...',
    ]);
  }

  /**
   * Tests a custom breadcrumbs for paths.
   */
  public function testPathBreadcrumbs() {

    // Create node 1.
    $this->drupalCreateNode([
      'title' => $this->randomString(),
      'id' => 1,
      'type' => 'article',
    ]);

    // Add a custom breadcrumbs type path.
    $edit = [
      'label' => 'Path breadcrumbs',
      'id' => 'path_breadcrumbs',
      'status' => 1,
      'type' => 2,
      'pathPattern' => "/node/1",
      'breadcrumbPaths' => "/foo\n/bar",
      'breadcrumbTitles' => "Foo\nBar",
    ];
    $this->drupalGet('admin/structure/custom_breadcrumbs/add');
    $this->submitForm($edit, 'Save');

    $home_path = Url::fromRoute('<front>')->toString();
    $this->assertBreadcrumb('node/1', [
      $home_path => 'Home',
      'foo' => 'Foo',
      'bar' => 'Bar',
    ]);

    // Create node 2.
    $this->drupalCreateNode([
      'title' => $this->randomString(),
      'id' => 2,
      'type' => 'article',
    ]);

    // Add one more path pattern to the custom breadcrumb.
    $edit = [
      'pathPattern' => "/node/1\n/node/2",
    ];
    $this->drupalGet('admin/structure/custom-breadcrumbs/path_breadcrumbs');
    $this->submitForm($edit, 'Save');

    // Test with more than one path pattern.
    $this->assertBreadcrumb('node/1', [
      $home_path => 'Home',
      'foo' => 'Foo',
      'bar' => 'Bar',
    ]);
    $this->assertBreadcrumb('node/2', [
      $home_path => 'Home',
      'foo' => 'Foo',
      'bar' => 'Bar',
    ]);
  }

}
