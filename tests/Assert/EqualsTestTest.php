<?php
require_once('PHPUnit/Extensions/OutputTestCase.php');
require_once(dirname(__FILE__) . '/../testProject/test/unit/assertEqualsTest.php');

/**
 * @package Assert
 */
class Assert_EqualsTestTest extends PHPUnit_Extensions_OutputTestCase
{
  private function runLimeTests()
  {
    new assertEqualsTest(6);
  }

  public function testCanFailTrueEqualsFalse()
  {
    $this->expectOutputRegex('/^not ok \d - True equals False/m');
    $this->runLimeTests();
  }

  public function testCanPassTrueEqualsTrue()
  {
    $this->expectOutputRegex('/^ok \d - True equals True/m');
    $this->runLimeTests();
  }

  public function testCanFailInt1EqualsInt2()
  {
    $this->expectOutputRegex('/^not ok \d - Int 1 equals Int 2/m');
    $this->runLimeTests();
  }

  public function testCanPassInt1EqualsInt1()
  {
    $this->expectOutputRegex('/^ok \d - Int 1 equals Int 1/m');
    $this->runLimeTests();
  }

  public function testCanFailFooEqualsBar()
  {
    $this->expectOutputRegex('/^not ok \d - "Foo" equals "Bar"/m');
    $this->runLimeTests();
  }

  public function testCanPassFooEqualsFoo()
  {
    $this->expectOutputRegex('/^ok \d - "Foo" equals "Foo"/m');
    $this->runLimeTests();
  }
}
