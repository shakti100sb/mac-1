<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f3e30adff2de3d268cf186d0b82fa02
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f3e30adff2de3d268cf186d0b82fa02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f3e30adff2de3d268cf186d0b82fa02::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
