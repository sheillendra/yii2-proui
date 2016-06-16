<?php

namespace sheillendra\proui\assets;

use yii\web\AssetBundle;

class CustomizeProuiAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/proui/assets/dist';
    public $css = [
        'css/customize-proui.css',
    ];
    public $js = [
        'js/customize-proui.js'
    ];
    public $depends = [
        'sheillendra\proui\assets\ProuiAsset'
    ];
    public $publishOptions=['forceCopy'=>YII_DEBUG];
}
