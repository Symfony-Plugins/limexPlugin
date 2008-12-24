<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class diagTest extends limexUnitTestCase
{
  public function diagCanSendMessage()
  {
    $this->diag('Can send message');
  }

}
