<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once('testProject/test/unit/myapp/mymodule/exampleModuleClassTest.php');

class exampleModuleClassTestTest extends PHPUnit_Extensions_OutputTestCase
{
  public function runLimeTests()
  {
    new exampleModuleClassTest(1);
  }

  public function testCanIncludeModuleLibClassFile() {
    $this->expectOutputRegex('/^ok \d+ - Can include module lib class$/m');
    $this->runLimeTests();
  }

}
