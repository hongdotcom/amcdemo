<?php

use yii\helpers\Url;
?>
<div class="ms-hero-page-override ms-hero-img-team ms-hero-bg-primary">
    <div class="container">
        <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Mailing Lists</h1>
            <p class="lead lead-lg color-medium text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Clients can be
                put in multiple listings to receive different stage notifications.
        </div>
    </div>
</div>

<div class="container">
    <div class="row d-flex justify-content-center card-top">
        <div class="col-lg-4 col-md-6">
            <div class="card card-warning wow zoomInUp mb-4 animation-delay-5" style="visibility: visible; animation-name: zoomInUp;">
                <div class="withripple zoom-img">
                    <a href="javascript:void()" class="">
                        <img src="/img/demo/p2.jpg" alt="..." class="img-fluid">
                    </a>
                </div>
                <div class="card-body">
                    <span class="label label-warning pull-right">Stage 1</span>
                    <h3 class="color-warning">Invitation</h3>
                    <p>Initial stage of inviting clients to visit your stand.</p>
                    <div class="row">
                        <div class="col text-right">
                            <a href="<?= Url::to(['site/mailing-list']) ?>" class="btn btn-raised btn-sm btn-warning">
                                <i class="zmdi zmdi-account"></i> Members</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-success wow zoomInUp mb-4 animation-delay-7" style="visibility: visible; animation-name: zoomInUp;">
                <div class="withripple zoom-img">
                    <a href="javascript:void()" class="">
                        <img src="/img/demo/p1.jpg" alt="..." class="img-fluid">
                    </a>
                </div>
                <div class="card-body">
                    <span class="label label-success pull-right">Stage 2</span>
                    <h3 class="color-success">Reminder</h3>
                    <p>Send email reminder to clients when the event is 1 day ahead.</p>
                    <div class="row">
                        <div class="col text-right">
                            <a href="<?= Url::to(['site/mailing-list']) ?>" class="btn btn-raised btn-sm btn-success">
                                <i class="zmdi zmdi-account"></i> Members</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-royal wow zoomInUp mb-4 animation-delay-9" style="visibility: visible; animation-name: zoomInUp;">
                <div class="withripple zoom-img">
                    <a href="javascript:void()" class="">
                        <img src="/img/demo/p3.jpg" alt="..." class="img-fluid">
                    </a>
                </div>
                <div class="card-body">
                    <span class="label label-royal pull-right">Stage 3</span>
                    <h3 class="color-royal">Feedback</h3>
                    <p>Invite clients to visit your website and fill out the feedback questionnaire.</p>
                    <div class="row">
                        <div class="col text-right">
                            <a href="<?= Url::to(['site/mailing-list']) ?>" class="btn btn-raised btn-sm btn-royal">
                                <i class="zmdi zmdi-account"></i> Members</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

