<?php

namespace app\widgets;

use app\models\Category;
use yii\base\Widget;

class MenuWidget extends Widget{
    
    public function run()
    {
        $cats = Category::find()->asArray()->all();
        return $this->render('menu', ['cats' => $cats]);
    }

}
