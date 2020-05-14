<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
    'src/MyPackage.php' => 'src/:uc:package.php',
    'src/Field/FieldMyPackage.php' => 'src/Field/Field:upc:package.php',
    'config/mypackage.php' => 'config/:lc:package.php',
    'src/Facades/MyPackage.php' => 'src/Facades/:uc:package.php',
    'src/MyPackageServiceProvider.php' => 'src/:uc:packageServiceProvider.php',
];
