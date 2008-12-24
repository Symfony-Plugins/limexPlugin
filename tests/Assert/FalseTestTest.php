<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/../testProject/test/unit/assertFalseTest.php');

/**
 * @package Assert
 */
class Assert_FalseTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private function runLimeTests()
  {
    new assertFalseTest(5);
  }

  public function testCanPassFalseIsFalse()
  {
    $this->expectOutputRegex('/^ok \d - False is False/m');
    $this->runLimeTests();
  }

  public function testCanFailTrueIsFalse()
  {
    $this->expectOutputRegex('/^not ok \d - True is False/m');
    $this->runLimeTests();
  }

  public function testCanFailNullIsFalse()
  {
    $this->expectOutputRegex('/^not ok \d - Null is False/m');
    $this->runLimeTests();
  }

  public function testCanPassOneGreaterThanTwoIsFalse()
  {
    $this->expectOutputRegex('/^ok \d - One greater than Two is False/m');
    $this->runLimeTests();
  }

  public function testCanFailOneLessThanTwoIsFalse()
  {
    $this->expectOutputRegex('/^not ok \d - One less than Two is False/m');
    $this->runLimeTests();
  }

}
