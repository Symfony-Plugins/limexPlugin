<?php
/**
 * Limex Test Case source file
 *
 * @author G.S.J.Howell
 * @version $Id$
 * @package limexPlugin
 */

/**
 * Limex Test Case
 *
 * The interface for all classes that can act as limexTestCases
 *
 * @package limexPlugin
 */
interface limexTestCase
{
  public function fixtureSetUp();

  public function setUp();

  public function tearDown();

  public function fixtureTearDown();
}
