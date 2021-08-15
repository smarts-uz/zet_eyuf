<?php

use zetsoft\service\ALL\ALL;
use zetsoft\service\ALL\BLogic;
use zetsoft\service\ALL\Cores;
use zetsoft\service\ALL\Forms;
use zetsoft\service\ALL\Smart;
use zetsoft\service\ALL\Utility;
use zetsoft\system\helpers\ZArrayHelper;

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/7/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */
class ZALL
{

    private const core = [
        'kartik\base\BootstrapTrait' => Root . '/system/replace/kartik-base/BootstrapTrait.php',
        'yii\bootstrap4\BootstrapPluginAsset' => Root . '/system/replace/yii-bootstrap4/BootstrapPluginAsset.php',
        'yii\bootstrap4\BootstrapAsset' => Root . '/system/replace/yii-bootstrap4/BootstrapAsset.php',
        'yii\bootstrap\BootstrapPluginAsset' => Root . '/system/replace/yii-bootstrap/BootstrapPluginAsset.php',
        'yii\bootstrap\BootstrapAsset' => Root . '/system/replace/yii-bootstrap/BootstrapAsset.php',
        'yii\db\ColumnSchemaBuilder' => Root . '/system/replace/yii-db/ColumnSchemaBuilder.php',
        'yii\web\JqueryAsset' => Root . '/system/replace/yii-web/JqueryAsset.php',
        'yii\web\AssetManager' => Root . '/system/replace/yii-web/AssetManager.php',
        'Symfony\Component\VarDumper\VarDumper' => Root . '/system/replace/Symfony-Component/VarDumper.php',
    ];

    public static function app()
    {
        if (TApp)
            return Root . '/system/kernels/ZTrait.php';
        else
            return Root . '/binary/speek/ZTrait.php';
    }


    private const map = [

        /**
         *
         * speeks           drop.aspx
         */

        // 'zetsoft\system\kernels\ZAction' => Root . '/binary/speek/ZAction.php',
        // 'zetsoft\system\kernels\ZActiveTrait' => Root . '/binary/speek/ZActiveTrait.php',
        //  'zetsoft\system\kernels\ZFrame' => Root . '/binary/speek/ZFrame.php',
        //   'zetsoft\system\kernels\ZMigration' => Root . '/binary/speek/ZMigration.php',
        // 'zetsoft\system\kernels\ZModule' => Root . '/binary/speek/ZModule.php',
        'zetsoft\system\kernels\ZTrait' => Root . '/binary/speek/ZTrait.php',
        //  'zetsoft\system\kernels\ZView' => Root . '/binary/speek/ZView.php',
        //  'zetsoft\system\kernels\ZWidget' => Root . '/binary/speek/ZWidget.php',


        /**
         *
         * Cruds
         */
        //  'zetsoft\service\smart\Puters' => Root . '/binary/speec/Puters.php',
        //   'zetsoft\service\smart\Model' => Root . '/binary/speec/Model.php',
        // 'zetsoft\service\smart\Cruds' => Root . '/binary/speec/Cruds.php',
        // 'zetsoft\service\smart\Insert' => Root . '/binary/speec/Migra.php',
        //  'zetsoft\service\smart\Migra' => Root . '/binary/speec/Migra.php',

    ];

    public static function map()
    {
        if (TApp)
            return self::core;

        return array_merge(self::map, self::core);

    }


    public static function mine()
    {

        $ioc = ALL::ioc();

        $components = [];
        foreach ($ioc as $key => $item)
            $components[$key] = [
                'class' => $item
            ];

        return [
            'components' => $components
        ];

    }
}


require ZALL::app();
