<?php

namespace frontend\controllers;

use Yii;
use common\models\News;
use common\models\Digest;
use common\models\search\NewsSearch;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $layout= 'sidebar';
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex($date = null)
    {
        $this->layout = 'newssidebar';
        if(empty($date)){
            $query = News::find()->where(['!=', 'title_'.Yii::$app->language, ''])->andWhere(['!=', 'image', ''])->orderBy(['id' => SORT_DESC]);
            $pagination = new Pagination([
                'defaultPageSize' => 12,
                'totalCount' => $query->count(),
            ]);
            $news = News::find()->where(['!=', 'title_'.Yii::$app->language, ''])->andWhere(['!=', 'image', ''])->orderBy(['id' => SORT_DESC])->offset($pagination->offset)->limit($pagination->limit)->all();
        }else{
            $query = News::find()->where(['!=', 'title_'.Yii::$app->language, ''])->andWhere(['!=', 'image', ''])->andWhere(['YEAR(date)'=> $date])->orderBy(['id' => SORT_DESC]);
            $pagination = new Pagination([
                'defaultPageSize' => 12,
                'totalCount' => $query->count(),
            ]);
            $news = News::find()->where(['YEAR(date)'=> $date])->andWhere(['!=', 'title_'.Yii::$app->language, ''])->andWhere(['!=', 'image', ''])->orderBy(['id' => SORT_DESC])->offset($pagination->offset)->limit($pagination->limit)->all();
        }
        return $this->render('index', [
            'pagination' => $pagination,
            'news' => $news
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $this->layout = 'sidebar';
        if (!empty($id)){
                $news = $this->findModel($id);
                $news->viewed = $news->viewed + 1;
                $news->save(false);
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);

    }

    public static function getMonthAsString($month){
        switch ($month){
            case 1:
                $month = Yii::t('app','Yanvar');
                break;
            case 2:
                $month = Yii::t('app','Fevral');
                break;
            case 3:
                $month = Yii::t('app','Mart');
                break;
            case 4:
                $month = Yii::t('app','Aprel');
                break;
            case 5:
                $month = Yii::t('app','May');
                break;
            case 6:
                $month = Yii::t('app','Iyun');
                break;
            case 7:
                $month = Yii::t('app','Iyul');
                break;
            case 8:
                $month = Yii::t('app','Avgust');
                break;
            case 9:
                $month = Yii::t('app','Sentabr');
                break;
            case 10:
                $month = Yii::t('app','Oktabr');
                break;
            case 11:
                $month = Yii::t('app','Noyabr');
                break;
            case 12:
                $month = Yii::t('app','Dekabr');
                break;
        }
        return $month;
    }
    public static function News(){
        $news = News::find()->andWhere(['!=', 'title_'.Yii::$app->language, ''])->orderBy(['date'=>SORT_DESC, 'viewed'=>SORT_DESC])->limit(4)->all();
        return $news;
    }
    public static function Newsab(){
        $news = Digest::find()->andWhere(['!=', 'title_'.Yii::$app->language, ''])->orderBy(['id'=>SORT_DESC])->limit(4)->all();
        return $news;
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionDownload(){
        $url= $_GET["url"];
        if(
            strpos($url, '.doc') ||
            strpos($url, '.docx') ||
            strpos($url, '.pdf') ||
            strpos($url, '.xlsx') ||
            strpos($url, '.jpg') ||
            strpos($url, '.png') ||
            strpos($url, '.xls') ||
            strpos($url, '.xlsm')
        ){
            $file = Yii::getAlias('@frontend/web/downloads/files') . "/$url";
        }

        if (file_exists($file) && !empty($file)){
            Yii::$app->response->sendFile($file);
        }else{
            throw new \yii\web\NotFoundHttpException("{$file} is not found!");
        }
    }
}
