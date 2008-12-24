<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class assertTrueTest extends limexUnitTestCase
{
  public function testFalseIsTrue()
  {
    $this->assertTrue(FALSE, 'False is True');
  }

  public function testTrueIsTrue()
  {
    $this->assertTrue(TRUE, 'True is True');
  }

  public function testNullIsTrue()
  {
    $this->assertTrue(NULL, 'Null is True');
  }

  public function testOneGreaterThanTwoIsTrue()
  {
    $this->assertTrue(1 > 2, 'One greater than Two is True');
  }

  public function testOneLessThanTwoIsTrue()
  {
    $this->assertTrue(1 < 2, 'One less than Two is True');
  }
}

#new assertTrueTest(5);
