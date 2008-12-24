<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/testProject/test/unit/stackTraceTest.php');

class stackTraceTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private $format = '/^#     Failed test \(.+stackTraceTest\.php at line %d\)$/m';
  private function runLimeTests()
  {
    new stackTraceTest(2);
  }

  public function testAssertEqualsShowsCorrectStackTrace()
  {
    $this->expectOutputRegex(sprintf($this->format, 11));
    $this->runLimeTests();
  }

  public function testAssertFalseShowsCorrectStackTrace()
  {
    $this->expectOutputRegex(sprintf($this->format, 16));
    $this->runLimeTests();
  }

  public function testAssertNotEqualsShowsCorrectStackTrace()
  {
    $this->expectOutputRegex(sprintf($this->format, 21));
    $this->runLimeTests();
  }

  public function testAssertNotNullShowsCorrectStackTrace()
  {
    $this->expectOutputRegex(sprintf($this->format, 26));
    $this->runLimeTests();
  }

  public function testAssertNotRegExpShowsCorrectStackTrace()
  {
    $this->expectOutputRegex(sprintf($this->format, 31));
    $this->runLimeTests();
  }

  public function testAssertNullShowsCorrectStackTrace()
  {
    $this->expectOutputRegex(sprintf($this->format, 36));
    $this->runLimeTests();
  }

  public function testAssertRegExpShowsCorrectStackTrace()
  {
    $this->expectOutputRegex(sprintf($this->format, 41));
    $this->runLimeTests();
  }

  public function testAssertTrueShowsCorrectStackTrace()
  {
    $this->expectOutputRegex(sprintf($this->format, 46));
    $this->runLimeTests();
  }

  public function testAssertTypeShowsCorrectStackTrace()
  {
    $this->expectOutputRegex(sprintf($this->format, 51));
    $this->runLimeTests();
  }

}
