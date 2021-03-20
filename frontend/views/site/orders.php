<?php

use yii\helpers\Url;
?>
<div class="col-sm-12">
    <div class="card row">
        <div class="card-header">
            <h2 class="text-danger"><i class="fa fa-2x fa-briefcase"></i> Outstanding Orders</h2>
        </div>
        <div class="card-body">
            <div class="list-group">
                <a href="<?= Url::to(['site/shop-item']) ?>" class="list-group-item list-group-item-action withripple">
                    <img src="/img/demo/products/m1.png" alt="">
                    ID 2001 Tailor made Walls<small class="text-info ml-auto">2018-10-30</small>
                </a>
                <a href="<?= Url::to(['site/shop-item']) ?>" class="list-group-item list-group-item-action withripple">
                    <img src="/img/demo/products/m2.png" alt="">
                    ID 2002 Cabinet 002<br>
                    <small class="text-info ml-auto">2018-10-30</small>
                </a>
                <a href="<?= Url::to(['site/shop-item']) ?>" class="list-group-item list-group-item-action withripple">
                    <img src="/img/demo/products/m3.png" alt="">
                    ID 2003 Clean up whole stand
                    <small class="text-info ml-auto">2018-10-30</small>
                </a>
                <a href="<?= Url::to(['site/shop-item']) ?>" class="list-group-item list-group-item-action withripple">
                    <img src="/img/demo/products/m4.png" alt="">
                    ID 2004 Replace out of order LED lights
                    <small class="text-info ml-auto">2018-10-30</small>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="card row">
        <div class="card-header">
            <h2 class="text-success"><i class="fa fa-2x fa-briefcase"></i> Completed Orders</h2>
        </div>
        <div class="card-body">
            <div class="list-group">
                <a href="<?= Url::to(['site/shop-item']) ?>" class="list-group-item list-group-item-action withripple">
                    <img src="/img/demo/products/m2.png" alt="">
                    ID 1001 Tailor made Walls
                    <span class="ml-auto badge-pill bg-success"><i class="fa fa-check"></i></span>
                </a>

                <a href="<?= Url::to(['site/shop-item']) ?>" class="list-group-item list-group-item-action withripple">
                    <img src="/img/demo/products/m3.png" alt="">
                    ID 1002 Cabinet 002
                    <span class="ml-auto badge-pill bg-success"><i class="fa fa-check"></i></spanspan>
                </a>
                <a href="<?= Url::to(['site/shop-item']) ?>" class="list-group-item list-group-item-action withripple">
                    <img src="/img/demo/products/m4.png" alt="">
                    ID 1003 Clean up whole stand
                    <span class="ml-auto badge-pill bg-success"><i class="fa fa-check"></i></spanspan>
                </a>

                <a href="<?= Url::to(['site/shop-item']) ?>" class="list-group-item list-group-item-action withripple">
                    <img src="/img/demo/products/m5.png" alt="">
                    ID 1004 Replace out of order LED lights
                    <span class="ml-auto badge-pill bg-success"><i class="fa fa-check"></i></small>
                </a>
            </div>
        </div>
    </div>
</div>
