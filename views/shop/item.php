
<div class="row mt-5">
    
    <div class="col-lg-3">
        <?= \app\widgets\MenuWidget::widget()?>          
    </div>

    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-8">
                <img class="img-fluid rounded-circle" src="/img/<?=$good['img']?>" alt="..." />
            </div>
            <div class="col-lg-4 mt-5">
                <p><?= $good->category->name ?></p>
                <h2><?=$good['name']?></h2>
                <p><?=$good['descr']?></p>
                <button type="submit" class="btn btn-outline-dark btn-block"><?=$good['price'] . ' ₽'?></button>       
            </div>            
        </div>        
    </div>

</div>