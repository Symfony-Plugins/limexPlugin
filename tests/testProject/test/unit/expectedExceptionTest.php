<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

/**
 * Stub Exception for testing
 */
class StubException extends Exception {}

class expectedExceptionTest extends limexUnitTestCase
{

  /**
   * @expectedException Exception
   */
  public function testCanCatchException()
  {
    throw new Exception('throwing generic exception');
  }

  /**
   * @expectedException Exception
   */
  public function testCanDetectExpectedExceptionNotThrown()
  {
  }

  /**
   * @expectedException StubException
   */
  public function testCanCatchCustomException()
  {
    throw new StubException('throwing stub exception');
  }
}

#new expectedExceptionTest(3);
