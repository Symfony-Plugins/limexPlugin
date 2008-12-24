<?php
require_once 'PHPUnit/Framework.php';

/**
 * Tests of PHPUnit's behaviour
 *
 * @package Assert
 */
class Assert_PHPUnitTest extends PHPUnit_Framework_TestCase
{
  public function testNullIsLooselyFalse()
  {
    $this->assertTrue(NULL == FALSE);
  }

  public function testNullIsNotStrictlyFalse()
  {
    $this->assertFalse(NULL === FALSE);
  }

  /**
   * $this->assertFalse(NULL) fails, so PHPUnit must be strict
   */
/*  public function testAssertFalseIsNotStrict()
  {
    $this->assertFalse(NULL);
  }
*/

  public function testNullEqualsFalse()
  {
    $this->assertEquals(NULL, FALSE);
  }

}
