
<div class="row mt-5">

    <div class="col-lg-3">
        <?= \app\widgets\MenuWidget::widget()?>          
    </div>

    <div class="col-lg-9">
        <div class="row">
            <?php foreach ($goods as $good): ?> 
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="<?= \yii\helpers\Url::to(['shop/item', 'id'=>$good->id])?>"><img class="card-img-top" src="/img/<?= $good->img ?>" alt="..." /></a>
                    <div class="card-body">
                        <h4 class="card-title"><?= $good->name ?></h4>
                        <p class="card-text">Категория</p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-primary btn-block"><?= $good->price . ' ₽'?></button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>                  
        </div>

        <div class="row">               
            <?= \yii\widgets\LinkPager::widget([
                'pagination' => $pagination,
                'maxButtonCount' => 5,
                'activePageCssClass' => 'active',
                'linkContainerOptions' => ['class' => 'page-item'],
                'linkOptions' => ['class' => 'page-link'],
                'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
            ]); ?>                 
        </div>
    </div>

</div>