<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/../testProject/test/unit/assertNullTest.php');

/**
 * @package Assert
 */
class Assert_NullTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private function runLimeTests()
  {
    new assertNullTest(4);
  }

  public function testCanFailTrueIsNull()
  {
    $this->expectOutputRegex('/^not ok \d - TRUE is NULL/m');
    $this->runLimeTests();
  }

  public function testCanFailFalseIsNull()
  {
    $this->expectOutputRegex('/^not ok \d - FALSE is NULL/m');
    $this->runLimeTests();
  }

  public function testCanPassNullIsNull()
  {
    $this->expectOutputRegex('/^ok \d - NULL is NULL/m');
    $this->runLimeTests();
  }

  public function testCanPassUnassignedVariableIsNull()
  {
    $this->expectOutputRegex('/^ok \d - Unassigned Variable is NULL/m');
    $this->runLimeTests();
  }
}
