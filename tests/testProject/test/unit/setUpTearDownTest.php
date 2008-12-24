<?php

require_once(dirname(__FILE__) . '/../bootstrap/unit.php');
require_once(SF_ROOT_DIR . '/plugins/limexPlugin/lib/limexUnitTestCase.class.php');

class setUpTearDownTest extends limexUnitTestCase
{
  private $fixtureSetUpExecutionCount = 0;
  private $setUpExecutionCount = 0;
  private $tearDownExecutionCount = 0;
  private $fixtureTearDownExecutionCount = 0;

  public function fixtureSetUp() {
    $this->fixtureSetUpExecutionCount++;
  }

  public function fixtureTearDown() {
    $this->fixtureTearDownExecutionCount++;
  }

  public function setUp()
  {
    $this->setUpExecutionCount++;
  }

  public function tearDown()
  {
    $this->diag("Running Fixture Tear Down");
    $this->tearDownExecutionCount++;
  }

  public function testMethod1()
  {
  }

  public function diagMethod1()
  {
  }

  public function testMethod2()
  {
  }

  public function testMethod3()
  {
  }

  public function diagMethod2()
  {
    $this->diag(sprintf('fixtureSetUp executed %s times',    $this->fixtureSetUpExecutionCount));
    $this->diag(sprintf('setUp executed %s times',           $this->setUpExecutionCount));
    $this->diag(sprintf('tearDown executed %s times',        $this->tearDownExecutionCount));
    $this->diag(sprintf('fixtureTearDown executed %s times', $this->fixtureTearDownExecutionCount));
  }

}
