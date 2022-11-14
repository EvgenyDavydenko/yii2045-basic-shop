<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Good;
use app\models\Cart;

class CartController extends Controller
{

    public function actionAdd($id)
    {
        //$id = \Yii::$app->request->get('id');
        $good = Good::findOne($id);
        if(empty($good)) throw new NotFoundHttpException('Страница не найдена', 404);
        
        $cart = new Cart();
        $session = $cart->addToCart($good);
        return $this->renderPartial('cart-modal', ['session' => $session]);
    }    

}