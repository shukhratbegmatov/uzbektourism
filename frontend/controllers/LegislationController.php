<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 15.12.2019
 */


namespace frontend\controllers;


use common\models\Agreements;
use common\models\Decisions;
use common\models\Instruction;
use common\models\Intergovernmental;
use common\models\Laws;
use common\models\Novalid;
use common\models\Resolutions;
use yii\web\Controller;

class LegislationController extends Controller
{
    public $layout = 'sidebar';

    public function actionLaws()
    {
        $header = Laws::find()->where(['id' => 1])->one();
        $content = Laws::find()->where(['!=', 'id', 1])->all();
        return $this->render('laws', [
            'header' => $header,
            'content' => $content
        ]);
    }

    public function actionResolutions()
    {
        $header = Resolutions::find()->where(['id' => 1])->one();
        $content = Resolutions::find()->where(['!=', 'id', 1])->all();
        return $this->render('laws', [
            'header' => $header,
            'content' => $content
        ]);
    }

    public function actionDecisions()
    {

        $header = Decisions::find()->where(['id' => 1])->one();
        $content = Decisions::find()->where(['!=', 'id', 1])->all();
        return $this->render('laws', [
            'header' => $header,
            'content' => $content
        ]);
    }

    public function actionInstruction()
    {
       $model = Instruction::find()->one();
        return $this->render('instruction', [
            'model' => $model,
        ]);
    }

    public function actionNovalid()
    {
        $header = Novalid::find()->where(['id' => 1])->one();
        $content = Novalid::find()->where(['!=', 'id', 1])->all();
        return $this->render('laws', [
            'header' => $header,
            'content' => $content
        ]);
    }

    public function actionAgreements()
    {
        $model = Agreements::find()->one();
        return $this->render('instruction', [
            'model' => $model,
        ]);
    }
    public function actionIntergovernmental()
    {
        $model = Intergovernmental::find()->one();
        return $this->render('instruction', [
            'model' => $model,
        ]);
    }
}