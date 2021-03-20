<?php

use yii\helpers\Url;
use common\assets\DropZoneAsset;

DropZoneAsset::register($this);
?>
<!--<div class="container">-->

<div class="row">
    <div class="col-lg-8 col-md-9 col-sm-12">

        <div class="row">
            <div class="col-sm-12">
                <img src="/img/demo/banner.jpg" style="max-width: 100%">

                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="zmdi zmdi-close"></i>
                    </button>
                    <strong>
                        <i class="zmdi zmdi-alert-circle"></i> Attention!</strong> Your Trade Stand is NOT ready until all the tasks below have been completed 
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <a href="<?= Url::to(['site/forms']) ?>">
                            <div class="card card-danger card-body overflow-hidden text-center wow zoomInUp animation-delay-2" style="visibility: visible; animation-name: zoomInUp;">
                                <h4>5 / 20</h4>
                                <i class="fa fa-2x fa-file-text color-info"></i>
                                <p class="no-mb lead small-caps color-info">forms</p>
                                <a href="<?= Url::to(['site/forms']) ?>" class="animated fadeInRight animation-delay-12 pull-right"><i class="fa fa-cog"></i> Manage</a>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?= Url::to(['site/orders']) ?>">
                            <div class="card card-danger card-body overflow-hidden text-center wow zoomInUp animation-delay-5" style="visibility: visible; animation-name: zoomInUp;">
                                <h4>6 / 10</h4>
                                <i class="fa fa-2x fa-briefcase color-success"></i>
                                <p class="no-mb lead small-caps color-success">orders</p>
                                <a href="<?= Url::to(['site/orders']) ?>" class="animated fadeInRight animation-delay-12 pull-right"><i class="fa fa-cog"></i> Manage</a>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="card card-success card-body overflow-hidden text-center wow zoomInUp animation-delay-5" style="visibility: visible; animation-name: zoomInUp;">
                            <h4>1 / 1</h4>
                            <i class="fa fa-2x fa-bolt color-warning"></i>
                            <p class="no-mb lead small-caps color-warning">electricity</p>
                            <label class="label label-success btn-raised animated fadeInRight animation-delay-12 pull-right">DONE <i class="fa fa-check-circle color-success"></i></label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?= Url::to(['site/tickets']) ?>">
                            <div class="card card-danger card-body overflow-hidden text-center wow zoomInUp animation-delay-4" style="visibility: visible; animation-name: zoomInUp;">
                                <h4>16 / 25</h4>
                                <i class="fa fa-2x fa-comments-o color-royal"></i>
                                <p class="no-mb lead small-caps color-royal">tickets</p>
                                <a href="<?= Url::to(['site/tickets']) ?>" class="animated fadeInRight animation-delay-12 pull-right"><i class="fa fa-cog"></i> Manage</a>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            Your Trade Stand <a href="<?= Url::to(['site/3d']) ?>" class="animated fadeInRight animation-delay-12 pull-right">
                                <span style="color:#fff"><i class="zmdi zmdi-settings"></i> Configure</a></span>
                        </div>
                        <div class="card-body"> 
                            <img src="/img/demo/tradestand.png" style="max-width: 100%">
                            <table class="table table-no-border table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            <i class="zmdi zmdi-face mr-1 color-warning"></i> Exhibitor ID</th>
                                        <td>CA2018-TestChangeUser1</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="zmdi zmdi-male-female mr-1 color-success"></i> Stand No.</th>
                                        <td>Stand No.</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="zmdi zmdi-link mr-1 color-danger"></i> Stand Type</th>
                                        <td>
                                            <a href="#">Stand Type</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="zmdi zmdi-link mr-1 color-danger"></i> Stand Size</th>
                                        <td>
                                            <a href="#">4800 sqm</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <span class="text-info">Version 4 - 2018-9-10</span>
                                    <img src="/img/vision-01.png" class="mw100 p-b-10">
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <span class="text-info">Version 3 - 2018-9-1</span>
                                    <img src="/img/vision-02.jpg" class="mw100 p-b-10">
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <span class="text-info">Version 2 - 2018-8-5</span>
                                    <img src="/img/vision-03.jpg" class="mw100 p-b-10">
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <span class="text-info">Version 1 - 2018-8-1</span>
                                    <img src="/img/vision-04.jpg" class="mw100 p-b-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-sm-6">
                    <?= $this->render('tickets') ?>
                </div>
                <div class="col-sm-6">
                    <?= $this->render('orders') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-3 col-sm-12">
        <?= $this->render('deadlines') ?>
    </div>
</div>
