<?php

namespace backend\controllers;

use Yii;
use common\models\Menu1;
use common\models\CreateMenu;
use common\models\Menu1Search;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Menu1Controller implements the CRUD actions for Menu1 model.
 */
class Menu1Controller extends Controller
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
                        'actions' => ['login', 'error',  'signup'],
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
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Menu1 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $menus = Menu1::find()->all();

        return $this->render('index', [
            'menus' => $menus,
        ]);
    }
    public function actionParent()
    {
            $ixt_shifri = Menu1::find()->where(['menu_order' => 2])->andWhere(['!=', 'parent_id', 0])->all();
            foreach ($ixt_shifri as $menu){
                echo "<option value='$menu->id'> $menu->name_uz </option>";
            }
    }

    public function actionParent1()
    {
        $ixt_shifri = Menu1::find()->where(['id' =>[2,3,5,6,7]])->all();
        foreach ($ixt_shifri as $menu){
            echo "<option value='$menu->id'> $menu->name_uz </option>";
        }
    }

    /**
     * Displays a single Menu1 model.
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
     * Creates a new Menu1 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Menu1();

        if ($model->load(Yii::$app->request->post())) {
            $post = \Yii::$app->request->post('Menu1');
            $menu_order = $post['menu_order'];
            $parent_id = $post['parent_id'];
            if ($menu_order == 3){
                $menu = Menu1::findOne($parent_id);
                $menu->menu_order = 3;
                $menu->save();
            }
            $model->link = '/committee/submenu';
            $model->status = 2;
            if ($model->save()){

                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Menu1 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Menu1 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        CreateMenu::deleteAll(['menu_id'=>$id]);

        return $this->redirect(['index']);
    }

    /**
     * Finds the Menu1 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Menu1 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Menu1::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
