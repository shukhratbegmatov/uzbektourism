<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "galereya".
 *
 * @property int $id
 * @property string $image_max
 * @property string $image_min
 * @property int $status
 */
class Galereya extends \yii\db\ActiveRecord
{
    public $imageFile1;
    public $imageFile2;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'galereya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'integer'],
            [['image_max', 'image_min'], 'string', 'max' => 225],
            [['imageFile1'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024 * 31],
            [['imageFile2'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024],
        ];
    }

    public function upload($file_name1, $file_name2)
    {
        if ($this->validate()) {
            $this->imageFile1->saveAs('../../frontend/web/img_conv/' . $file_name1);
            $this->imageFile2->saveAs('../../frontend/web/img_conv/' . $file_name2);
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
            'imageFile1' => 'Выберите файл',
            'imageFile2' => 'Выберите файл',
            'status' => 'Status',
        ];
    }
}
