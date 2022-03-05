<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu1".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $name_cyrl
 * @property string|null $link
 * @property int $parent_id
 * @property int $menu_order
 * @property int $status
 * @property int $substatus
 */
class Menu1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'name_cyrl', 'parent_id', 'menu_order', 'status'], 'required'],
            [['parent_id', 'menu_order', 'status'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'name_cyrl', 'link'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'name_cyrl' => 'Name Cyrl',
            'link' => 'Link',
            'parent_id' => 'Parent ID',
            'menu_order' => 'Menu Order',
            'status' => 'Status',
        ];
    }
}
