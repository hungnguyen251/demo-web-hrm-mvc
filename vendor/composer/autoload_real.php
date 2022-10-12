<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf43608127ec901bf1bec9b46080efbe5
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

        spl_autoload_register(array('ComposerAutoloaderInitf43608127ec901bf1bec9b46080efbe5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf43608127ec901bf1bec9b46080efbe5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitf43608127ec901bf1bec9b46080efbe5::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
