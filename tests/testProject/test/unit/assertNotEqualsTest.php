<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class assertNotEqualsTest extends limexUnitTestCase
{
  public function testTrueNotEqualsTrue()
  {
    $this->assertNotEquals(TRUE, TRUE, 'True not equals True');
  }

  public function testTrueNotEqualsFalse()
  {
    $this->assertNotEquals(TRUE, FALSE, 'True not equals False');
  }
}

#new assertNotEqualsTest(2);
