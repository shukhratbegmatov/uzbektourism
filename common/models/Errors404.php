<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "errors404".
 *
 * @property int $id
 * @property string $error_link
 * @property string|null $answer_link
 * @property string $date
 * @property int|null $error_count
 * @property int $status
 */
class Errors404 extends \yii\db\ActiveRecord
{
    public $answer_link1;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'errors404';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['error_link'], 'required'],
            [['date'], 'safe'],
            [['error_count', 'status'], 'integer'],
            [['error_link','answer_link1', 'answer_link'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'error_link' => 'Error Link',
            'answer_link' => 'Answer Link',
            'answer_link1' => 'Answer Link',
            'date' => 'Date',
            'error_count' => 'Error Count',
            'status' => 'Status',
        ];
    }
}
