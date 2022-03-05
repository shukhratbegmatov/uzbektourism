<?php

namespace common\models;

use app\components\Sitemap;
use Yii;

/**
 * This is the model class for table "{{%menu}}".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $name_cyrl
 * @property integer $page_slug
 * @property string $link
 * @property integer $c_order
 * @property integer $target_blank
 * @property integer $status
 * @property integer $visible_top
 * @property integer $visible_side
 *
 * @property G355[] $g355s
 * @property Menu $parent
 * @property Page $page
 * @property Sitemap[] $sitemaps
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%menu}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'c_order', 'target_blank', 'status'], 'integer'],
            [['link','page_slug'], 'string'],
            [['name_uz'], 'required'],
            [['name_uz', 'name_ru', 'name_en', 'name_cyrl'], 'string', 'max' => 255],
            [['parent_id', 'c_order'], 'default', 'skipOnEmpty' => false, 'value'=>0],
            [['visible_top', 'visible_side'], 'default', 'skipOnEmpty'=>false, 'value'=>1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Десертное меню',
            'name_uz' => 'Название меню (Latin)',
            'name_ru' => 'Название меню (Русский)',
            'name_en' => 'Название меню (Английский)',
            'name_cyrl' => 'Название меню (Кирилл)',
            'page_slug' => 'Slug',
            'link' => 'Ссылка',
            'c_order' => 'порядок',
            'target_blank' => 'Открыть в новом окне',
            'status' => 'Актив',
            'visible_top' => 'В верхней части меню Вид',
            'visible_side' => 'Вид сбоку в меню',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getG355s()
    {
        return $this->hasMany(G355::className(), ['menu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::className(), ['slug' => 'page_slug']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(self::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSitemaps()
    {
        return $this->hasMany(Sitemap::className(), ['menu_id' => 'id']);
    }
    
    private $tmenus = [];
    private $byPMenus = [];

    /**
     * @return array
     */
    public function getMenusAsTree($parent_id = 0, $type = 'top')
    {
        $query = self::find()->where(['status'=>1]);
//        if($parent_id !== NULL){
//            $query->andWhere(['parent_id'=>$parent_id]);
//        }
        if($type == 'top'){
            $this->tmenus = $query->andWhere(['visible_top'=>1])->orderBy('parent_id, c_order, id')->indexBy('id')->asArray()->all();
        }elseif($type == 'side'){
            $this->tmenus = $query->andWhere(['visible_side'=>1])->orderBy('parent_id, c_order, id')->indexBy('id')->asArray()->all();
        }else{
            $this->tmenus = $query->orderBy('parent_id, c_order, id')->indexBy('id')->asArray()->all();
        }
       
        $this->byPMenus = [];
        foreach($this->tmenus as $item){
            if(!isset($this->byPMenus[$item['parent_id']])){
                $this->byPMenus[$item['parent_id']] = [];
            }
            $this->byPMenus[$item['parent_id']][] = $item['id'];
        }
        
        $result = [];
        
//        prd($this->tmenus);
        
        foreach($this->tmenus as $item){
            if($item['parent_id'] == $parent_id){
                $result[$item['id']] = $item;
                $result[$item['id']]['items'] = $this->_menuTree($item['id']);
            } elseif($item['parent_id'] > $parent_id) {
                break;
            }
        }
        
        $this->byPMenus = [];
        return $result;
    }
    
    private function _menuTree($mId){
        
        if( isset( $this->byPMenus[$mId] ) ){
            $result = [];
            foreach($this->byPMenus[$mId] as $item){
                $result[$item] = $this->tmenus[$item];
                $result[$item]['items'] = $this->_menuTree($item);
            }
            return $result;
        }else{
            return [];
        }
    }
    
    public static function allParents($not_id = NULL){
        $query = self::find()->where(['exists', (new \yii\db\Query())->select('menuchildren.id')->from('{{%menu}} as menuchildren')->where('menuchildren.parent_id = {{%menu}}.id')]);
        if($not_id){
            $res = $query->andWhere(['!=', 'id', $not_id]);
        }
        $res = $query->orderBy('parent_id, c_order, id')->asArray()->all();
        
        return \yii\helpers\ArrayHelper::map($res, 'id', 'name_uz');
    }
    
    public static function all($not_id = NULL){
        $query = self::find();
        if($not_id){
            $res = $query->where(['!=', 'id', $not_id]);
        }
        $res = $query->orderBy('parent_id, c_order, id')->asArray()->all();
        
        return \yii\helpers\ArrayHelper::map($res, 'id', 'name_uz');
    }
    
    public static function menus($parent_id){
        $query = self::find()->where(['parent_id'=>$parent_id]);
        $res = $query->asArray()->all();
        return \yii\helpers\ArrayHelper::map($res, 'id', 'name_uz');
    }
}
