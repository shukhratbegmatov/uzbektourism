<?php

namespace backend\controllers;

use Yii;
use common\models\CreateMenu;
use common\models\CreateMenuSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CreatemenuController implements the CRUD actions for CreateMenu model.
 */
class CreatemenuController extends Controller
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
                    'delete' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all CreateMenu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $createmenus = CreateMenu::find()->all();
        return $this->render('index', [
            'createmenus' => $createmenus,
        ]);
    }

    /**
     * Displays a single CreateMenu model.
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
     * Creates a new CreateMenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Createmenu();

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->file != null) {
                $faylname2 = ((int) (microtime(true) * (1000))).'.'.$model->file->extension;
                $model->file->saveAs('../../frontend/web/sum_men_img/'.$faylname2);
                $model->images = $faylname2;
                $model->create_date = date('Y-m-d');
            }
            $model->file = null;
            if ($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Createmenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->file != null) {
                $faylname2 = ((int) (microtime(true) * (1000))).'.'.$model->file->extension;
                $model->file->saveAs('../../frontend/web/sum_men_img/'.$faylname2);
                $model->images = $faylname2;
            }
            $model->file = null;
            if ($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CreateMenu model.
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
     * Finds the CreateMenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CreateMenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CreateMenu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
