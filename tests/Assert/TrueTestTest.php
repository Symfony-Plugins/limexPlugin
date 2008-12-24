<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/../testProject/test/unit/assertTrueTest.php');

/**
 * @package Assert
 */
class Assert_TrueTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private function runLimeTests()
  {
    new assertTrueTest(5);
  }

  public function testCanFailFalseIsTrue()
  {
    $this->expectOutputRegex('/^not ok \d - False is True/m');
    $this->runLimeTests();
  }

  public function testCanPassTrueIsTrue()
  {
    $this->expectOutputRegex('/^ok \d - True is True/m');
    $this->runLimeTests();
  }

  public function testCanFailNullIsTrue()
  {
    $this->expectOutputRegex('/^not ok \d - Null is True/m');
    $this->runLimeTests();
  }

  public function testCanFailOneGreaterThanTwoIsTrue()
  {
    $this->expectOutputRegex('/^not ok \d - One greater than Two is True/m');
    $this->runLimeTests();
  }

  public function testCanPassOneLessThanTwoIsTrue()
  {
    $this->expectOutputRegex('/^ok \d - One less than Two is True/m');
    $this->runLimeTests();
  }

}
