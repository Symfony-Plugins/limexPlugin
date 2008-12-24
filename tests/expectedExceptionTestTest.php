<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/testProject/test/unit/expectedExceptionTest.php');

class expectedExceptionTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private function runLimeTests()
  {
    new expectedExceptionTest(3);
  }

  public function testCanCatchExpectedException()
  {
    $this->expectOutputRegex("/^ok \d - Caught exception 'Exception' with message 'throwing generic exception'$/m");
    $this->runLimeTests();
  }

  public function testCanDetectExpectedExceptionNotThrown()
  {
    $this->expectOutputRegex("/^not ok \d - Expected exception 'Exception' was not thrown$/m");
    $this->runLimeTests();
  }

  public function testCanCatchCustomException()
  {
    $this->expectOutputRegex("/^ok \d - Caught exception 'StubException' with message 'throwing stub exception'$/m");
    $this->runLimeTests();
  }
}
