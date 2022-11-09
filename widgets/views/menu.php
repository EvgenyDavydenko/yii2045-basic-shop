
<button type="submit" class="btn btn-outline-dark btn-block">Cart</button>

<div class="input-group mt-5">
    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
    </div>
</div>

<ul class="list-group mt-5">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="<?= \yii\helpers\Url::to(['shop/index'])?>">Весь чай</a>
        <span class="badge badge-primary badge-pill">14</span>
    </li>
    <?php foreach ($cats as $cat) : ?>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="<?= \yii\helpers\Url::to(['shop/category', 'id'=>$cat['id']])?>"><?= $cat['name']?></a>
        <span class="badge badge-primary badge-pill">14</span>
    </li>
    <?php endforeach ?>
</ul>           
