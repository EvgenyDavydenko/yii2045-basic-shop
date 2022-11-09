<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;
use app\models\Good;

class ShopController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Good::find();

        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query->count(),
        ]);

        $goods = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'goods' => $goods,
            'pagination' => $pagination,
        ]);
    }

    /**
     * Displays item.
     *
     * @return string
     */
    public function actionItem($id)
    {
        //$id = \Yii::$app->request->get('id');
        $good = Good::find()->where(['id' => $id])->one();
        return $this->render('item', ['good' => $good]);
    }

    public function actionCategory($id)
    {

        $query = Good::find()->where(['category' => $id]);

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);

        //$id = \Yii::$app->request->get('id');
        $goods = $query->orderBy('id')        
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        if ($goods === null) {
            throw new NotFoundHttpException;
        }
        return $this->render('index', [
            'goods' => $goods,
            'pagination' => $pagination,
        ]);
    }
    

}