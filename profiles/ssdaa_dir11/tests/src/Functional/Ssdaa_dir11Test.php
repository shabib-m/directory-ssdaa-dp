<?php

declare(strict_types=1);

namespace Drupal\Tests\ssdaa_dir11\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\ssdaa_dir11\Traits\ssdaa_dir11TestTrait;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;

/**
 * Tests ssdaa_dir11 installation profile expectations.
 */
#[Group('ssdaa_dir11')]
#[RunTestsInSeparateProcesses]
class ssdaa_dir11Test extends BrowserTestBase {
  use ssdaa_dir11TestTrait;

  /**
   * {@inheritdoc}
   */
  protected $profile = 'ssdaa_dir11';

}
