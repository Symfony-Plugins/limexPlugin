<?php

require_once(dirname(__FILE__) . '/../../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');
require_once(SF_ROOT_DIR . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'myPathFinder.class.php');

class exampleAppClassTest extends limexUnitTestCase
{
  public function testCanIncludeAppLibClassFiles()
  {
    $appLibClassFilePath = myPathFinder::getAppLibDir('myapp') . DIRECTORY_SEPARATOR . 'exampleAppClass.class.php';
    require_once($appLibClassFilePath);
    $this->assertTrue(class_exists('exampleAppClass'), 'Can include app lib class');
  }
}

#new exampleAppClassTest(1);
