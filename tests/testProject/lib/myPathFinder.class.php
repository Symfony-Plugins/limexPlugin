<?php

class myPathFinder
{
  private function __construct()
  {
  }

  /**
   * @return string
   */
  public static function getProjectLibDir()
  {
    return SF_ROOT_DIR . DIRECTORY_SEPARATOR . 'lib';
  }

  /**
   * @param string $appName
   * @return string
   */
  public static function getAppLibDir($appName)
  {
    return implode(DIRECTORY_SEPARATOR, array(SF_ROOT_DIR, 'apps', $appName, 'lib'));
  }


  /**
   * @param string $appName
   * @param string $moduleName
   * @return string
   */
  public static function getModuleLibDir($appName, $moduleName)
  {
    return implode(DIRECTORY_SEPARATOR, array(SF_ROOT_DIR, 'apps', $appName, 'modules', $moduleName, 'lib'));
  }

}
