<?php

namespace Drupal\custom_breadcrumbs\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure Custom breadcrumb settings for this site.
 */
class CustomBreadcrumbsSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_breadcrumbs_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['custom_breadcrumbs.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('custom_breadcrumbs.settings');
    $form['home'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Prepend default "Home" link'),
      '#default_value' => $config->get('home'),
    ];

    $form['home_link'] = [
      '#type' => 'textfield',
      '#title' => $this->t('"Home" text'),
      '#default_value' => $config->get('home_link'),
      '#states' => [
        'visible' => [
          'input[name="home"]' => ['checked' => TRUE],
        ],
      ],
    ];

    $form['current_page'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Append curent page title like the latest crumb'),
      '#default_value' => $config->get('current_page'),
    ];

    $form['current_page_link'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Last crumb with link'),
      '#default_value' => $config->get('current_page_link'),
      '#states' => [
        'visible' => [
          'input[name="current_page"]' => ['checked' => TRUE],
        ],
      ],
    ];

    $form['trim_title'] = [
      '#type' => 'number',
      '#title' => $this->t('Trim title length'),
      '#default_value' => $config->get('trim_title'),
      '#min' => 0,
    ];

    $form['admin_pages_disable'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Disable on admin pages'),
      '#description' => $this->t('If checked, Custom breadcrumb will be disabled on admin pages.'),
      '#default_value' => $config->get('admin_pages_disable'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('custom_breadcrumbs.settings')
      ->set('home', $form_state->getValue('home'))
      ->set('home_link', $form_state->getValue('home_link'))
      ->set('current_page', $form_state->getValue('current_page'))
      ->set('current_page_link', $form_state->getValue('current_page_link'))
      ->set('trim_title', $form_state->getValue('trim_title'))
      ->set('admin_pages_disable', $form_state->getValue('admin_pages_disable'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
