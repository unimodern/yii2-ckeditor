<?php

namespace unimodern\ckeditor;

/**
 * Class CoreAsset
 * @package unimodern\fullcalendar
 */
class CoreAsset extends \yii\web\AssetBundle
{
	/** @var string */
	public $sourcePath = '@vendor/ckeditor/ckeditor';
	/** @var array */
	public $js = [
		'ckeditor.js',
		'adapters/jquery.js',
	];
	/** @var array */
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
