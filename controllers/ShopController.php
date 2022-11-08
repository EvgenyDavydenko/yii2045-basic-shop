<?php

namespace app\controllers;

use yii\web\Controller;
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

        $posts = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'posts' => $posts,
            'pagination' => $pagination,
        ]);
    }

    /**
     * Displays item.
     *
     * @return string
     */
    public function actionItem()
    {
        return $this->render('item');
    }

}