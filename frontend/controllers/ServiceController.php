<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 16.12.2019
 */


namespace frontend\controllers;


use common\models\Jobs;
use common\models\Listofdocuments;
use common\models\Opendata;
use common\models\Registry;
use common\models\Reporting;
use yii\httpclient\Client;
use yii\web\Controller;
use GuzzleHttp;

class ServiceController extends Controller
{
    public $layout = 'sidebar';

    public function actionReporting(){
        return $this->render('reporting');
    }

    public function actionListofdocuments(){
        return $this->render('listofdocuments');
    }

    public function actionRegistry(){

        return $this->render('registry');
    }
    public function actionJobs(){
        return $this->render('jobs');
    }
    public function actionStatistika(){
        return $this->render('statistika');
    }

    public function actionMaskan(){
        return $this->render('maskan');
    }

    public function actionProjects(){
        return $this->render('projects');
    }

    public function actionYouth(){
        return $this->render('youth');
    }

    public function actionKonkurs(){
        return $this->render('konkurs');
    }

    public function actionOpendata($id = null){
        if ($id != null){
            $data = Opendata::find()->where(['id' => $id])->one();
            return $this->render('opendata',[
                'data' => $data
            ]);
        }else{
            return $this->render('opendata',[
                'data' => null
            ]);
        }
    }
    public static function getAllAgreements(){
        $cert = \common\models\Listofdocuments::find()->one();
        return $cert;
    }
    public static function getAllAgreements1(){
        $cert = Registry::find()->all();
        return $cert;
    }
    public static function getAllAgreements2()
    {
        $cert = Jobs::find()->one();
        return $cert;
    }
}
