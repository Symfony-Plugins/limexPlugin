<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once('testProject/test/unit/myapp/exampleAppClassTest.php');

class exampleAppClassTestTest extends PHPUnit_Extensions_OutputTestCase
{
  public function runLimeTests()
  {
    new exampleAppClassTest(1);
  }

  public function testCanIncludeProjectLibClassFile() {
    $this->expectOutputRegex('/^ok \d+ - Can include app lib class$/m');
    $this->runLimeTests();
  }

}
