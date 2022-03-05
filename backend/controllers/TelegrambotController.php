<?php

namespace backend\controllers;
use common\models\Telegrambot;
use Yii;
use yii\web\Controller;
class TelegrambotController extends \yii\web\Controller
{

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;// эта строка для тех, кто пользуется Yii2 - означает, что мы отключаем проверку csrf, которая контролировала, что бы все запросы были от нашего сайта, а не с левых серваков

        return parent::beforeAction($action);
    }
    public function actionIndex()
    {
        $bot = new Telegrambot();

        //$data = $bot->getData();
        // Обрабатываем пришедшие данные
        $bot->goBot('php://input');
    }

}
