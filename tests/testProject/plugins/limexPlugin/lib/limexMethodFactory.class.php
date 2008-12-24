<?php
/**
 * Source file for limexMethodFactory class
 *
 * @author G.S.J.Howell
 * @version $Id$
 * @package limexPlugin
 */

require_once(dirname(__FILE__) . '/limexMethod.class.php');
require_once(dirname(__FILE__) . '/limexDiagMethod.class.php');
require_once(dirname(__FILE__) . '/limexTestMethod.class.php');
require_once(dirname(__FILE__) . '/limexExceptionTestMethod.class.php');

/**
 * @package limexPlugin
 */
class limexMethodFactory
{

  final private function __construct() {}

  public static function getInstance(ReflectionMethod $reflectionMethod, limexTestCase $testCase)
  {
    if (self::isDiagMethod($reflectionMethod))
      return new limexDiagMethod($reflectionMethod, $testCase);

    if (self::isTestMethod($reflectionMethod))
      return self::getTestMethod($reflectionMethod, $testCase);

    return NULL;
  }

  protected static function isDiagMethod(ReflectionMethod $reflectionMethod)
  {
    if ('diag' === substr($reflectionMethod->name, 0, 4) && strlen($reflectionMethod->name) > 4)
      return true;
    return false;
  }

  protected static function isTestMethod(ReflectionMethod $reflectionMethod)
  {
    if ('test' === substr($reflectionMethod->name, 0, 4) && strlen($reflectionMethod->name) > 4 && $reflectionMethod->name != 'test_is_deeply')
      return true;
    return false;
  }

  protected static function getTestMethod(ReflectionMethod $reflectionMethod, limexTestCase $testCase)
  {
    $expectedExceptionType = self::getExpectedExceptionType($reflectionMethod);
    if ($expectedExceptionType != NULL)
      return new limexExceptionTestMethod($reflectionMethod, $testCase, $expectedExceptionType);

    return new limexTestMethod($reflectionMethod, $testCase);
  }

  protected static function getExpectedExceptionType(ReflectionMethod $reflectionMethod)
  {
    if (preg_match('/@expectedException\s+(\w+)/m', $reflectionMethod->getDocComment(), $matches))
      return $matches[1];
    return NULL;
  }

}
