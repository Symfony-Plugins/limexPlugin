<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/../testProject/test/unit/assertRegExpTest.php');

/**
 * @package Assert
 */
class Assert_RegExpTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private function runLimeTests()
  {
    new assertRegExpTest(2);
  }

  public function testCanFailFooMatchesBar()
  {
    $this->expectOutputRegex('/^not ok \d - foo matches bar/m');
    $this->runLimeTests();
  }

  public function testCanPassFooMatchesFoo()
  {
    $this->expectOutputRegex('/^ok \d - foo matches foo/m');
    $this->runLimeTests();
  }

}
