<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once('testProject/test/unit/setUpTearDownTest.php');

class setUpTearDownTestTest extends PHPUnit_Extensions_OutputTestCase
{
  public function runLimeTests()
  {
    new setUpTearDownTest(1);
  }

  public function testFixtureSetUpExectuedOncePerTestCase() {
    $this->expectOutputRegex('/# fixtureSetUp executed 1 times$/m');
    $this->runLimeTests();
  }

  public function testSetUpExectuedOncePerTest() {
    $this->expectOutputRegex('/# setUp executed 3 times$/m');
    $this->runLimeTests();
  }

  public function testTearDownExectuedOncePerTest() {
    $this->expectOutputRegex('/# tearDown executed 3 times$/m');
    $this->runLimeTests();
  }

  public function testFixtureTearDownNotExectuedWhileTestCaseRunning() {
    $this->expectOutputRegex('/# fixtureTearDown executed 0 times$/m');
    $this->runLimeTests();
  }

  public function testFixtureTearDownExecutedAtEndOfTestCase()
  {
    $this->expectOutputRegex('/^# Running Fixture Tear Down$/m');
    $this->runLimeTests();
  }

}
