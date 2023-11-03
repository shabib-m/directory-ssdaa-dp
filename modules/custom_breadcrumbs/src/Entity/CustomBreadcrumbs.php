<?php

namespace Drupal\custom_breadcrumbs\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\custom_breadcrumbs\CustomBreadcrumbsInterface;

/**
 * Defines the custom breadcrumbs entity type.
 *
 * @ConfigEntityType(
 *   id = "custom_breadcrumbs",
 *   label = @Translation("Custom breadcrumbs"),
 *   label_collection = @Translation("Custom breadcrumbs"),
 *   label_singular = @Translation("custom breadcrumb"),
 *   label_plural = @Translation("custom breadcrumbs"),
 *   label_count = @PluralTranslation(
 *     singular = "@count custom breadcrumb",
 *     plural = "@count custom breadcrumbs",
 *   ),
 *   handlers = {
 *     "list_builder" =
 *   "Drupal\custom_breadcrumbs\CustomBreadcrumbsListBuilder",
 *     "form" = {
 *       "add" = "Drupal\custom_breadcrumbs\Form\CustomBreadcrumbsForm",
 *       "edit" = "Drupal\custom_breadcrumbs\Form\CustomBreadcrumbsForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *       "status" = "Drupal\custom_breadcrumbs\Form\CustomBreadcrumbsStatusForm",
 *     }
 *   },
 *   config_prefix = "custom_breadcrumbs",
 *   admin_permission = "administer custom_breadcrumbs",
 *   links = {
 *     "collection" = "/admin/structure/custom-breadcrumbs",
 *     "add-form" = "/admin/structure/custom-breadcrumbs/add",
 *     "edit-form" =
 *   "/admin/structure/custom-breadcrumbs/{custom_breadcrumbs}",
 *     "delete-form" =
 *   "/admin/structure/custom-breadcrumbs/{custom_breadcrumbs}/delete",
 *   "status_form" = "/custom_breadcrumbs/{modal_page_modal}/status",
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "status",
 *     "description",
 *     "entityType",
 *     "entityBundle",
 *     "language",
 *     "breadcrumbPaths",
 *     "breadcrumbTitles",
 *     "type",
 *     "pathPattern",
 *     "extraCacheContexts"
 *   }
 * )
 */
class CustomBreadcrumbs extends ConfigEntityBase implements CustomBreadcrumbsInterface {

  /**
   * The custom breadcrumb ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The custom breadcrumb label.
   *
   * @var string
   */
  protected $label;

  /**
   * The custom breadcrumb status.
   *
   * @var bool
   */
  protected $status;

  /**
   * The custom_breadcrumbs description.
   *
   * @var string
   */
  protected $description;

  /**
   * The entity type.
   *
   * @var string
   */
  protected $entityType;

  /**
   * The entity bundle.
   *
   * @var string
   */
  protected $entityBundle;

  /**
   * Language.
   *
   * @var string
   */
  protected $language;

  /**
   * Breadcrum paths.
   *
   * @var string
   */
  protected $breadcrumbPaths;

  /**
   * The breadcrumb titles.
   *
   * @var string
   */
  protected $breadcrumbTitles;

  /**
   * Type of breadcrumb.
   *
   * @var string
   */
  protected $type;

  /**
   * Path pattern.
   *
   * @var string
   */
  protected $pathPattern;

  /**
   * Extra cache contexts.
   *
   * @var string
   */
  protected $extraCacheContexts;

  /**
   * Helper function to get values and split per one line.
   *
   * @param string $field
   *   Field name.
   *
   * @return array|false|string[]
   *   Values form field.
   */
  public function getMultiValues(string $field) {
    return preg_split('/\r\n|\r|\n/', $this->get($field) ?? '');
  }

}
