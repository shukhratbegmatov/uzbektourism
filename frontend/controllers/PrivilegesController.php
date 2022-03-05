<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 16.12.2019
 */


namespace frontend\controllers;


use common\models\Toiletip;
use common\models\Hotels;
use common\models\Toilet;
use common\models\Wifihududlar;
use Yii;
use yii\web\Controller;

class PrivilegesController extends Controller
{
//    public $layout = 'sidebar';

    public function actionWifi(){
        $this->layout = "sidebar";
        $model = Wifihududlar::find()->where(['!=', 'text_'.Yii::$app->language, ''])->one();
        return $this->render('wifi',[
            'model' => $model
        ]);
    }

    public function actionToilet(){
        $this->layout = "sidebar";
        $model = Toilet::find()->one();
        return $this->render('toilet',[
            'model' => $model
        ]);
    }
    public function actionHotels(){
        $this->layout = "sidebar";
        $model = Hotels::find()->one();
        return $this->render('hotels',[
            'model' => $model
        ]);
    }
    public function actionMap(){

        $model = Toilet::find()->one();
        return $this->render('map',[
        ]);
    }

    public static function getCoordinates(){
        $data = Toiletip::find()->all();
        return $data;
    }
}