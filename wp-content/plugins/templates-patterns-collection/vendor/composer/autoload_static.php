<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit697e611d92d65b14d837c7ac2651523a
{
    public static $files = array (
        '50f1a0479b2a5847c529d784c54cebe2' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TIOB\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TIOB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TIOB\\Admin' => __DIR__ . '/../..' . '/includes/Admin.php',
        'TIOB\\Editor' => __DIR__ . '/../..' . '/includes/Editor.php',
        'TIOB\\Elementor' => __DIR__ . '/../..' . '/includes/Elementor.php',
        'TIOB\\Importers\\Content_Importer' => __DIR__ . '/../..' . '/includes/Importers/Content_Importer.php',
        'TIOB\\Importers\\Helpers\\Helper' => __DIR__ . '/../..' . '/includes/Importers/Helpers/Helper.php',
        'TIOB\\Importers\\Helpers\\Importer_Alterator' => __DIR__ . '/../..' . '/includes/Importers/Helpers/Importer_Alterator.php',
        'TIOB\\Importers\\Helpers\\Quiet_Skin' => __DIR__ . '/../..' . '/includes/Importers/Helpers/Quiet_Skin.php',
        'TIOB\\Importers\\Helpers\\Quiet_Skin_Legacy' => __DIR__ . '/../..' . '/includes/Importers/Helpers/Quiet_Skin_Legacy.php',
        'TIOB\\Importers\\Plugin_Importer' => __DIR__ . '/../..' . '/includes/Importers/Plugin_Importer.php',
        'TIOB\\Importers\\Theme_Mods_Importer' => __DIR__ . '/../..' . '/includes/Importers/Theme_Mods_Importer.php',
        'TIOB\\Importers\\WP\\Beaver_Data_Fix' => __DIR__ . '/../..' . '/includes/Importers/WP/Beaver_Data_Fix.php',
        'TIOB\\Importers\\WP\\Beaver_ParserXML' => __DIR__ . '/../..' . '/includes/Importers/WP/Beaver_ParserXML.php',
        'TIOB\\Importers\\WP\\Elementor_Meta_Handler' => __DIR__ . '/../..' . '/includes/Importers/WP/Elementor_Meta_Handler.php',
        'TIOB\\Importers\\WP\\WP_Import' => __DIR__ . '/../..' . '/includes/Importers/WP/WP_Import.php',
        'TIOB\\Importers\\WP\\WXR_Parser' => __DIR__ . '/../..' . '/includes/Importers/WP/WXR_Parser.php',
        'TIOB\\Importers\\WP\\WXR_Parser_SimpleXML' => __DIR__ . '/../..' . '/includes/Importers/WP/WXR_Parser_SimpleXML.php',
        'TIOB\\Importers\\WP\\WXR_Parser_XML' => __DIR__ . '/../..' . '/includes/Importers/WP/WXR_Parser_XML.php',
        'TIOB\\Importers\\Widgets_Importer' => __DIR__ . '/../..' . '/includes/Importers/Widgets_Importer.php',
        'TIOB\\Importers\\Zelle_Importer' => __DIR__ . '/../..' . '/includes/Importers/Zelle_Importer.php',
        'TIOB\\Logger' => __DIR__ . '/../..' . '/includes/Logger.php',
        'TIOB\\Main' => __DIR__ . '/../..' . '/includes/Main.php',
        'TIOB\\Rest_Server' => __DIR__ . '/../..' . '/includes/Rest_Server.php',
        'TIOB\\Sites_Listing' => __DIR__ . '/../..' . '/includes/Sites_Listing.php',
        'TIOB\\TI_Beaver' => __DIR__ . '/../..' . '/includes/TI_Beaver.php',
        'TIOB\\WP_Cli' => __DIR__ . '/../..' . '/includes/WP_Cli.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit697e611d92d65b14d837c7ac2651523a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit697e611d92d65b14d837c7ac2651523a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit697e611d92d65b14d837c7ac2651523a::$classMap;

        }, null, ClassLoader::class);
    }
}
