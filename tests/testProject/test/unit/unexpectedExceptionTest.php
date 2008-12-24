<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class unexpectedExceptionTest extends limexUnitTestCase
{
  public function testCanRethrowUnexpectedException()
  {
    throw new Exception('throwing unexpected exception');
  }
}

#new unexpectedExceptionTest(0);
