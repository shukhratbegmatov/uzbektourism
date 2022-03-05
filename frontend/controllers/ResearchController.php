<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 16.12.2019
 */


namespace frontend\controllers;


use yii\web\Controller;

class ResearchController extends Controller
{
    public $layout = 'sidebar';

    public function actionStatistics(){
        return $this->render('statistics', [
        ]);
    }

    public function actionTurizmtypes(){
        return $this->render('turizmtypes', [
        ]);
    }

    public function actionSurvey(){
        return $this->render('survey', [
        ]);
    }

}