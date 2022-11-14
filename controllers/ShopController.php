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
        $query = Good::find()->orderBy('id')
            ->select('id, name, img, price, category_id')
            ->with('category');

        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query->count(),
        ]);

        $goods = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        // echo '<pre>';
        // var_dump($goods);
        // var_dump($goods[0]->category);exit;

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
        $good = Good::findOne($id);
        if(empty($good)) throw new NotFoundHttpException('Страница не найдена', 404);
        return $this->render('item', ['good' => $good]);
    }

    public function actionCategory($id)
    {

        $query = Good::find()->where(['category_id' => $id]);

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);

        //$id = \Yii::$app->request->get('id');
        $goods = $query->orderBy('id')        
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        if(empty($goods)) throw new NotFoundHttpException('Страница не найдена', 404);

        return $this->render('index', [
            'goods' => $goods,
            'pagination' => $pagination,
        ]);
    }


}