<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */


namespace frontend\controllers;
use common\models\Aboutus;
use common\models\CorruptionForm;
use common\models\Covid;
use common\models\Contact;
use common\models\Galereya;
use common\models\Certification;
use common\models\CreateMenu;
use common\models\Countryman;
use common\models\Licence;
use common\models\Organizations;
use common\models\search\CountrymanSearch;
use common\models\Tender;
use common\models\Toilet;
use common\models\Unwto;
use common\models\Centr;
use common\models\Digest;
use common\models\Management;
use Yii;
use yii\data\Pagination;
use yii\debug\models\search\Log;
use yii\web\Controller;
use yii\httpclient\Client;
use GuzzleHttp;

class CommitteeController extends Controller
{
    public $layout = 'sidebar';

    public function actionAboutus(){
        $model = Aboutus::find()->one();

        return $this->render('aboutus',[
            'model' => $model
        ]);
    }

    public function actionProjects(){
        return $this->render('projects');
    }

    public function actionXizmat(){
        return $this->render('xizmat');
    }

    public function actionPressa(){
        return $this->render('pressa');
    }

    public function actionLicence(){
        $model = Licence::find()->one();

        return $this->render('licence',[
            'model' => $model
        ]);
    }

    public function actionCertification(){
        $model = Certification::find()->one();
        return $this->render('certification',[
            'model' => $model
        ]);
    }

    public function actionStructure(){
        $this->layout = 'sidebara';
        return $this->render('structure',[

        ]);
    }

    public function actionManagement(){
        return $this->render('management',[
        ]);
    }

    public function actionCentr(){
        return $this->render('centr',[

        ]);
    }

    public function actionSubmenu($id){
        $models = CreateMenu::find()->where(['menu_id'=>$id])->all();
        $models_title = CreateMenu::find()->where(['menu_id'=>$id])->one();
        if (!empty($models_title)){
            return $this->render('submenu',[
                'models' =>$models,
                'title'=>$models_title
            ]);
        }else{
            throw new \yii\web\HttpException(404, '');
        }

    }
    public function actionSpisokgostin(){
        $this->layout = 'sidebara';
        $client = new GuzzleHttp\Client();
        $token = "CmHKcWlxicbgvdhXOmpDrKDdlnIaewInEWpEJcFLtmiarqgCNCdABcPJ";
        $lang = Yii::$app->language;
        try {
            $res = $client->request('GET', 'https://data.uzbektourism.uz/tag/get?token='.$token.'&lang='.$lang);
        } catch (\Exception $e) {
            throw new \yii\web\HttpException(500, 'Error Server');
        }
        $code = $res->getStatusCode();
        if ($code == 200){
            $api_data = $res->getBody();
            $body = json_decode($api_data, true);
            return $this->render('spisokgostin', [
                'body'=>$body
            ]);
        }
    }

    public function actionMap(){
        $this->layout = 'sidebara';
        $client = new GuzzleHttp\Client();
        $token = "CmHKcWlxicbgvdhXOmpDrKDdlnIaewInEWpEJcFLtmiarqgCNCdABcPJ";
        $lang = Yii::$app->language;
        try {
            $res = $client->request('GET', 'https://data.uzbektourism.uz/tag/map?token='.$token.'&lang='.$lang);
        } catch (\Exception $e) {
            throw new \yii\web\HttpException(500, 'Error Server');
        }
        $code = $res->getStatusCode();
        if ($code == 200){
            $api_data = $res->getBody();
//            var_dump($api_data);exit();
            $body = json_decode($api_data, true);
            return $this->render('map', [
                'body'=>$body
            ]);
        }
    }

    public function actionInvest(){
        $client = new GuzzleHttp\Client();
        $token = "CmHKcWlxicbgvdhXOmpDrKDdlnIaewInEWpEJcFLtmiarqgCNCdABcPJ";
        $lang = Yii::$app->language;
        try {
            $res = $client->request('GET', 'https://data.uzbektourism.uz/tag/invest?token='.$token.'&lang'.$lang);
        } catch (\Exception $e) {
            throw new \yii\web\HttpException(500, 'Error Server');
        }
        $code = $res->getStatusCode();
        if ($code == 200){
            $api_data = $res->getBody();
            $body = json_decode($api_data, true);
            return $this->render('invest', [
                'body'=>$body
            ]);
        }

    }

    public function actionGetdata($id){
        $token = "CmHKcWlxicbgvdhXOmpDrKDdlnIaewInEWpEJcFLtmiarqgCNCdABcPJQWRETQWET";
        $lang = Yii::$app->language;
        $client = new GuzzleHttp\Client();
        try {
            $res = $client->request('GET', 'https://data.uzbektourism.uz/tag/getdata?'.'token='.$token.'&id='.$id.'&lang='.$lang);
        } catch (\Exception $e) {
            throw new \yii\web\HttpException(500, 'Error Server');
        }
        $code = $res->getStatusCode();
        if ($code == 200){
            $api_data = $res->getBody();
            $body = json_decode($api_data, true);
            return $this->render('getdata', [
                'body'=>$body
            ]);
        }else{
            var_dump("qaytadan urinib kuring");exit();
        }

    }


    public function actionGuides(){
        $token = "CmHKcWlxicbgvdhXOmpDrKDdlnIaewInEWpEJcFLtmiarqgCNCdABcPJQWRETQWETasd";
        $lang = Yii::$app->language;
        $client = new GuzzleHttp\Client();
        try {
            $res = $client->request('GET', 'https://data.uzbektourism.uz/tag/getdatas?lang='.$lang.'&token='.$token);
        } catch (\Exception $e) {
            throw new \yii\web\HttpException(500, 'Error Server');
        }
        $code = $res->getStatusCode();
        if ($code == 200){
            $api_data = $res->getBody();
            $body = json_decode($api_data, true);
            return $this->render('gids', [
                'body'=>$body
            ]);
        }else{
            var_dump("qaytadan urinib kuring");exit();
        }
    }

    public static function Category($category){
        $lang = Yii::$app->language;
        if ($lang == 'uz'){
            if ($category == 'I категория'){
                $cat = 'I Toifasi';
            }elseif ($category == 'II категория'){
                $cat = 'II Toifasi';
            }elseif ($category == 'Высшая категория'){
                $cat = 'Yuqori toifa';
            }elseif ($category == 'Без категории'){
                $cat = 'Kategoriyasiz';
            }
        }elseif ($lang == 'ru'){
            if ($category == 'I категория'){
                $cat = 'I категория';
            }elseif ($category == 'II категория'){
                $cat = 'II категория';
            }elseif ($category == 'Высшая категория'){
                $cat = 'Высшая категория';
            }elseif ($category == 'Без категории'){
                $cat = 'Без категории';
            }
        }elseif ($lang == 'en'){
            if ($category == 'I категория'){
                $cat = 'I Category';
            }elseif ($category == 'II категория'){
                $cat = 'II Category';
            }elseif ($category == 'Высшая категория'){
                $cat = 'Highest category';
            }elseif ($category == 'Без категории'){
                $cat = 'No category';
            }
        }elseif ($lang == 'cyrl'){
            if ($category == 'I категория'){
                $cat = 'I Тоифаси';
            }elseif ($category == 'II категория'){
                $cat = 'II Тоифаси';
            }elseif ($category == 'Высшая категория'){
                $cat = 'Юқори тоифа';
            }elseif ($category == 'Без категории'){
                $cat = 'Без категории';
            }
        }
        return $cat;
    }


    public function actionHotelMap($latitude = null, $longitude = null){
        $this->layout = 'sidebara';
        return $this->render('hotel-map',[
            'latitude'=>$latitude,
            'longitude' => $longitude
        ]);
    }

    public function actionOrganizations($id = null){
        $id = (int) $id;
        $models = "";
        $model = "";

        if ($id){
            $model = Organizations::findOne($id);

        }else{
            $models = Organizations::find()->select('name_'.\Yii::$app->language)->all();
        }
        return $this->render('organizations',[
            'model' => $model,
            'models' => $models
        ]);
    }

    public function actionUnwto(){
        $model = Unwto::find()->all();
        return $this->render('unwto',[
            'model' => $model
        ]);
    }

    public function actionCountryman(){
        $searchModel = new CountrymanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $header = Countryman::find()->where(['id' => 0])->one();
        $man = Countryman::find()->where(['!=','id','0']);
        $pages = new Pagination([
            'totalCount' => $man->count(),
            'defaultPageSize' => 5,
        ]);
        $model = $man->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('countryman',[
            'header' => $header,
            'man' => $model,
            'pagination' => $pages
        ]);
    }


    public static function getAllCentr(){
        $query  = Centr::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
//        $data = $query->where(['!=','fio_'.\Yii::$app->language,''])->offset($pagination->offset)->limit($pagination->limit)->all();
        $data = $query->where(['!=','fio_'.\Yii::$app->language,''])->all();
        return $data;
    }
    public static function getCentrPagination(){

        $struct = Centr::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $struct->count(),
        ]);
        return $pagination;
    }

    public function actionTender(){
        $query  = Tender::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        return $this->render('tender',[
            'model' => Tender::find()->where(['!=','title_'.\Yii::$app->language,''])->orderBy('id DESC')->all(),
            'pagination' => $pagination
        ]);
    }
    public function actionCorruption(){

        $model = new CorruptionForm();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->mailer->compose()
                ->setFrom('murojaat@motach.uz')
                ->setTo(array('shukhratbegmatov2147@gmail.com', 'ortiqovbahodir1902@gmail.com'))
                ->setSubject("Saytdan xat keldi")
                ->setTextBody('')
                ->setHtmlBody('Имя: '.$model->full_name.'<br>'.
                    'Электронная почта: '.$model->email.'<br>'.
                    'Address: '.$model->address.'<br>'.
                    'User: '. $model->type. '<br>'.
                    'Phone: '. $model->phone. '<br>'.
                    'Содержание: '. $model->text
                )
                ->send();
            Yii::$app->session->setFlash('success', Yii::t('app', 'Xabaringiz muvofiqqiyatli jo\'natildi!'));
            return $this->refresh();
        }
        return $this->render('corruption');
    }
    public function actionGalereya(){
        $this->layout = 'sidebara';
        $galereya = Galereya::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('galereya', ['galereya'=>$galereya]);
    }
    public function actionVideo(){
        $this->layout = 'sidebara';
        return $this->render('video');
    }
    public function actionContact(){
        $this->layout = 'sidebara';
        $model = new Contact();
        if ($model->load(Yii::$app->request->post()) &&  $model->validate()) {
            Yii::$app->mailer->compose()
                ->setFrom('errors@uzbektourism.uz')
                ->setTo(array('sisadmin@uzbektourism.uz', 'adizbek_ergashev1@mail.ru'))
                ->setSubject("Saytdan xat keldi")
                ->setTextBody('')
                ->setHtmlBody('Имя: '.$model->fullname.'<br>'.
                    'Электронная почта: '.$model->email.'<br>'.
                    'Тема: '. $model->subject. '<br>'.
                    'Содержание: '. $model->content
                )
                ->send();
            Yii::$app->session->setFlash('success', Yii::t('app', 'Xabaringiz muvofiqqiyatli jo\'natildi!'));
            $model->save(false);
            return $this->refresh();
        }
        return $this->render('contact',[
            'model'=>$model,
        ]);
    }



    public function actionDigest()
    {
        $this->layout = 'newssidebar';
        $query = Digest::find();
        $pagination = new Pagination([
            'defaultPageSize' => 8,
            'totalCount' => $query->count(),
        ]);
        $news = Digest::find()->andWhere(['!=', 'title_'.Yii::$app->language, ''])->orderBy('date DESC')->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('digest', [
            'pagination' => $pagination,
            'news' => $news
        ]);
    }


    public function actionCovids()
    {
        $this->layout = 'newssidebar';
        $query = Covid::find()->andWhere(['!=', 'title_'.Yii::$app->language, '']);
        $pagination = new Pagination([
            'defaultPageSize' => 8,
            'totalCount' => $query->count(),
        ]);
        $news = Covid::find()->andWhere(['!=', 'title_'.Yii::$app->language, ''])->orderBy('date DESC')->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('covids', [
            'pagination' => $pagination,
            'news' => $news
        ]);
    }
    public function actionDigesta($id)
    {
        $model = Digest::find()->where(['!=', 'title_'.Yii::$app->language, ''])->andWhere(['id'=>$id])->one();

        if (!empty($id)){
            $model->viewed = $model->viewed + 1;
            $model->save(false);
        }
        return $this->render('digesta', [
            'model' => $model
        ]);
    }



}
