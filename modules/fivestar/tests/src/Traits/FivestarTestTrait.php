<?php

namespace Drupal\Tests\fivestar\Traits;

use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;

/**
 * Utility methods for using Fivestar in Kernel and Functional tests.
 *
 * @group Fivestar
 */
trait FivestarTestTrait {

  /**
   * Creates a fivestar field and storage, and adds it to a content type.
   *
   * @param array $options
   *   (optional) An associative array of options for the field and instance.
   *   The keys can be one or more of:
   *   - content_type: Defaults to 'test_node_type'.
   *   - widget_type: Defaults to 'stars'.
   *   - display: Defaults to an empty array.
   */
  protected function createFivestarField(array $options = []) {
    $options = $options + [
      'content_type' => 'test_node_type',
      'widget_type' => 'stars',
      'display' => [],
    ];

    // Define and create the storage.
    $field_storage = FieldStorageConfig::create([
      'field_name' => 'fivestar_test',
      'entity_type' => 'node',
      'type' => 'fivestar',
      'cardinality' => 1,
      'settings' => [
        'axis' => 'vote',
      ],
    ]);
    $field_storage->save();

    // Define and create the field.
    $field = FieldConfig::create([
      'entity_type' => 'node',
      'field_name' => $field_storage->getName(),
      'label' => 'Fivestar test field',
      'bundle' => $options['content_type'],
      'widget' => [
        'type' => $options['widget_type'],
        'settings' => [
          'widget' => [
            'fivestar_widget' => 'default',
          ],
        ],
      ],
      'settings' => [
        'axis' => 'vote',
        'stars' => '5',
      ],
      'display' => $options['display'],
    ]);
    $field->save();
  }

}
