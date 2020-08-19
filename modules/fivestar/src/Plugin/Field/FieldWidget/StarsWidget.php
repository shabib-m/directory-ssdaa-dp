<?php

namespace Drupal\fivestar\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element;

/**
 * Plugin implementation of the 'fivestar_stars' widget.
 *
 * @FieldWidget(
 *   id = "fivestar_stars",
 *   label = @Translation("Stars"),
 *   field_types = {
 *     "fivestar"
 *   }
 * )
 */
class StarsWidget extends FivestarWidgetBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
      'display_format' => 'average',
      'text_format' => 'none',
      'fivestar_widget' => 'basic',
    ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $elements = parent::settingsForm($form, $form_state);

    $elements['fivestar_widget'] = [
      '#type' => 'radios',
      '#options' => $this->widgetManager->getWidgetsOptionSet(),
      '#default_value' => $this->getSelectedWidgetKey(),
      '#attributes' => ['class' => ['fivestar-widgets', 'clearfix']],
      // '#pre_render' => [[$this, 'previewsExpand']], // the theme function in here doesn't do anything
      '#attached' => ['library' => ['fivestar/fivestar.admin']],
    ];

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary[] = $this->t('Style: @widget', [
      '@widget' => $this->widgetManager->getWidgetLabel($this->getSelectedWidgetKey()),
    ]);
    $summary[] = $this->t('Stars display: @style, Text display: @text', [
      '@style' => $this->getSetting('display_format'),
      '@text' => $this->getSetting('text_format'),
    ]);

    return $summary;
  }

  /**
   * Prepares the widget's render element for rendering.
   *
   * @param array $element
   *   The element to transform.
   *
   * @return array
   *   The transformed element.
   *
   * @see ::formElement()
   */
  public function previewsExpand(array $element) {
    $widgets = $this->widgetManager->getWidgets();

    foreach (Element::children($element) as $widget_key) {
      $vars = [
        '#theme' => 'fivestar_preview_widget',
        // '#css' => ''
        '#attached' => [
          'library' => [
            $widgets[$widget_key]['library'],
          ],
        ],
        '#name' => $widgets[$widget_key]['label'],
      ];
      $element[$widget_key]['#description'] = \Drupal::service('renderer')->render($vars);
    }

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $widget_active_key = $this->getSelectedWidgetKey();
    $display_settings = [
      'name' => $this->widgetManager->getWidgetInfo($widget_active_key) ? $widget_active_key : 'default',
    ] + $this->getSettings();
    $settings = $items[$delta]->getFieldDefinition()->getSettings();
    $display_settings += $settings;

    $is_field_config_form = ($form_state->getBuildInfo()['form_id'] == 'field_config_edit_form');
    $voting_is_allowed = (bool) ($settings['rated_while'] == 'editing') || $is_field_config_form;

    $element['rating'] = [
      '#type' => 'fivestar',
      '#stars' => $settings['stars'],
      '#allow_clear' => $settings['allow_clear'],
      '#allow_revote' => $settings['allow_revote'],
      '#allow_ownvote' => $settings['allow_ownvote'],
      '#default_value' => isset($items[$delta]->rating) ? $items[$delta]->rating : 0,
      '#widget' => $display_settings,
      '#settings' => $display_settings,
      '#show_static_result' => !$voting_is_allowed,
    ];

    return $element;
  }

}
