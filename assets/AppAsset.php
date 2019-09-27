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
      'https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700&display=swap',
      'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
      'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
      'https://use.fontawesome.com/releases/v5.3.1/css/all.css',
      'css/normalize.min.css',
      'css/style.css',
    ];
    public $js = [
      'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
      'js/script.js',
      'js/jquery.accordion.js',
      'js/jquery.cookie.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
