<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "link".
 *
 * @property int $id
 * @property string $user_id
 * @property string|null $link1
 * @property string|null $link2
 * @property string|null $link3
 * @property string|null $link4
 * @property string|null $link5
 * @property string|null $link6
 * @property string|null $link7
 * @property string|null $link8
 * @property string|null $link9
 * @property string|null $link10
 * @property int $status
 */
class Link extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'link';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['status'], 'integer'],
            [['user_id', 'link1', 'link2', 'link3', 'link4', 'link5', 'link6', 'link7', 'link8', 'link9', 'link10'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'link1' => 'Menus',
            'link2' => 'SubMenu data',
            'link3' => 'News',
            'link4' => 'Digest',
            'link5' => 'Galereya',
            'link6' => 'Electronic register',
            'link7' => 'Tender',
            'link8' => 'Errors',
            'link9' => 'Hackers',
            'status' => 'Status',
        ];
    }
}
