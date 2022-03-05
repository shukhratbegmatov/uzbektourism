<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "create_menu".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string|null $name_en
 * @property string $title_uz
 * @property string $title_ru
 * @property string|null $title_en
 * @property string $title_cyrl
 * @property string $text_uz
 * @property string $text_ru
 * @property string|null $text_en
 * @property string $text_cyrl
 * @property string|null $images
 * @property string|null $create_date
 * @property int $menu_id
 */
class CreateMenu extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'create_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_cyrl', 'title_uz', 'title_ru', 'title_cyrl', 'text_uz', 'text_ru', 'text_cyrl', 'menu_id'], 'required'],
            [['text_uz', 'text_ru', 'text_en', 'text_cyrl'], 'string'],
            [['create_date'], 'safe'],
            [['menu_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'name_cyrl'], 'string', 'max' => 225],
            [['title_uz', 'title_ru', 'title_en', 'title_cyrl', 'images'], 'string', 'max' => 255],
            ['file', 'file', 'extensions' => 'jpg, jpeg, png', 'skipOnEmpty' => true],
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
            'title_uz' => 'Title Uz',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'title_cyrl' => 'Title Cyrl',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
            'text_cyrl' => 'Text Cyrl',
            'images' => 'Images',
            'create_date' => 'Create Date',
            'menu_id' => 'Menu ID',
        ];
    }
}
