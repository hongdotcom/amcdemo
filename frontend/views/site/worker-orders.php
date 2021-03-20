<?php

use common\assets\DropZoneAsset;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

DropZoneAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h2 class="text-danger">URGENT ORDERS</h2>

            <div class="ms-collapse" id="accordion5" role="tablist" aria-multiselectable="true">
                <div class="mb-0 card card-danger">
                    <div class="card-header" role="tab" id="headingOne5">
                        <h4 class="card-title">
                            <a class="withripple collapsed" role="button" data-toggle="collapse" href="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                                <i class="zmdi zmdi-pin"></i> Order #1 <div class="ripple-container"></div></a>
                        </h4>
                    </div>
                    <div id="collapseOne5" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingOne5" data-parent="#accordion5" style="">
<!--                        <div class="card-body"> -->
                            <?= $this->render("worker-order") ?>
                        <!--</div>-->
                    </div>
                </div>
                <div class="mb-0 card card-danger">
                    <div class="card-header" role="tab" id="headingTwo5">
                        <h4 class="card-title">
                            <a class="withripple collapsed" role="button" data-toggle="collapse" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                                <i class="zmdi zmdi-pin"></i>  Order #2 <div class="ripple-container"></div></a>
                        </h4>
                    </div>
                    <div id="collapseTwo5" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingTwo5" data-parent="#accordion5" style="">
                        <!--<div class="card-body">--> 
                            <?= $this->render("worker-order") ?>
                        <!--</div>-->
                    </div>
                </div>
                <div class="mb-0 card card-danger">
                    <div class="card-header" role="tab" id="headingThree3">
                        <h4 class="card-title">
                            <a class="withripple" role="button" data-toggle="collapse" href="#collapseThree5" aria-expanded="true" aria-controls="collapseThree5">
                                <i class="zmdi zmdi-pin"></i>  Order #3 <div class="ripple-container"></div></a>
                        </h4>
                    </div>
                    <div id="collapseThree5" class="card-collapse collapse show" role="tabpanel" aria-labelledby="headingThree5" data-parent="#accordion5" style="">
                        <!--<div class="card-body">--> 
                            <?= $this->render("worker-order") ?>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="card card-pills animated fadeInUp animation-delay-12">
                <div class="card-header ">
                    <h3 class="card-title">
                        <i class="zmdi zmdi-account-circle"></i>Assigned Order</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="<?= Url::to(['site/worker-orders']) ?>" class="list-group-item list-group-item-action">Urgent
                            <span class="ml-auto badge-pill badge-pill-danger badge-pill">2</span>
                        </a>
                        <a href="<?= Url::to(['site/worker-orders']) ?>" class="list-group-item list-group-item-action">Attention
                            <span class="ml-auto badge-pill badge-pill-warning badge-warning">12</span>
                        </a>
                        <a href="<?= Url::to(['site/worker-orders']) ?>" class="list-group-item list-group-item-action">Queue
                            <span class="ml-auto badge-pill badge-pill-info">6</span>
                        </a>
                        <a href="<?= Url::to(['site/worker-orders']) ?>" class="list-group-item list-group-item-action">Completed
                            <span class="ml-auto badge-pill badge-pill-success">8</span>
                        </a>

                        <a href="<?= Url::to(['site/worker-orders']) ?>" class="list-group-item list-group-item-action">Total/Incomplete
                            <span class="ml-auto badge-pill badge-pill">28</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
