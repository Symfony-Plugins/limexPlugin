<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class assertNullTest extends limexUnitTestCase
{

  public function testTrueIsNull()
  {
    $this->assertNull(TRUE, 'TRUE is NULL');
  }

  public function testFalseIsNull()
  {
    $this->assertNull(FALSE, 'FALSE is NULL');
  }

  public function testNullIsNull()
  {
    $this->assertNull(NULL, 'NULL is NULL');
  }

  public function testUnassignedVariableIsNull()
  {
    $this->assertNull($unassignedVariable, 'Unassigned Variable is NULL');
  }
}

#new assertNullTest(4);
