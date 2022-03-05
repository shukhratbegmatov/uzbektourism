<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "covid".
 *
 * @property int $id
 * @property string|null $title_en
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $desc_en
 * @property string|null $desc_ru
 * @property string|null $desc_uz
 * @property string|null $content_en
 * @property string|null $content_ru
 * @property string|null $content_uz
 * @property string|null $image
 * @property string|null $date
 * @property int $viewed
 * @property int $isactive
 */
class Covid extends \yii\db\ActiveRecord
{

    public $imageFile1;
    const SCENARIO_CREATE  =  "create";
    const SCENARIO_UPDATE  =  "update";
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'covid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'title_en', 'title_ru', 'title_uz', 'desc_en', 'desc_ru', 'desc_uz',  'content_en', 'content_ru', 'content_uz'], 'required'],
            [['title_en', 'title_ru', 'title_uz', 'desc_en', 'desc_ru', 'desc_uz', 'content_en', 'content_ru', 'content_uz'], 'string'],
            [['date'], 'safe'],
            [['viewed', 'isactive'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['title_cyrl', 'title_en', 'title_ru', 'title_uz',], 'string', 'min' => 0, 'max' => 97],
            [['imageFile1'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function scenarios(){
        return [
            self::SCENARIO_CREATE =>['title_cyrl', 'title_en', 'title_ru', 'title_uz', 'desc_cyrl', 'desc_en', 'desc_ru', 'desc_uz', 'content_cyrl', 'content_en', 'content_ru', 'content_uz', 'imageFile1'],
            self::SCENARIO_UPDATE =>['title_cyrl', 'title_en', 'title_ru', 'title_uz', 'desc_cyrl', 'desc_en', 'desc_ru', 'desc_uz', 'content_cyrl', 'content_en', 'content_ru', 'content_uz']
        ];
    }

    public function upload($file_name)
    {
        if ($this->validate() && $this->imageFile1 == true) {
            $this->imageFile1->saveAs('../../frontend/web/uploads/images/' . $file_name);
            return true;
        } else {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_en' => 'Title En',
            'title_ru' => 'Title Ru',
            'title_uz' => 'Title Uz',
            'desc_en' => 'Desc En',
            'desc_ru' => 'Desc Ru',
            'desc_uz' => 'Desc Uz',
            'content_en' => 'Content En',
            'content_ru' => 'Content Ru',
            'content_uz' => 'Content Uz',
            'image' => 'Image',
            'date' => 'Date',
            'viewed' => 'Viewed',
            'isactive' => 'Isactive',
        ];
    }
}
