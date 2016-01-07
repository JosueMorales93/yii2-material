<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class ToastrAsset
 * @package lavrentiev\widgets\toastr\assets
 */
class MaterialAsset extends AssetBundle
{
    /** @var string  */
    public $sourcePath = '@vendor/materialc/material/dist';

    /** @var array $css */
    public $css = [
       'css/plugins/toastr/toastr.min.css',
       'css/material.css'
    ];

    /** @var array $js */
    public $js = [
        'js/jquery-2.1.4.min.js',
        'js/bootstrap.min.js',
        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimScroll/jquery.slimscroll.min.js',
        'js/material.js'
    ];

    /** @var array $depends */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}