<?php

namespace Drupal\Tests\bootstrap_library\Unit;

use Drupal\Tests\UnitTestCase;

/**
 * Unit tests for the procedural helper functions of bootstrap_library.
 *
 * @group bootstrap_library
 */
class BootstrapLibraryHelpersTest extends UnitTestCase {

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    // The helper functions live in the .module file. Load it so the global
    // functions become available to the test runner.
    require_once __DIR__ . '/../../../bootstrap_library.module';
  }

  /**
   * @covers ::_bootstrap_library_string_to_array
   */
  public function testStringToArrayNormalizesLineEndingsAndDropsBlankLines(): void {
    $text = "blog\r\nblog/*\r\n\r\n<front>";
    $result = _bootstrap_library_string_to_array($text);

    // Blank lines are removed, remaining values preserved in order.
    $this->assertSame(['blog', 'blog/*', '<front>'], array_values($result));
  }

  /**
   * @covers ::_bootstrap_library_string_to_array
   */
  public function testStringToArrayWithEmptyStringReturnsEmpty(): void {
    $this->assertSame([], array_values(_bootstrap_library_string_to_array('')));
  }

  /**
   * @covers ::_bootstrap_library_array_to_string
   */
  public function testArrayToStringJoinsWithCarriageReturnNewline(): void {
    $lines = ['blog', 'blog/*', '<front>'];

    $this->assertSame("blog\r\nblog/*\r\n<front>", _bootstrap_library_array_to_string($lines));
  }

  /**
   * @covers ::_bootstrap_library_array_to_string
   * @covers ::_bootstrap_library_string_to_array
   */
  public function testArrayToStringAndBackIsLossless(): void {
    $lines = ['page/one', 'page/two', 'page/three'];
    $string = _bootstrap_library_array_to_string($lines);

    $this->assertSame($lines, array_values(_bootstrap_library_string_to_array($string)));
  }

  /**
   * @covers ::_bootstrap_library_object_to_array
   */
  public function testObjectToArrayConvertsNestedObjects(): void {
    $data = (object) [
      'css' => 'style.css',
      'js' => (object) [0 => 'a.js', 1 => 'b.js'],
    ];

    $expected = [
      'css' => 'style.css',
      'js' => ['a.js', 'b.js'],
    ];

    $this->assertSame($expected, _bootstrap_library_object_to_array($data));
  }

  /**
   * @covers ::_bootstrap_library_object_to_array
   */
  public function testObjectToArrayLeavesScalarUnchanged(): void {
    $this->assertSame('scalar', _bootstrap_library_object_to_array('scalar'));
    $this->assertSame(42, _bootstrap_library_object_to_array(42));
  }

  /**
   * @covers ::_bootstrap_library_isSecure
   */
  public function testIsSecureDetectsHttpsFlag(): void {
    $server = $_SERVER;
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 80;

    $this->assertSame('https:', _bootstrap_library_isSecure());

    $_SERVER = $server;
  }

  /**
   * @covers ::_bootstrap_library_isSecure
   */
  public function testIsSecureDetectsPort443(): void {
    $server = $_SERVER;
    unset($_SERVER['HTTPS']);
    $_SERVER['SERVER_PORT'] = 443;

    $this->assertSame('https:', _bootstrap_library_isSecure());

    $_SERVER = $server;
  }

  /**
   * @covers ::_bootstrap_library_isSecure
   */
  public function testIsSecureReturnsHttpWhenNotSecure(): void {
    $server = $_SERVER;
    $_SERVER['HTTPS'] = 'off';
    $_SERVER['SERVER_PORT'] = 80;

    $this->assertSame('http:', _bootstrap_library_isSecure());

    $_SERVER = $server;
  }

}
