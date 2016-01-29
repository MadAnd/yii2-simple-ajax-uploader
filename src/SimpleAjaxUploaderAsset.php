<?php
/**
 * @link https://github.com/MadAnd/yii2-simple-ajax-uploader
 * @copyright Copyright (c) 2016 Andriy Kmit' <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace madand\simpleajaxuploader;

use yii\web\AssetBundle;

class SimpleAjaxUploaderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/simple-ajax-uploader';
    public $js = [
        'SimpleAjaxUploader.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
