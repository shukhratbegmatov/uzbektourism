<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "st_countryman".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $name_cyrl
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 * @property string $text_cyrl
 * @property string $fio_ru
 * @property string $fio_en
 * @property string $fio_uz
 * @property string $fio_cyrl
 * @property string $lavozim_uz
 * @property string $lavozim_ru
 * @property string $lavozim_en
 * @property string $lavozim_cyrl
 * @property string $information_uz
 * @property string $information_ru
 * @property string $information_en
 * @property string $information_cyrl
 * @property string $country_uz
 * @property string $country_ru
 * @property string $country_en
 * @property string $country_cyrl
 * @property string $photo
 */
class Countryman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'countryman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name_uz', 'name_ru', 'name_en', 'name_cyrl', 'text_uz', 'text_ru', 'text_en', 'text_cyrl', 'fio_ru', 'fio_en', 'fio_uz', 'fio_cyrl', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'lavozim_cyrl', 'information_uz', 'information_ru', 'information_en', 'information_cyrl', 'country_uz', 'country_ru', 'country_en', 'country_cyrl', 'photo'], 'required'],
            [['id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'text_uz', 'text_ru', 'text_en', 'text_cyrl', 'fio_ru', 'fio_en', 'fio_uz', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'information_uz', 'information_ru', 'information_en', 'country_uz', 'country_ru', 'country_en'], 'string'],
            [['name_cyrl', 'fio_cyrl', 'lavozim_cyrl', 'information_cyrl', 'country_cyrl', 'photo'], 'string', 'max' => 255],
            [['id'], 'unique'],
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
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
            'text_cyrl' => 'Text Cyrl',
            'fio_ru' => 'Fio Ru',
            'fio_en' => 'Fio En',
            'fio_uz' => 'Fio Uz',
            'fio_cyrl' => 'Fio Cyrl',
            'lavozim_uz' => 'Lavozim Uz',
            'lavozim_ru' => 'Lavozim Ru',
            'lavozim_en' => 'Lavozim En',
            'lavozim_cyrl' => 'Lavozim Cyrl',
            'information_uz' => 'Information Uz',
            'information_ru' => 'Information Ru',
            'information_en' => 'Information En',
            'information_cyrl' => 'Information Cyrl',
            'country_uz' => 'Country Uz',
            'country_ru' => 'Country Ru',
            'country_en' => 'Country En',
            'country_cyrl' => 'Country Cyrl',
            'photo' => 'Photo',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CountrymanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CountrymanQuery(get_called_class());
    }
}
