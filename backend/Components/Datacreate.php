<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 05.10.2020
 */
namespace backend\Components;
use common\models\Menu1;

class Datacreate
{
    public function createMenu($model){
        $post = \Yii::$app->request->post('Menu1');
        $menu_order = $post['menu_order'];
        $parent_id = $post['parent_id'];
        if ($menu_order == 3){
            $menu = Menu1::findOne($parent_id);
            $menu->menu_order = 3;
            $menu->save();
        }
        $model->status = 1;
        $model->link = 'newssss1';
        return $model;
    }
}