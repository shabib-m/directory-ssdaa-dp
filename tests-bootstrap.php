<?php

/**
 * @file
 * PHPUnit bootstrap that loads Drupal's test bootstrap.
 */

require __DIR__ . '/core/tests/bootstrap.php';
// Ensure the PHPUnit compatibility trait alias is registered. On case-sensitive
// filesystems the class name (PhpUnitCompatibilityTrait) does not match the
// file name (PhpunitCompatibilityTrait.php), so load it explicitly.
require_once __DIR__ . '/core/tests/Drupal/Tests/PhpunitCompatibilityTrait.php';
