<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/../testProject/test/unit/assertTypeTest.php');

/**
 * @package Assert
 */
class Assert_TypeTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private function runLimeTests()
  {
    new assertTypeTest(4);
  }

  public function testCanFailInt2IsTypeOfString()
  {
    $this->expectOutputRegex('/^not ok \d - Int 2 is type of string$/m');
    $this->runLimeTests();
  }

  public function testCanPassFooIsTypeOfString()
  {
    $this->expectOutputRegex('/^ok \d - foo is type of string$/m');
    $this->runLimeTests();
  }

  public function testCanFailObjectAIsTypeOfObjectB()
  {
    $this->expectOutputRegex('/^not ok \d - ObjectA is type of ObjectB$/m');
    $this->runLimeTests();
  }

  public function testCanPassObjectAIsTypeOfObjectA()
  {
    $this->expectOutputRegex('/^ok \d - ObjectA is type of ObjectA$/m');
    $this->runLimeTests();
  }

}
