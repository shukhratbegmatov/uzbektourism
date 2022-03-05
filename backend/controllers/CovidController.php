<?php

namespace backend\controllers;

use Yii;
use common\models\Covid;
use common\models\CovidSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CovidController implements the CRUD actions for Covid model.
 */
class CovidController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [ 'index', 'update', 'create', 'delete', 'view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],


//                    [
//                        'actions' => ['index'],
//                        'allow' => true,
//                        'roles' => ['theCreator', 'Admin'],
//                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Covid models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CovidSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Covid model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Covid model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Covid();

        $model->scenario = $model::SCENARIO_CREATE;
        if ($model->load(Yii::$app->request->post())) {
            $model->date = date('Y-m-d');
            $model->viewed = 1;
            $model->isactive = 1;
            $model->imageFile1 = UploadedFile::getInstance($model, 'imageFile1');
            if($model->validate()){
                $file_name = ((int) (microtime(true) * (1000))) .'.'. $model->imageFile1->extension;
                $model->image = $file_name;
                if($model->upload($file_name)){

                    if($model->save(false)){
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                    var_dump($model->getErrors());exit();
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Covid model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->scenario = $model::SCENARIO_UPDATE;
        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile1 = UploadedFile::getInstance($model, 'imageFile1');
            if($model->validate()){
                if (!empty($model->imageFile1) && !empty($model->imageFile1->extension)){
                    $file_name = ((int) (microtime(true) * (1000))) .'.'. $model->imageFile1->extension;
                    $model->image = $file_name;
                    $model->upload($file_name);
                }


                if($model->save(false)){
                    return $this->redirect(['view', 'id' => $model->id]);
                }
                var_dump($model->getErrors());exit();
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Covid model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Covid model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Covid the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Covid::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
