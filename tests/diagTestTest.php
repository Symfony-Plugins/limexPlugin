<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once('testProject/test/unit/diagTest.php');

class diagTestTest extends PHPUnit_Extensions_OutputTestCase
{
  public function runLimeTests()
  {
    new diagTest(1);
  }

  public function testCanSendMessage() {
    $this->expectOutputRegex('/^# Can send message$/m');
    $this->runLimeTests();
  }

}
