<?php

namespace backend\controllers;

use Yii;
use common\models\Galereya;
use common\models\GalereyaSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GalereyaController implements the CRUD actions for Galereya model.
 */
class GalereyaController extends Controller
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
                        'actions' => ['logout',  'index', 'update', 'create', 'delete', 'view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],


//                    [
//                        'actions' => ['index'],
//                        'allow' => true,
//                        'roles' => ['theCreator'],
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
     * Lists all Galereya models.
     * @return mixed
     */

    public function actionIndex()
    {
        $searchModel = new GalereyaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Galereya model.
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
     * Creates a new Galereya model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Galereya();

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile1 = UploadedFile::getInstance($model, 'imageFile1');
            $model->imageFile2 = UploadedFile::getInstance($model, 'imageFile2');
            if($model->validate()){
                $file_name1 = ((int) (microtime(true) * (1000))) .'max.'. $model->imageFile1->extension;
                $file_name2 = ((int) (microtime(true) * (1000))) .'min.'. $model->imageFile2->extension;
                $model->image_max = $file_name1;
                $model->image_min = $file_name2;
                if($model->upload($file_name1, $file_name2)){

                    if($model->save(false)){
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Galereya model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile1 = UploadedFile::getInstance($model, 'imageFile1');
            $model->imageFile2 = UploadedFile::getInstance($model, 'imageFile2');
            if($model->validate()){
                $file_name1 = ((int) (microtime(true) * (1000))) .'max.'. $model->imageFile1->extension;
                $file_name2 = ((int) (microtime(true) * (1000))) .'min.'. $model->imageFile2->extension;
                $model->image_max = $file_name1;
                $model->image_min = $file_name2;
                if($model->upload($file_name1, $file_name2)){

                    if($model->save(false)){
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Galereya model.
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
     * Finds the Galereya model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Galereya the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Galereya::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
