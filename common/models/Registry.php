<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "registry".
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_uz
 * @property string $name_cyrl
 * @property string $name_en
 * @property string $text_ru
 * @property string $text_uz
 * @property string $text_cyrl
 * @property string $text_en
 */
class Registry extends \yii\db\ActiveRecord
{
    public $file1;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registry';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_ru', 'name_uz', 'name_cyrl', 'name_en'], 'required'],
            [['name_ru', 'name_uz', 'name_cyrl', 'name_en'], 'string', 'max' => 255],
            [['file1'], 'file', 'skipOnEmpty' => false, 'extensions' => 'zip, sql, pdf, doc, docx, xlsx'],
        ];
    }
    public  function upload($file_name){
        if ($this->validate() && $this->file1 == true){
            $this->file1->saveAs('../../frontend/web/downloads/files/'.$file_name);
            return true;
        }else{
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
            'name_ru' => 'Name Ru',
            'name_uz' => 'Name Uz',
            'name_cyrl' => 'Name Cyrl',
            'name_en' => 'Name En',
            'images' => 'Fayl',
        ];
    }
}
