<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/../testProject/test/unit/assertNotEqualsTest.php');

/**
 * @package Assert
 */
class Assert_NotEqualsTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private function runLimeTests()
  {
    new assertNotEqualsTest(2);
  }

  public function testCanFailTrueNotEqualsTrue()
  {
    $this->expectOutputRegex('/^not ok \d - True not equals True/m');
    $this->runLimeTests();
  }

  public function testCanPassTrueNotEqualsFalse()
  {
    $this->expectOutputRegex('/^ok \d - True not equals False/m');
    $this->runLimeTests();
  }

}
