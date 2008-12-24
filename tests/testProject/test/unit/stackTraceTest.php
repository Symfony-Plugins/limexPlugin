<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class stackTraceTest extends limexUnitTestCase
{

  public function testAssertEqualsShowsCorrectStackTrace()
  {
    $this->assertEquals(TRUE, FALSE);
  }

  public function testAssertFalseShowsCorrectStackTrace()
  {
    $this->assertFalse(TRUE);
  }

  public function testAssertNotEqualsShowsCorrectStackTrace()
  {
    $this->assertNotEquals(TRUE, TRUE);
  }

  public function testAssertNotNullShowsCorrectStackTrace()
  {
    $this->assertNotNull(NULL);
  }

  public function testAssertNotRegExpShowsCorrectStackTrace()
  {
    $this->assertNotRegExp('/foo/', 'foo');
  }

  public function testAssertNullShowsCorrectStackTrace()
  {
    $this->assertNull(TRUE);
  }

  public function testAssertRegExpShowsCorrectStackTrace()
  {
    $this->assertRegExp('/foo/', 'bar');
  }

  public function testAssertTrueShowsCorrectStackTrace()
  {
    $this->assertTrue(FALSE);
  }

  public function testAssertTypeShowsCorrectStackTrace()
  {
    $this->assertType('int', 'foo');
  }

}

#new stackTraceTest(9);
