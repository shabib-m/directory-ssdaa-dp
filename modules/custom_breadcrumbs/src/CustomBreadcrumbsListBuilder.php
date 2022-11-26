<?php

namespace Drupal\custom_breadcrumbs;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Provides a listing of custom breadcrumbs.
 */
class CustomBreadcrumbsListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['label'] = $this->t('Label');
    $header['entityType'] = $this->t('Entity type');
    $header['entityBundle'] = $this->t('Entity bundle');
    $header['language'] = $this->t('Language');
    $header['status'] = $this->t('Status');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /** @var \Drupal\custom_breadcrumbs\CustomBreadcrumbsInterface $entity */
    $row['label'] = $entity->label();
    $row['entityType'] = $entity->get('entityType');
    $row['entityBundlee'] = $entity->get('entityBundle');
    $row['language'] = $entity->get('language');
    $row['status'] = $entity->status() ? $this->t('Enabled') : $this->t('Disabled');
    return $row + parent::buildRow($entity);
  }

  /**
   * {@inheritdoc}
   */
  public function getDefaultOperations(EntityInterface $entity) {
    $operations = parent::getDefaultOperations($entity);
    $operations['status'] = [
      'title' => $this->t('Enable/Disable'),
      'weight' => 15,
      'url' => $this->ensureDestination($entity->toUrl('status_form')),
    ];

    return $operations;
  }

}
