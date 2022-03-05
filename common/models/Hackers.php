<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hackers".
 *
 * @property int $id
 * @property int $ip
 * @property int $status
 * @property int $page
 * @property string $date
 */
class Hackers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hackers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ip', 'page'], 'required'],
            [['ip', 'page'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'status' => 'Status',
            'page' => 'Page',
            'date' => 'Date',
        ];
    }
}
