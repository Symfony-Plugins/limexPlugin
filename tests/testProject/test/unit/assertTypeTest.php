<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class ObjectA {}
class ObjectB {}

class assertTypeTest extends limexUnitTestCase
{
  public function testInt2IsTypeOfString()
  {
    $this->assertType('string', 2, 'Int 2 is type of string');
  }

  public function testFooIsTypeOfString()
  {
    $this->assertType('string', 'foo', 'foo is type of string');
  }

  public function testObjectAIsTypeOfObjectB()
  {
    $this->assertType('ObjectB', new ObjectA(), 'ObjectA is type of ObjectB');
  }

  public function testObjectAIsTypeOfObjectA()
  {
    $this->assertType('ObjectA', new ObjectA(), 'ObjectA is type of ObjectA');
  }

}

#new assertTypeTest(4);
