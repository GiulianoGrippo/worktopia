<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit80b37e2d6841c9ab7d4a12615227d81a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit80b37e2d6841c9ab7d4a12615227d81a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit80b37e2d6841c9ab7d4a12615227d81a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit80b37e2d6841c9ab7d4a12615227d81a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
