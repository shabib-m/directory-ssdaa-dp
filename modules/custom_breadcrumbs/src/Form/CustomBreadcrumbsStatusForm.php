<?php

namespace Drupal\custom_breadcrumbs\Form;

use Drupal\Core\Entity\EntityConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Class: ModalPublishedForm.
 */
class CustomBreadcrumbsStatusForm extends EntityConfirmFormBase {

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
    return $this->t('Are you sure you want to %status the %label breadcrumb?', [
      '%status' => $this->entity->status() ? "disable" : "enable",
      '%label' => $this->entity->get('label'),
    ]);
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return $this->t('This action will %status the %label breadcrumb.', [
      '%status' => $this->entity->status() ? "disable" : "enable",
      '%label' => $this->entity->get('label'),
    ]);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->entity->setStatus(!$this->entity->status());
    $this->entity->save();
    $this->messenger()->addMessage($this->t('The breadcrumb %title has been %status.', [
      '%title' => $this->entity->get('label'),
      '%status' => $this->entity->status() ? "enabled" : "disabled",
    ]));

    $form_state->setRedirectUrl($this->getCancelUrl());
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl() {
    return new Url('entity.custom_breadcrumbs.collection');
  }

}
