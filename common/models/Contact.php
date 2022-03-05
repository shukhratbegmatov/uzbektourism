<?php

namespace common\models;

use Yii;
use Baha2Odeh\RecaptchaV3\RecaptchaV3Validator;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $subject
 * @property string|null $content
 * @property string $c_date
 * @property int|null $answer_id
 * @property string|null $password_code
 */
class Contact extends \yii\db\ActiveRecord
{
    public $code;
    public $verifyCode;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'email', 'subject', 'content'], 'required'],
            [['id', 'answer_id'], 'integer'],
            [['subject', 'content'], 'string'],
            [['c_date'], 'safe'],
            ['email', 'email'],
            [['fullname'], 'string', 'max' => 255],
            [['password_code'], 'string', 'max' => 20],
            [['code'], RecaptchaV3Validator::className(), 'acceptance_score' => null],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => Yii::t('app','Ism'),
            'email' =>Yii::t('app','Elektron pochta'),
            'subject' => Yii::t('app','Mavzu'),
            'content' => Yii::t('app','Matn'),
            'c_date' => 'C Date',
            'answer_id' => 'Answer ID',
            'password_code' => 'Password Code',
            'verifyCode' => Yii::t('app','Captcha'),

        ];
    }
}
