<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Good;

class CartController extends Controller
{


    public function actionAdd($id)
    {
        //$id = \Yii::$app->request->get('id');
        $good = Good::findOne($id);
        if(empty($good)) throw new NotFoundHttpException('Страница не найдена', 404);
        //$session = \Yii::$app->session;
        //$session->open();
        //if ();
        //return 'hello';
        return $this->renderPartial('add', ['good' => $good]);
    }
    

}