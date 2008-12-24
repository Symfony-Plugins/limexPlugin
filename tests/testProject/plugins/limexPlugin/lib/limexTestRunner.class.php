<?php
/**
 * limex test runner source file
 *
 * @author G.S.J.Howell
 * @version $Id$
 * @package limexPlugin
 */

require_once(dirname(__FILE__) . '/limexMethodFactory.class.php');

/**
 * Limex Test Runner
 *
 * Runs tests via reflection
 *
 * @package limexPlugin
 */
class limexTestRunner
{
  /**
   * @var limexTestCase
   */
  private $testCase;

  public function __construct(limexTestCase $testCase)
  {
    $this->testCase = $testCase;
    $this->invokeTestCase();
  }

  private function invokeTestCase()
  {
    $this->testCase->fixtureSetUp();
    $this->invokeAllRequiredMethods();
    $this->testCase->fixtureTearDown();
  }

  private function invokeAllRequiredMethods()
  {
    $reflectionClass = new ReflectionClass(get_class($this->testCase));
    foreach ($reflectionClass->getMethods() as $reflectionMethod)
    {
      $limexMethod = limexMethodFactory::getInstance($reflectionMethod, $this->testCase);
      if ($limexMethod != NULL)
      {
        $this->processMethod($limexMethod);
      }
    }
  }

  private function processMethod(limexMethod $method)
  {
    if ($method instanceof limexDiagMethod)
    {
      $this->invokeDiagMethod($method);
      return;
    }

    if ($method instanceof limexTestMethod)
    {
      $this->invokeTestMethod($method);
      return;
    }
  }

  private function invokeDiagMethod(limexMethod $method)
  {
    $method->invoke();
  }

  private function invokeTestMethod(limexMethod $method)
  {
    $this->testCase->setUp();
    $method->invoke();
    $this->testCase->tearDown();
  }

}
