<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 2017/2/21
 * Time: 10:46
 */

namespace test\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        if(\Yii::$app->wechat->isWechat && !\Yii::$app->wechat->isAuthorized()) {
            return \Yii::$app->wechat->authorizeRequired()->send();
        }
    }
}