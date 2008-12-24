<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');
require_once(SF_ROOT_DIR . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'myPathFinder.class.php');

class exampleProjectClassTest extends limexUnitTestCase
{
  public function testCanIncludeProjectLibClassFiles()
  {
    $projectLibClassFilePath = myPathFinder::getProjectLibDir() . DIRECTORY_SEPARATOR . 'exampleProjectClass.class.php';
    require_once($projectLibClassFilePath);
    $this->assertTrue(class_exists('exampleProjectClass'), 'Can include project lib class');
  }
}

#new exampleProjectClassTest(2);
