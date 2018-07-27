<?php
/**
 * Created by PhpStorm.
 * User: pcit
 * Date: 7/26/2018
 * Time: 10:57 AM
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;




class UnicatController extends Controller
{
    public function actionIndex()
    {
        //echo \yii\helpers\Url::base(true)."/frontend/web/unicat_/images/about_1.jpg";

        return $this->render('index');
    }
    public function actionAbout()
    {
        return $this->render('about');
    }

}