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
 * @author Niraj Paudel <itsmenirajpaudel@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap',
        '//fonts.googleapis.com/css2?family=Montserrat&display=swap',
        'css/bootstrap/css/bootstrap.min.css',
        'css/site.css',
    ];

    public $js = [
        '//code.jquery.com/jquery-3.4.1.slim.min.js',
        '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
        'js/bootstrap/bootstrap.min.js',
        '//unpkg.com/axios/dist/axios.min.js',
        'js/signup.js'
    ];
 
}
