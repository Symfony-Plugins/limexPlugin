<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class assertNotNullTest extends limexUnitTestCase
{

  public function testTrueIsNotNull()
  {
    $this->assertNotNull(TRUE, 'TRUE is not NULL');
  }

  public function testFalseIsNotNull()
  {
    $this->assertNotNull(FALSE, 'FALSE is not NULL');
  }

  public function testNullIsNotNull()
  {
    $this->assertNotNull(NULL, 'NULL is not NULL');
  }

  public function testUnassignedVariableIsNotNull()
  {
    $this->assertNotNull($unassignedVariable, 'Unassigned Variable is not NULL');
  }
}

#new assertNotNullTest(4));
