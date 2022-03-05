<?php
namespace common\models;

use Yii;
use yii\base\Model;
use common\models\User;
use common\models\Link;

/**
 * Signup form
 */
class Userupdate extends User
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
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            [['username'], 'string', 'min' => 2, 'max' => 255],
            [['familya', 'rule'], 'string', 'max' => 255],
            [[ 'status'], 'integer'],
            [['user_id', 'link1', 'link2', 'link3', 'link4', 'link5', 'link6', 'link7', 'link8', 'link9', 'link10', 'link11'], 'string', 'max' => 225],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }


    public function signup($id)
    {
        if (!$this->validate()) {
            return null;
        }

        $user = self::findOne($id);
        $user->username = $this->username;
        $user->familya = $this->familya;
        $user->rule = $this->rule;
        $user->setPassword($this->password);
        if ($user->save()){
            return $user->id;
        }


    }

}
