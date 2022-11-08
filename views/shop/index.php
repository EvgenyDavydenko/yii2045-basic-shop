<div class="row mb-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/ALEN8479.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="/img/ALEN8502.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="/img/ALEN8558.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-3">
        <button type="submit" class="btn btn-outline-dark btn-block">Cart</button>
        <div class="list-group mt-5">
            <a class="list-group-item" href="#!">Category 1</a>
            <a class="list-group-item" href="#!">Category 2</a>
            <a class="list-group-item" href="#!">Category 3</a>
        </div>            
    </div>

    <div class="col-lg-9">
        <div class="row">
            <?php foreach ($goods as $good): ?> 
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
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