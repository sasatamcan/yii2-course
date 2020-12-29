<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/bootstrap.min.css',
        'css/responsive.css',
        'css/style.css',
        'css/owl.carousel.min.css',
    ];
    public $js = [
        'js/bootstrap.bundle.min.js',
        'js/custom.js',
//        'js/jquery.mCustomScrollbar.concat.min.js',
//        'js/jquery.min.js',
//        'js/jquery-3.0.0.min.js',
        'js/owl.carousel.min.js',
        'js/popper.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
