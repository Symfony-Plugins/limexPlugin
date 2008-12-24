<?php
/**
 * Source file for limexExceptionTestMethod class
 *
 * @author G.S.J.Howell
 * @version $Id$
 * @package limexPlugin
 */

/**
 * @package limexPlugin
 */
class limexExceptionTestMethod extends limexTestMethod
{
  /**
   * @var string
   */
  protected $expectedExceptionType;
  /**
   * @param ReflectionMethod $reflectionMethod
   * @param limexTestCase $testCase
   * @param string $expectedExceptionType
   */
  public function __construct(ReflectionMethod $reflectionMethod, limexTestCase $testCase, $expectedExceptionType)
  {
    parent::__construct($reflectionMethod, $testCase);
    $this->expectedExceptionType = $expectedExceptionType;
  }

  public function invoke()
  {
    try {
      $this->reflectionMethod->invoke($this->testCase);
      $this->testCase->fail(sprintf("Expected exception '%s' was not thrown", $this->expectedExceptionType));
    } catch (Exception $e) {
      if (! ($e instanceof $this->expectedExceptionType))
        throw $e;
      $this->testCase->pass(sprintf("Caught exception '%s' with message '%s'", $this->expectedExceptionType, $e->getMessage()));
    }
  }
}