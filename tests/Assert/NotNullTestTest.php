<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/../testProject/test/unit/assertNotNullTest.php');

/**
 * @package Assert
 */
class Assert_NotNullTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private function runLimeTests()
  {
    new assertNotNullTest(4);
  }

  public function testCanPassTrueIsNotNull()
  {
    $this->expectOutputRegex('/^ok \d - TRUE is not NULL/m');
    $this->runLimeTests();
  }

  public function testCanPassFalseIsNotNull()
  {
    $this->expectOutputRegex('/^ok \d - FALSE is not NULL/m');
    $this->runLimeTests();
  }

  public function testCanFailNullIsNotNull()
  {
    $this->expectOutputRegex('/^not ok \d - NULL is not NULL/m');
    $this->runLimeTests();
  }

  public function testCanFailUnassignedVariableIsNotNull()
  {
    $this->expectOutputRegex('/^not ok \d - Unassigned Variable is not NULL/m');
    $this->runLimeTests();
  }
}
