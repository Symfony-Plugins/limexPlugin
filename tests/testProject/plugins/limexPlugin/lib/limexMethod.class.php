<?php
/**
 * Source file for limexMethod class
 *
 * @author G.S.J.Howell
 * @version $Id$
 * @package limexPlugin
 */

/**
 * @package limexPlugin
 */

abstract class limexMethod
{
  /**
   * @var ReflectionMethod
   */
  protected $reflectionMethod;
  /**
   * @var limexTestCase
   */
  protected $testCase;

  public function __construct(ReflectionMethod $reflectionMethod, limexTestCase $testCase)
  {
    $this->testCase = $testCase;
    $this->reflectionMethod = $reflectionMethod;
  }

  public function invoke()
  {
    $this->reflectionMethod->invoke($this->testCase);
  }

}
