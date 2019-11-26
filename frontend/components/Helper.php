<?php

namespace frontend\components;

use common\models\Category;

class Helper
{
    public static function getCategories(){
        $cats = Category::find()->all();

        $menu_item = [];
        foreach ($cats as $uma_cat) {
            $menu_item[] = [
                'label' => $uma_cat->description,
                'url' => ['category/view?id=' . $uma_cat->id ]
            ];
        }
        return $menu_item;
    }

}
    
