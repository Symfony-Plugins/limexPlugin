<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/../testProject/test/unit/assertNotRegExpTest.php');

/**
 * @package Assert
 */
class Assert_NotRegExpTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private function runLimeTests()
  {
    new assertNotRegExpTest(2);
  }

  public function testCanFailFooNotMatchesFoo()
  {
    $this->expectOutputRegex('/^not ok \d - foo not matches foo/m');
    $this->runLimeTests();
  }

  public function testCanPassFooNotMatchesBar()
  {
    $this->expectOutputRegex('/^ok \d - foo not matches bar/m');
    $this->runLimeTests();
  }

}
