<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit570744a6db0d51d6322e4b44b0bc0df1
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
    );

    public static $classMap = array (
        'wzorce\\composite\\renderable\\Button' => __DIR__ . '/../..' . '/composite/renderable/Button.php',
        'wzorce\\composite\\renderable\\Form' => __DIR__ . '/../..' . '/composite/renderable/Form.php',
        'wzorce\\composite\\renderable\\InputElement' => __DIR__ . '/../..' . '/composite/renderable/InputElement.php',
        'wzorce\\composite\\renderable\\Renderable' => __DIR__ . '/../..' . '/composite/renderable/Renderable.php',
        'wzorce\\composite\\renderable\\TextArea' => __DIR__ . '/../..' . '/composite/renderable/TextArea.php',
        'wzorce\\composite\\renderable\\TextElement' => __DIR__ . '/../..' . '/composite/renderable/TextElement.php',
        'wzorce\\composite\\units\\Army' => __DIR__ . '/../..' . '/composite/units/Army.php',
        'wzorce\\composite\\units\\unit\\Archer' => __DIR__ . '/../..' . '/composite/units/unit/Archer.php',
        'wzorce\\composite\\units\\unit\\LaserCannonUnit' => __DIR__ . '/../..' . '/composite/units/unit/LaserCannonUnit.php',
        'wzorce\\composite\\units\\unit\\Maruder' => __DIR__ . '/../..' . '/composite/units/unit/Maruder.php',
        'wzorce\\composite\\units\\unit\\Unit' => __DIR__ . '/../..' . '/composite/units/unit/Unit.php',
        'wzorce\\composite\\units\\unit\\UnitException' => __DIR__ . '/../..' . '/composite/units/unit/UnitException.php',
        'wzorce\\factory\\abstractfactory\\BloggsApptEncoder' => __DIR__ . '/../..' . '/factory/abstractfactory/BloggsApptEncoder.php',
        'wzorce\\factory\\abstractfactory\\BloggsCommsManager' => __DIR__ . '/../..' . '/factory/abstractfactory/BloggsCommsManager.php',
        'wzorce\\factory\\abstractfactory\\BloggsContactEncoder' => __DIR__ . '/../..' . '/factory/abstractfactory/ContactApptEncoder.php',
        'wzorce\\factory\\abstractfactory\\BloggsTtdEncoder' => __DIR__ . '/../..' . '/factory/abstractfactory/BloggsTtdEncoder.php',
        'wzorce\\factory\\abstractfactory\\CommsManager' => __DIR__ . '/../..' . '/factory/abstractfactory/CommsManager.php',
        'wzorce\\factory\\abstractfactory\\Encoder' => __DIR__ . '/../..' . '/factory/abstractfactory/Encoder.php',
        'wzorce\\factory\\abstractfactory\\MegaApptEncoder' => __DIR__ . '/../..' . '/factory/abstractfactory/MegaApptEncoder.php',
        'wzorce\\factory\\abstractfactory\\MegaCommsManager' => __DIR__ . '/../..' . '/factory/abstractfactory/MegaCommsManager.php',
        'wzorce\\factory\\abstractfactory\\MegaContactEncoder' => __DIR__ . '/../..' . '/factory/abstractfactory/MegaContactEncoder.php',
        'wzorce\\factory\\abstractfactory\\MegaTtdEncoder' => __DIR__ . '/../..' . '/factory/abstractfactory/MegaTtdEncoder.php',
        'wzorce\\factory\\civilization\\TerrainFactory' => __DIR__ . '/../..' . '/factory/civilization/TerrainFactory.php',
        'wzorce\\factory\\civilization\\forest\\EarthForest' => __DIR__ . '/../..' . '/factory/civilization/Forest/EarthForest.php',
        'wzorce\\factory\\civilization\\forest\\Forest' => __DIR__ . '/../..' . '/factory/civilization/Forest/Forest.php',
        'wzorce\\factory\\civilization\\forest\\MarsForest' => __DIR__ . '/../..' . '/factory/civilization/Forest/MarsForest.php',
        'wzorce\\factory\\civilization\\plain\\EarthPlain' => __DIR__ . '/../..' . '/factory/civilization/Plain/EarthPlain.php',
        'wzorce\\factory\\civilization\\plain\\MarsPlain' => __DIR__ . '/../..' . '/factory/civilization/Plain/MarsPlain.php',
        'wzorce\\factory\\civilization\\plain\\Plain' => __DIR__ . '/../..' . '/factory/civilization/Plain/Plain.php',
        'wzorce\\factory\\civilization\\sea\\EarthSea' => __DIR__ . '/../..' . '/factory/civilization/Sea/EarthSea.php',
        'wzorce\\factory\\civilization\\sea\\MarsSea' => __DIR__ . '/../..' . '/factory/civilization/Sea/MarsSea.php',
        'wzorce\\factory\\civilization\\sea\\Sea' => __DIR__ . '/../..' . '/factory/civilization/Sea/Sea.php',
        'wzorce\\factory\\simple\\ApptEncoder' => __DIR__ . '/../..' . '/factory/simple/AppEncoder.php',
        'wzorce\\factory\\simple\\BlogApptEncoder' => __DIR__ . '/../..' . '/factory/simple/BlogApptEncoder.php',
        'wzorce\\factory\\simple\\BloggsCommsManager' => __DIR__ . '/../..' . '/factory/simple/BloggsCommsManager.php',
        'wzorce\\factory\\simple\\CommsManager' => __DIR__ . '/../..' . '/factory/simple/CommsManager.php',
        'wzorce\\factory\\simple\\MegaApptEncoder' => __DIR__ . '/../..' . '/factory/simple/MegaApptEncoder.php',
        'wzorce\\factory\\simple\\MegaCommsManager' => __DIR__ . '/../..' . '/factory/simple/MegaCommsManager.php',
        'wzorce\\nastyboss\\Employee' => __DIR__ . '/../..' . '/nastyboss/Employee.php',
        'wzorce\\nastyboss\\Minion' => __DIR__ . '/../..' . '/nastyboss/Minion.php',
        'wzorce\\nastyboss\\NastyBoss' => __DIR__ . '/../..' . '/nastyboss/NastyBoss.php',
        'wzorce\\strategy\\output\\ArrayOutput' => __DIR__ . '/../..' . '/strategy/output/strategy/ArrayOutput.php',
        'wzorce\\strategy\\output\\Client' => __DIR__ . '/../..' . '/strategy/output/Client.php',
        'wzorce\\strategy\\output\\JsonOutput' => __DIR__ . '/../..' . '/strategy/output/strategy/JsonOutput.php',
        'wzorce\\strategy\\output\\OutputInterface' => __DIR__ . '/../..' . '/strategy/output/strategy/OutputInterface.php',
        'wzroce\\nastyboss\\ClueUp' => __DIR__ . '/../..' . '/nastyboss/ClueUp.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit570744a6db0d51d6322e4b44b0bc0df1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit570744a6db0d51d6322e4b44b0bc0df1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit570744a6db0d51d6322e4b44b0bc0df1::$classMap;

        }, null, ClassLoader::class);
    }
}
