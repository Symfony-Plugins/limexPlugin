<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class assertRegExpTest extends limexUnitTestCase
{
  public function testFooMatchesBar()
  {
    $this->assertRegExp('/foo/', 'bar', 'foo matches bar');
  }

  public function testFooMatchesFoo()
  {
    $this->assertRegExp('/foo/', 'foo', 'foo matches foo');
  }
}

#new assertRegExpTest(2);
