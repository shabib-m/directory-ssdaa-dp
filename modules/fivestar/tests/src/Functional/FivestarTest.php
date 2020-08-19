<?php

namespace Drupal\Tests\fivestar\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\field\Entity\FieldConfig;
use Drupal\Tests\fivestar\Traits\FivestarTestTrait;

/**
 * Test base for the Fivestar module.
 *
 * @group Fivestar
 */
class FivestarTest extends BrowserTestBase {
  use FivestarTestTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['node', 'fivestar', 'votingapi'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * The entity display repository.
   *
   * @var \Drupal\Core\Entity\EntityDisplayRepositoryInterface
   */
  protected $displayRepository;

  /**
   * A user with permission to administer Fivestar.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * A user with permission to vote.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $voterUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Create content type for testing.
    $this->drupalCreateContentType([
      'type' => 'test_node_type',
      'name' => 'Rated content type',
    ]);

    /** @var \Drupal\Core\Entity\EntityDisplayRepositoryInterface $displayRepository */
    $this->displayRepository = \Drupal::service('entity_display.repository');

    // Create users with different permissions.
    $this->adminUser = $this->createUser([
      'create test_node_type content',
      'rate content',
    ]);
    $this->voterUser = $this->createUser([
      'rate content',
    ]);
  }

  /**
   * Tests that authors can rate their own content.
   */
  public function testAuthorRating() {
    $this->drupalLogin($this->adminUser);
    // Add an author-rated fivestar field to the test_node_type content type.
    $this->createFivestarField([
      'widget_type' => 'stars',
    ]);
    // Add the field to the display and form display.
    $this->displayRepository->getViewDisplay('node', 'test_node_type', 'default')
      ->setComponent('fivestar_test')
      ->save();
    $this->displayRepository->getFormDisplay('node', 'test_node_type', 'default')
      ->setComponent('fivestar_test')
      ->save();

    // Load the instance settings so we can set allow_ownvote.
    $instance = FieldConfig::load('node.test_node_type.fivestar_test');
    $instance->setSetting('allow_ownvote', TRUE);
    $instance->setSetting('rated_while', 'editing');
    $instance->save();

    // Create a test_node_type node with a two-star rating.
    $edit = [
      'title[0][value]' => $this->randomString(),
      // Equals a rating of 2 stars.
      'fivestar_test[0][rating]' => '40',
    ];
    $this->drupalPostForm('node/add/test_node_type', $edit, 'Save');

    // Make sure the two-star rating shows on the node view.
    $elements = $this->xpath("//div[contains(@class, 'field--name-fivestar-test')]//div[contains(@class,'star-first')]/span");
    $this->assertEquals('2', $elements[0]->getText(), 'Content authors can rate their own content using the stars widget.');
  }

  /**
   * Tests that users cannot rate content with exposed widgets.
   *
   * Tests that users cannot rate content with exposed widgets that has the
   * exposed display setting set to FALSE.
   */
  public function testViewerNonRating() {
    // Add an exposed field, with the 'exposed' display settings set to FALSE.
    $this->createFivestarField([
      'widget_type' => 'exposed',
      'display' => [
        'default' => [
          'type' => 'fivestar_stars',
          'settings' => [
            'style' => 'average',
            'text' => 'average',
            'expose' => FALSE,
          ],
        ],
      ],
    ]);
    // Add the field to the display and form display.
    $this->displayRepository->getViewDisplay('node', 'test_node_type', 'default')
      ->setComponent('fivestar_test')
      ->save();
    $this->displayRepository->getFormDisplay('node', 'test_node_type', 'default')
      ->setComponent('fivestar_test')
      ->save();

    // Create a node with our field to test the static widget.
    $node = $this->createNode(['type' => 'test_node_type']);
    // Rate the test_node_type.
    $this->drupalLogin($this->voterUser);
    $this->drupalGet('node/' . $node->id());
    $this->assertRaw('No votes yet', 'Fivestar field has no votes.');
    $this->assertEmpty($this->xpath("//form[contains(@class, 'fivestar-widget')]"));
  }

}
