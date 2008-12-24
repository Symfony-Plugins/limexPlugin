<?php
require_once 'PHPUnit/Framework.php';
require_once(dirname(__FILE__) . '/testProject/test/unit/unexpectedExceptionTest.php');

class UnexpectedExceptionTestTest extends PHPUnit_Framework_TestCase
{
  private function runLimeTests()
  {
    new unexpectedExceptionTest(1);
  }

  /**
   * @expectedException Exception
   */
  public function testCanRethrowUnexpectedException()
  {
    $this->runLimeTests();
  }
}
