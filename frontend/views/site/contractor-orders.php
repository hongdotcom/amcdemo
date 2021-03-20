<?php

use yii\helpers\Url;
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <?= $this->render("workers") ?>
                </div>
            </div>

            <div class="card card-danger">
                <div class="card-header">
                    <h3>Contractor Order (CO-28974)</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <img src="/img/tradestand1.jpg" alt="" class="img-fluid mb-4"> </div>
                        <div class="col-xl-6">
                            <h3 class="no-mt">
                                <a href="<?= Url::to(['site/contractor-order']) ?>">Deliver and install LED Spotlight</a>
                            </h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudianda beatae magni es repudiandae beatae magni magnam autem natuse inse on voluptates elit sit molestias.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="/img/demo/avatar/50.jpg" alt="..." class="rounded-circle mr-1"> by
                            <a href="<?= Url::to(['site/contractor-order']) ?>">Jane</a> in
                            <a href="<?= Url::to(['site/contractor-order']) ?>" class="ms-tag ms-tag-info">Equipment</a>
                            <span class="ml-1 d-none d-sm-inline">
                                <i class="zmdi zmdi-time mr-05 color-info"></i>
                                <span class="color-medium-dark">August 15, 2018</span>
                            </span>
                        </div>
                        <div class="col-lg-4 text-right">
                            <a href="<?= Url::to(['site/contractor-order']) ?>" class="btn btn-danger btn-raised btn-block animate-icon">Overdue
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-warning">
                <div class="card-header">
                    <h3>Contractor Order (CO-28974)</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <img src="/img/tradestand1.jpg" alt="" class="img-fluid mb-4"> 
                        </div>
                        <div class="col-xl-6">
                            <h3 class="no-mt">
                                <a href="<?= Url::to(['site/contractor-order']) ?>">Deliver and install LED Spotlight</a>
                            </h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudianda beatae magni es repudiandae beatae magni magnam autem natuse inse on voluptates elit sit molestias.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="/img/demo/avatar/50.jpg" alt="..." class="rounded-circle mr-1"> by
                            <a href="<?= Url::to(['site/contractor-order']) ?>">Jane</a> in
                            <a href="<?= Url::to(['site/contractor-order']) ?>" class="ms-tag ms-tag-info">Equipment</a>
                            <span class="ml-1 d-none d-sm-inline">
                                <i class="zmdi zmdi-time mr-05 color-info"></i>
                                <span class="color-medium-dark">August 15, 2018</span>
                            </span>
                        </div>
                        <div class="col-lg-4 text-right">
                            <a href="<?= Url::to(['site/contractor-order']) ?>" class="btn btn-primary btn-raised btn-block animate-icon">Work in progress
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                    <h3>Contractor Order (CO-28974)</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <img src="/img/tradestand1.jpg" alt="" class="img-fluid mb-4"> </div>
                        <div class="col-xl-6">
                            <h3 class="no-mt">
                                <a href="<?= Url::to(['site/contractor-order']) ?>">Deliver and install LED Spotlight</a>
                            </h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudianda beatae magni es repudiandae beatae magni magnam autem natuse inse on voluptates elit sit molestias.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="/img/demo/avatar/50.jpg" alt="..." class="rounded-circle mr-1"> by
                            <a href="<?= Url::to(['site/contractor-order']) ?>">Jane</a> in
                            <a href="<?= Url::to(['site/contractor-order']) ?>" class="ms-tag ms-tag-info">Equipment</a>
                            <span class="ml-1 d-none d-sm-inline">
                                <i class="zmdi zmdi-time mr-05 color-info"></i>
                                <span class="color-medium-dark">August 15, 2018</span>
                            </span>
                        </div>
                        <div class="col-lg-4 text-right">
                            <a href="<?= Url::to(['site/contractor-order']) ?>" class="btn btn-success btn-raised btn-block animate-icon">Completed
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">

                <div class="ms-hero-bg-primary ms-hero-bg-success ms-hero-img-coffee">
                    <h3 class="color-white index-1 text-center pb-4 pt-4 no-mb">Work Order Summary</h3>
                </div><div class="card-body">
                    <div class="list-group">
                        <a href="contractor-worker" class="list-group-item list-group-item-action">Unassigned
                            <span class="ml-auto badge-pill badge-pill badge-pill">12</span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">Pending
                            <span class="ml-auto badge-pill badge-pill-info">19</span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">Work in progress
                            <span class="ml-auto badge-pill badge-pill-warning">8</span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">Overdue
                            <span class="ml-auto badge-pill badge-pill-danger badge-pill">12</span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">Completed
                            <span class="ml-auto badge-pill badge-pill-success">4</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card card-primary wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="ms-hero-bg-pill ms-hero-bg-info ms-hero-img-meeting">
                    <h3 class="color-white index-1 text-center pb-4 pt-4 no-mb">Worker On Duty</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">Engaged
                            <span class="ml-auto badge-pill badge-pill badge-pill">12</span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">On Duty
                            <span class="ml-auto badge-pill badge-pill-info">6</span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">On Leave
                            <span class="ml-auto badge-pill badge-pill-warning">8</span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item list-group-item-action">Stand By
                            <span class="ml-auto badge-pill badge-pill-danger badge-pill">12</span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="card card-primary wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="ms-hero-bg-primary ms-hero-img-mountain">
                    <h3 class="color-white index-1 text-center pb-4 pt-4 no-mb">Contractor info</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-2">
                        <h3 class="no-m ms-site-title">Ever Win Engineering Co.</h3>
                    </div>
                    <address class="no-mb">
                        <p>
                            <i class="color-danger-light zmdi zmdi-pin mr-1"></i> Unit AB, 8th Floor, Tung Kin Factory Building,</p>
                        <p>
                            <i class="color-warning-light zmdi zmdi-account mr-1"></i> Chan Tai Man</p>
                        <p>
                            <i class="color-info-light zmdi zmdi-email mr-1"></i>
                            <a href="mailto:joe@example.com">ctm@everwin.com</a>
                        </p>
                        <p>
                            <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+852 3752 9000 </p>
                        <p>
                            <i class="color-success-light fa fa-fax mr-1"></i>+852 3585 6003 </p>
                    </address>
                </div>
            </div>
        </div>
    </div>
</div>