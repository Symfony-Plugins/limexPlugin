<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class assertFalseTest extends limexUnitTestCase
{
  public function testFalseIsFalse()
  {
    $this->assertFalse(FALSE, 'False is False');
  }

  public function testTrueIsFalse()
  {
    $this->assertFalse(TRUE, 'True is False');
  }

  public function testNullIsFalse()
  {
    $this->assertFalse(NULL, 'Null is False');
  }

  public function testOneGreaterThanTwoIsFalse()
  {
    $this->assertFalse(1 > 2, 'One greater than Two is False');
  }

  public function testOneLessThanTwoIsFalse()
  {
    $this->assertFalse(1 < 2, 'One less than Two is False');
  }
}

#new assertFalseTest(5);
