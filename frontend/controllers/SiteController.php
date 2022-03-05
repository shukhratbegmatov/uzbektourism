<?php
namespace frontend\controllers;
use GuzzleHttp;
use common\models\Errors404;
use common\models\News;
use common\models\Reporting;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Yii;
use yii\base\InvalidArgumentException;
use yii\data\ActiveDataProvider;
use yii\helpers\VarDumper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Menu1;
use common\models\Hackers;
use common\models\Telegrambot;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],

            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'index';


        $menu = Menu1::find()->select([ 'id', 'name_'.\Yii::$app->language, 'link', 'parent_id', 'menu_order'])->where(['status_none'=>1])->all();
        $model = News::find()->where(['!=','title_'.Yii::$app->language, ''])->orderBy(['id' => SORT_DESC])->limit(7)->all();
        return $this->render('index',[
            'model' => $model,
            'menu' => $menu
        ]);
    }

    public static function getReport(){
        $data = Reporting::find()->one();
        return $data;
    }

    public static function addHacker($url){
        $bot = new Telegrambot();
        $model = new Hackers;
        $esty = Hackers::find()->where(['page'=>$url])->count();
        $model->ip = Yii::$app->request->userIP;
        $model->page = $url;
        if ($esty > 4){
            $model->status = 1;
        }
        $model->save();
        $bot->sendDatas(Yii::$app->request->userIP);
    }
    public function actionDetected(){
        return $this->renderPartial('detected',[
            'ip' => Yii::$app->request->userIP
        ]);
    }

//    public function actionErrors()
//    {
//        $get_link = Yii::$app->request->url;
//        $errors404 = new Errors404();
//        $answer_link_old = Errors404::find()->where(['error_link'=>$get_link])->one();
//        $answer_link = Errors404::find()->where(['error_link'=> $get_link])->andWhere(['!=', 'answer_link', ''])->one();
//        $exception = Yii::$app->errorHandler->exception;
//
//        if ($exception !== null) {
//
//            if ($exception->statusCode == 404){
//
//                if (!isset($answer_link_old)){
//
//                    $errors404->error_link = $get_link;
//                    $errors404->save(false);
//                    return $this->render('error', ['exception' => $exception]);
//                }elseif (isset($answer_link)){
//                    return $this->redirect($answer_link->answer_link);
//                }else{
//                    $answer_link_old->error_count = $answer_link_old->error_count + 1;
//                    $answer_link_old->save(false);
//                    return $this->render('error', ['exception' => $exception]);
//                }
//            }else{
//
//                return $this->render('error', ['exception' => $exception]);
//            }
//
//
//        }
//    }



    public function actionErrors()
    {
        $get_link = Yii::$app->request->url;
        $link_massiv = explode("/", $get_link);
        $cyrl = array_search('cyrl', $link_massiv);
        $newnews = array_search('newnews', $link_massiv);
        if (!empty($cyrl)){$link_massiv[$cyrl] = 'uz';}
        if (!empty($newnews)){$link_massiv[$newnews] = 'news';}
        if (!empty($cyrl) || !empty($newnews)){
            $get_link1 = implode("/", $link_massiv);
        }else{
            $get_link1 = Yii::$app->request->url;
        }
//        var_dump($get_link1);exit();
        $errors404 = new Errors404();
        $answer_link_old = Errors404::find()->where(['error_link'=>$get_link1])->one();
        $answer_link = Errors404::find()->where(['error_link'=> $get_link1])->andWhere(['!=', 'answer_link', ''])->one();
        $exception = Yii::$app->errorHandler->exception;


        if ($exception !== null) {
            if ($exception->statusCode == 404){
                if (!isset($answer_link_old)){
                    if ($get_link1 == Yii::$app->request->url){
                        $errors404->error_link = $get_link1;
                        $errors404->save(false);
                        return $this->render('error', ['exception' => $exception]);
                    }else{
                        return $this->redirect($get_link1);
                    }
                }elseif (isset($answer_link)){
                    return $this->redirect($answer_link->answer_link);
                }else{
                    $answer_link_old->error_count = $answer_link_old->error_count + 1;
                    $answer_link_old->save(false);
                    return $this->render('error', ['exception' => $exception]);
                }
            }else{
                return $this->render('error', ['exception' => $exception]);
            }


        }
    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
//    public function actionLogin()
//    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        } else {
//            $model->password = '';
//
//            return $this->render('login', [
//                'model' => $model,
//            ]);
//        }
//    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
//    public function actionContact()
//    {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
//                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
//            } else {
//                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
//            }
//
//            return $this->refresh();
//        } else {
//            return $this->render('contact', [
//                'model' => $model,
//            ]);
//        }
//    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
//    public function actionSignup()
//    {
//        $model = new SignupForm();
//        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
//            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
//            return $this->goHome();
//        }
//
//        return $this->render('signup', [
//            'model' => $model,
//        ]);
//    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
//    public function actionRequestPasswordReset()
//    {
//        $model = new PasswordResetRequestForm();
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            if ($model->sendEmail()) {
//                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
//
//                return $this->goHome();
//            } else {
//                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
//            }
//        }
//
//        return $this->render('requestPasswordResetToken', [
//            'model' => $model,
//        ]);
//    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
//    public function actionResetPassword($token)
//    {
//        try {
//            $model = new ResetPasswordForm($token);
//        } catch (InvalidArgumentException $e) {
//            throw new BadRequestHttpException($e->getMessage());
//        }
//
//        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
//            Yii::$app->session->setFlash('success', 'New password saved.');
//
//            return $this->goHome();
//        }
//
//        return $this->render('resetPassword', [
//            'model' => $model,
//        ]);
//    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
//    public function actionVerifyEmail($token)
//    {
//        try {
//            $model = new VerifyEmailForm($token);
//        } catch (InvalidArgumentException $e) {
//            throw new BadRequestHttpException($e->getMessage());
//        }
//        if ($user = $model->verifyEmail()) {
//            if (Yii::$app->user->login($user)) {
//                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
//                return $this->goHome();
//            }
//        }
//
//        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
//        return $this->goHome();
//    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
//    public function actionResendVerificationEmail()
//    {
//        $model = new ResendVerificationEmailForm();
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            if ($model->sendEmail()) {
//                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
//                return $this->goHome();
//            }
//            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
//        }
//
//        return $this->render('resendVerificationEmail', [
//            'model' => $model
//        ]);
//    }
}
