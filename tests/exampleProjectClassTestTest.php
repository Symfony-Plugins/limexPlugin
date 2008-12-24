<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once('testProject/test/unit/exampleProjectClassTest.php');

class exampleProjectClassTestTest extends PHPUnit_Extensions_OutputTestCase
{
  public function runLimeTests()
  {
    new exampleProjectClassTest(1);
  }

  public function testCanIncludeProjectLibClassFile() {
    $this->expectOutputRegex('/^ok \d+ - Can include project lib class$/m');
    $this->runLimeTests();
  }

}
