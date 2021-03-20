<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class Builder3DAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/site.css',
        '/material-design-iconic-font/dist/css/material-design-iconic-font.css',
        "css/preload.min.css",
        "css/plugins.min.css",
        "css/style.orange-600.min.css",
//        "css/width-boxed.min.css",
        "/css/builder3d.css",
    ];

    public $js = [
        '/js/app.js',
        '/js/index.js',
        "/js/plugins.min.js",
        "/js/app.min.js",
        "/js/configurator.min.js",
        "/js/three.min.js",
        "/js/blueprint3d.js",
        "/js/items.js",
        "/js/builder3d.js",
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
