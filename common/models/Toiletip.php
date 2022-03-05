<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "toiletip".
 *
 * @property int $id
 * @property string|null $latitute
 * @property string|null $longitute
 */
class Toiletip extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toiletip';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['latitute', 'longitute'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'latitute' => 'Latitute',
            'longitute' => 'Longitute',
        ];
    }
}
