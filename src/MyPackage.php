<?php

namespace :uc:vendor\:uc:package;

use Adaptcms\Base\Models\Package;

class :uc:package
{
  /**
  * On Install
  *
  * @return void
  */
  public function onInstall()
  {
    Package::syncPackageFolder(get_class());
  }
}
