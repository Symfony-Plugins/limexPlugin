<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class assertNotRegExpTest extends limexUnitTestCase
{
  public function testFooNotMatchesFoo()
  {
    $this->assertNotRegExp('/foo/', 'foo', 'foo not matches foo');
  }

  public function testFooNotMatchesBar()
  {
    $this->assertNotRegExp('/foo/', 'bar', 'foo not matches bar');
  }
}

#new assertNotRegExpTest(2);
