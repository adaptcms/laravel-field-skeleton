<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
  'src/MyPackage.php' => 'src/Field:uc:package.php',
  'config/mypackage.php' => 'config/:lc:package.php',
  'src/Facades/MyPackage.php' => 'src/Facades/Field:uc:package.php',
  'src/MyPackageServiceProvider.php' => 'src/Field:uc:packageServiceProvider.php',
  'src/Field/FieldMyPackage.php' => 'src/Field/Field:uc:package.php',
];
