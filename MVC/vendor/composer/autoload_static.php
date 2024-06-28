<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7dd6dffd981de9dac84bfce897c3832e
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lenovo\\Mvc\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lenovo\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7dd6dffd981de9dac84bfce897c3832e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7dd6dffd981de9dac84bfce897c3832e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7dd6dffd981de9dac84bfce897c3832e::$classMap;

        }, null, ClassLoader::class);
    }
}
