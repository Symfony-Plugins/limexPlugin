<?php

require_once(dirname(__FILE__) . '/../../../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');
require_once(SF_ROOT_DIR . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'myPathFinder.class.php');

class exampleModuleClassTest extends limexUnitTestCase
{
  public function testCanIncludeProjectLibClassFiles()
  {
    $moduleLibClassFilePath = myPathFinder::getModuleLibDir('myapp', 'mymodule') . DIRECTORY_SEPARATOR . 'exampleModuleClass.class.php';
    require_once($moduleLibClassFilePath);
    $this->assertTrue(class_exists('exampleModuleClass'), 'Can include module lib class');
  }
}

#new exampleModuleClassTest(1);
