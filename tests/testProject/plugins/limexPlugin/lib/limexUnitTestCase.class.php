<?php
/**
 * Limex test case main file
 *
 * @author G.S.J.Howell
 * @version $Id$
 * @package limexPlugin
 */

require_once(dirname(__FILE__) . '/limexTestCase.class.php');
require_once(dirname(__FILE__) . '/limexTestRunner.class.php');

/**
 * Limex Unit Test Case
 *
 * xUnit style adaptor for Lime.  Extend your test cases from this.
 *
 * @package limexPlugin
 */
abstract class limexUnitTestCase extends lime_test implements limexTestCase
{
  public function __construct($plan = null, $output_instance = null)
  {
    parent::__construct($plan, $output_instance);
    new LimexTestRunner($this);
  }

  public function fixtureSetUp() {}

  public function setUp() {}

  public function tearDown() {}

  public function fixtureTearDown() {}

  /**
   * Rewrite lime's output such that caller's filename and line number are shown
   *
   * @param string $buffer
   * @return string
   */
  protected function rewriteStackTrace($buffer)
  {
    $pattern = '#     Failed test \(.+ at line \d+\)';
    $backtrace = debug_backtrace();
    $replacement = sprintf('#     Failed test (%s at line %d)', $backtrace[2]['file'], $backtrace[2]['line']);
    return preg_replace("/$pattern/m", "$replacement", $buffer, 1);
  }

  /**
   * Reports an error identified by $message if the two variables $expected and $actual are not equal.
   *
   * @param mixed $expected
   * @param mixed $actual
   * @param string $message
   */
  protected function assertEquals($expected, $actual, $message = '')
  {
    ob_start(array($this, 'rewriteStackTrace'));
    $this->is($actual, $expected, $message);
    ob_end_flush();
  }

  /**
   * Reports an error identified by $message if $condition is TRUE.
   *
   * @param bool $condition
   * @param string $message
   */
  protected function assertFalse($condition, $message = '')
  {
    ob_start(array($this, 'rewriteStackTrace'));
    $this->cmp_ok($condition, '===', FALSE, $message);
    ob_end_flush();
  }

  /**
   * Reports an error identified by $message if the two variables $expected and $actual are equal.
   *
   * @param mixed $expected
   * @param mixed $actual
   * @param string $message
   */
  protected function assertNotEquals($expected, $actual, $message = '')
  {
    ob_start(array($this, 'rewriteStackTrace'));
    $this->isnt($expected, $actual, $message);
    ob_end_flush();
  }

  /**
   * Reports an error identified by $message if $variable is NULL.
   *
   * @param mixed $variable
   * @param string $message
   */
  protected function assertNotNull($variable, $message = '')
  {
    ob_start(array($this, 'rewriteStackTrace'));
    $this->cmp_ok($variable, '!==', NULL, $message);
    ob_end_flush();
  }

  /**
   * Reports an error identified by $message if $string does matches the regular expression $pattern.
   *
   * @param string $pattern
   * @param string $string
   * @param string $message
   */
  protected function assertNotRegExp($pattern, $string, $message = '')
  {
    ob_start(array($this, 'rewriteStackTrace'));
    $this->unlike($string, $pattern, $message);
    ob_end_flush();
  }

  /**
   * Reports an error identified by $message if $variable is not NULL.
   *
   * @param mixed $variable
   * @param string $message
   */
  protected function assertNull($variable, $message = '')
  {
    ob_start(array($this, 'rewriteStackTrace'));
    $this->cmp_ok($variable, '===', NULL, $message);
    ob_end_flush();
  }

  /**
   * Reports an error identified by $message if $string does not match the regular expression $pattern.
   *
   * @param string $pattern
   * @param string $string
   * @param string $message
   */
  protected function assertRegExp($pattern, $string, $message = '')
  {
    ob_start(array($this, 'rewriteStackTrace'));
    $this->like($string, $pattern, $message);
    ob_end_flush();
  }

  /**
   * Reports an error identified by $message if $condition is FALSE.
   *
   * @param bool $condition
   * @param string $message
   */
  protected function assertTrue($condition, $message = '')
  {
    // TODO for some reason, we don't *have* to rewrite, here. Figure out why.
    ob_start(array($this, 'rewriteStackTrace'));
    $this->ok($condition, $message);
    ob_end_flush();
  }

  /**
   * Reports an error identified by $message if the variable $actual is not of type $expected.
   *
   * @param string $expected
   * @param mixed $actual
   * @param string $message
   */
  protected function assertType($expected, $actual, $message = '')
  {
    ob_start(array($this, 'rewriteStackTrace'));
    $this->isa_ok($actual, $expected, $message);
    ob_end_flush();
  }

}
