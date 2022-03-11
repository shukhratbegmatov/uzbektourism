<?php

namespace common\models;

use Yii;

class CorruptionForm extends \yii\base\Model
{
    public $type;
    public $full_name;
    public $address;
    public $phone;
    public $email;
    public $text;


    public function rules()
    {
        return [
            [['full_name', 'address', 'phone', 'email','text'], 'string'],
            [['type',], 'integer'],
        ];
    }


    public function save()
    {

        if (!$this->validate()){
            return false;
        }
        $text = '<h3>Ism familiya</h3>'.$this->full_name;
        $text =" ". $text  . $this->email;
        Yii::$app->mailer->compose()
            ->setFrom('ortiqovbahodir1902@gmail.com')
            ->setTo('ortiqovbahodir1902@gmail.com')
            ->setSubject('Sizga habar qoldirildi corrupsiya')
            ->setHtmlBody('dasdasdasd')
            ->send();
    }
}