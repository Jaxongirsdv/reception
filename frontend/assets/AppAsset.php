<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/site.css',
       /* 'css/blog.css',
        'css/css.css',
        'css/bootstrap.css',*/
        'unicat_/styles/bootstrap4/bootstrap.min.css',
        'unicat_/plugins/font-awesome-4.7.0/css/font-awesome.min.css',
        'unicat_/plugins/OwlCarousel2-2.2.1/owl.carousel.css',
        'unicat_/plugins/OwlCarousel2-2.2.1/owl.theme.default.css',
        'unicat_/plugins/OwlCarousel2-2.2.1/animate.css',
        'unicat_/styles/main_styles.css',
        'unicat_/styles/responsive.css',
    ];
    public $js = [
      /*  'js/bootstrap.js',
        'js/holder.js',
        'js/jquery-3.js',
        'js/popper.js',*/
       /* 'unicat_/js/jquery-3.2.1.min.js',*/
        'unicat_/styles/bootstrap4/popper.js',
        'unicat_/styles/bootstrap4/bootstrap.min.js',
        'unicat_/plugins/greensock/TweenMax.min.js',
        'unicat_/plugins/scrollmagic/ScrollMagic.min.js',
        'unicat_/plugins/greensock/animation.gsap.min.js',
        'unicat_/plugins/greensock/ScrollToPlugin.min.js',
        'unicat_/plugins/OwlCarousel2-2.2.1/owl.carousel.js',
        'unicat_/plugins/easing/easing.js',
        'unicat_/plugins/parallax-js-master/parallax.min.js',
        'unicat_/js/custom.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
