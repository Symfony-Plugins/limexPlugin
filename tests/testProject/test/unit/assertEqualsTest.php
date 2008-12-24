<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class assertEqualsTest extends limexUnitTestCase
{
  public function testTrueEqualsFalse()
  {
    $this->assertEquals(TRUE, FALSE, 'True equals False');
  }

  public function testTrueEqualsTrue()
  {
    $this->assertEquals(TRUE, TRUE, 'True equals True');
  }

  public function testInt1EqualsInt2()
  {
    $this->assertEquals(1, 2, 'Int 1 equals Int 2');
  }

  public function testInt1EqualsInt1()
  {
    $this->assertEquals(1, 1, 'Int 1 equals Int 1');
  }

  public function testFooEqualsBar()
  {
    $this->assertEquals('Foo', 'Bar', '"Foo" equals "Bar"');
  }

  public function testFooEqualsFoo()
  {
    $this->assertEquals('Foo', 'Foo', '"Foo" equals "Foo"');
  }

}

#new assertEqualsTest(new lime_test(6, new lime_output_color));
