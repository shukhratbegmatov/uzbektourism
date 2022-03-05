<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "centr".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_cyrl
 * @property string $name_en
 * @property string $fio_uz
 * @property string $fio_ru
 * @property string $fio_en
 * @property string $fio_cyrl
 * @property string $imya_cyrl
 * @property string $imya_en
 * @property string $imya_ru
 * @property string $imya_uz
 * @property string|null $short_uz
 * @property string|null $short_cyrl
 * @property string|null $short_ru
 * @property int|null $short_en
 * @property string $photo
 * @property string $doljnost_uz
 * @property string $doljnost_ru
 * @property string $doljnost_en
 * @property string $doljnost_cyrl
 * @property string $tel
 * @property string $email
 */
class Centr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'centr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_cyrl', 'name_en', 'fio_uz', 'fio_ru', 'fio_en', 'fio_cyrl', 'imya_cyrl', 'imya_en', 'imya_ru', 'imya_uz', 'photo', 'doljnost_uz', 'doljnost_ru', 'doljnost_en', 'doljnost_cyrl', 'tel', 'email'], 'required'],
            [['name_uz', 'name_ru', 'name_cyrl', 'name_en', 'fio_uz', 'fio_ru', 'fio_en', 'imya_en', 'imya_ru', 'imya_uz'], 'string'],
            [['short_en'], 'integer'],
            [['fio_cyrl', 'short_uz', 'short_cyrl', 'short_ru', 'photo', 'doljnost_uz', 'doljnost_ru', 'doljnost_cyrl', 'tel', 'email'], 'string', 'max' => 255],
            [['imya_cyrl'], 'string', 'max' => 1000],
            [['doljnost_en'], 'string', 'max' => 10000],
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
            'name_cyrl' => 'Name Cyrl',
            'name_en' => 'Name En',
            'fio_uz' => 'Fio Uz',
            'fio_ru' => 'Fio Ru',
            'fio_en' => 'Fio En',
            'fio_cyrl' => 'Fio Cyrl',
            'imya_cyrl' => 'Imya Cyrl',
            'imya_en' => 'Imya En',
            'imya_ru' => 'Imya Ru',
            'imya_uz' => 'Imya Uz',
            'short_uz' => 'Short Uz',
            'short_cyrl' => 'Short Cyrl',
            'short_ru' => 'Short Ru',
            'short_en' => 'Short En',
            'photo' => 'Photo',
            'doljnost_uz' => 'Doljnost Uz',
            'doljnost_ru' => 'Doljnost Ru',
            'doljnost_en' => 'Doljnost En',
            'doljnost_cyrl' => 'Doljnost Cyrl',
            'tel' => 'Tel',
            'email' => 'Email',
        ];
    }
}
