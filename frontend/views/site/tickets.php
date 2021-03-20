<?php

use yii\helpers\Url;
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-danger"><i class="fa fa-2x fa-comments-o"></i> Outstanding Tickets</h2>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="<?= Url::to(['site/ticket']) ?>" class="list-group-item list-group-item-action withripple">
                            ID 1001 Tailor made Walls
                            <span class="ml-auto badge-pill bg-danger"><i class="fa fa-times"></i></span>
                            <div class="ripple-container"></div></a>
                        <a href="<?= Url::to(['site/ticket']) ?>" class="list-group-item list-group-item-action withripple">
                            ID 1002 Cabinet 002
                            <span class="ml-auto badge-pill"><i class="fa fa-product-hunt"></i></span>
                        </a>
                        <a href="<?= Url::to(['site/ticket']) ?>" class="list-group-item list-group-item-action withripple">
                            ID 1003 Clean up whole stand
                        </a>

                        <a href="<?= Url::to(['site/ticket']) ?>" class="list-group-item list-group-item-action withripple">
                            ID 1004 Replace out of order LED lights
                            <span class="ml-auto badge-pill bg-danger"><i class="fa fa-times"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-success"><i class="fa fa-2x fa-comments-o"></i> Completed Tickets</h2>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="<?= Url::to(['site/ticket']) ?>" class="list-group-item list-group-item-action withripple">
                            ID 1001 Tailor made Walls
                            <span class="ml-auto badge-pill bg-success"><i class="fa fa-check"></i></span>
                            <div class="ripple-container"></div></a>
                        <a href="<?= Url::to(['site/ticket']) ?>" class="list-group-item list-group-item-action withripple">
                            ID 1002 Cabinet 002
                            <span class="ml-auto badge-pill bg-success"><i class="fa fa-check"></i></span>
                        </a>
                        <a href="<?= Url::to(['site/ticket']) ?>" class="list-group-item list-group-item-action withripple">
                            ID 1003 Clean up whole stand
                        </a>

                        <a href="<?= Url::to(['site/ticket']) ?>" class="list-group-item list-group-item-action withripple">
                            ID 1004 Replace out of order LED lights
                            <span class="ml-auto badge-pill bg-success"><i class="fa fa-check"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>