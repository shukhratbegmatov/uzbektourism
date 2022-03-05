<?php
namespace common\models;

use Yii;
use yii\base\Model;
use common\models\User;
use common\models\Link;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $familya;
    public $rule;
    public $status;
    public $user_id;

    public $link1;
    public $link2;
    public $link3;
    public $link4;
    public $link5;
    public $link6;
    public $link7;
    public $link8;
    public $link9;
    public $link10;
    public $link11;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            [['username'], 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            [['username'], 'string', 'min' => 2, 'max' => 255],
            [['familya', 'rule'], 'string', 'max' => 255],
            [[ 'status'], 'integer'],
            [['user_id', 'link1', 'link2', 'link3', 'link4', 'link5', 'link6', 'link7', 'link8', 'link9', 'link10', 'link11'], 'string', 'max' => 225],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->familya = $this->familya;
        $user->rule = $this->rule;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        if ($user->save()){
            $link = new Link();
            $link->user_id = (string)$user->getId();
            $link->link1 = $this->link1;
            $link->link2 = $this->link2;
            $link->link3 = $this->link3;
            $link->link4 = $this->link4;
            $link->link5 = $this->link5;
            $link->link6 = $this->link6;
            $link->link7 = $this->link7;
            $link->link8 = $this->link8;
            $link->link9 = $this->link9;
            $link->link10 = $this->link10;
            $link->link11 = $this->link11;

        }
        return $link->save();


    }


    public function attributeLabels()
    {
        return [
            'link1' => 'Menus',
            'link2' => 'SubMenu data',
            'link3' => 'News',
            'link4' => 'Digest',
            'link5' => 'Galereya',
            'link6' => 'Electronic register',
            'link7' => 'Tender',
            'link8' => 'Errors',
            'link9' => 'Hackers',
            'link10' => 'Covid',
            'link11' => 'Centr',
        ];
    }
//___________________________________________________________

//    public function signup()
//    {
//        if ($this->validate()) {
//            $user = new User();
//            $user->username = $this->username;
//            $user->email = $this->email;
//            $user->setPassword($this->password);
//            $user->generateAuthKey();
//            $user->save(false);
//
//            // нужно добавить следующие три строки:
//            $auth = Yii::$app->authManager;
//            $authorRole = $auth->getRole('author');
//            $auth->assign($authorRole, $user->getId());
//
//            return $user;
//        }
//
//        return null;
//    }

//____________________________________________________________________
//    public function signup()
//    {
//        if ($this->validate()) {
//
//            $user = new User();
//            $user->username = $this->username;
//            $user->email = $this->email;
//            $user->setPassword($this->password);
//            $user->generateAuthKey();
//            $user->generateEmailVerificationToken();
//            // return $user->save() && $this->sendEmail($user);
//            $user->save();
//
//            $permissionList = $_POST['SignupForm']['permissions'];
//
//            // var_dump($user->id);
//            // exit;
//            foreach ($permissionList as $value) {
//
//                $newPer = new AuthAssignment;
//                $newPer->user_id = $user->id;
//                $newPer->item_name = $value;
//                $newPer->save();
//
//
//            }
//
//            $this->sendEmail($user);
//            return $user;
//
//        }
//
//    }



    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
