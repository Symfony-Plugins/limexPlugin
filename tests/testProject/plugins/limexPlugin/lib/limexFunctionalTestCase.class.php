<?php
/**
 * Limex functional test case source file
 *
 * @author G.S.J.Howell
 * @version $Id$
 * @package limexPlugin
 */

require_once(dirname(__FILE__) . '/limexTestCase.class.php');
require_once(dirname(__FILE__) . '/limexTestRunner.class.php');

/**
 * Limex Functional Test Case
 *
 * xUnit style adaptor for Lime.  Extend your functional test cases from this.
 *
 * @package limexPlugin
 */
abstract class limexFunctionalTestCase implements limexTestCase
{
  /**
   * @var sfTestBrowser
   */
  private $browser;

  public function __construct(sfTestBrowser $browser)
  {
    $this->browser = $browser;
    new LimexTestRunner($this);
  }

  /**
   * @return sfTestBrowser
   */
  public function browser()
  {
    return $this->browser;
  }

  public function fixtureSetUp() {}

  public function setUp() {}

  public function tearDown() {}

  public function fixtureTearDown() {}

}
