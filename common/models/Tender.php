<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tender".
 *
 * @property int $id
 * @property string|null $title_uz
 * @property string|null $title_cyrl
 * @property string|null $title_en
 * @property string|null $title_ru
 * @property string|null $desc_ru
 * @property string|null $desc_uz
 * @property string|null $desc_cyrl
 * @property string|null $desc_en
 * @property string|null $link_uz
 * @property string|null $link_ru
 * @property string|null $link_en
 * @property string|null $link_cyrl
 */
class Tender extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tender';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_cyrl', 'title_en', 'title_ru', 'desc_ru', 'desc_uz', 'desc_cyrl', 'desc_en', 'link_uz'], 'required'],
            [['desc_ru', 'desc_uz', 'desc_cyrl', 'desc_en', 'link_uz'], 'string'],
            [['title_uz', 'title_cyrl', 'title_en', 'title_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => 'Title Uz',
            'title_cyrl' => 'Title Cyrl',
            'title_en' => 'Title En',
            'title_ru' => 'Title Ru',
            'desc_ru' => 'Desc Ru',
            'desc_uz' => 'Desc Uz',
            'desc_cyrl' => 'Desc Cyrl',
            'desc_en' => 'Desc En',
            'link_uz' => 'Link Uz',
        ];
    }
}
