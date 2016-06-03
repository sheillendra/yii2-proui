<?php

namespace sheillendra\proui\assets;

use yii\web\AssetBundle;

class ProuiAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/proui/assets/template';
    public $css = [
        'css/plugins.css',
        'css/main.css',
        //'css/themes.css'
        'css/themes/night.css'
    ];
    public $js = [
        'js/app.js',
        'js/plugins.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\YiiAsset'
    ];
    //public $publishOptions=['forceCopy'=>YII_DEBUG];
}
