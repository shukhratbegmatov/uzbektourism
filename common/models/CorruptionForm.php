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
            [['type',], 'string'],
        ];
    }


    public function save()
    {

        if ($this->validate()){
            return true;
        }
    }
}