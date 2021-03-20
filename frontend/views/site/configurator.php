<?php

use yii\helpers\Url;
?>

<div class="ms-hero ms-hero-material" style="margin-top: 0 !important;">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7">
                <div id="carousel-hero" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="carousel-caption">
                                <div class="ms-hero-material-text-container">
                                    <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                                        <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">Your
                                            <strong>Trade Stand</strong> Configurator</h1>

                                        <h2 class="animated fadeInLeft animation-delay-18">You are only  
                                            <span class="color-warning">3 steps</span> away from your trade fair stand!</h2>
                                    </header>
                                    <ul class="ms-hero-material-list">
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                                                    <i class="zmdi zmdi-airplane"></i>
                                                </span>
                                            </div>

                                            <div class="ms-list-text animated fadeInRight animation-delay-19">
                                                Configure your trade fair stand online
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp">
                                                    <i class="zmdi zmdi-bike"></i>
                                                </span>
                                            </div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-21">
                                                Choose the equipments you need
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                                                    <i class="zmdi zmdi-album"></i>
                                                </span>
                                            </div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-23">
                                                Fill out the electrics order form
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="ms-hero-material-buttons text-right">
                                        <div class="ms-hero-material-buttons text-right">
                                            <a href="<?= Url::to(['site/3d']) ?>" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                                                <i class="zmdi zmdi-settings"></i> Configure Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ms-hero-material-text-container -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="ms-hero-img animated zoomInUp animation-delay-30">
                    <img src="/img/demo/mock-imac-material2.png" alt="" class="img-fluid">
                    <div id="carousel-hero-img" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators carousel-indicators-hero-img">
                            <li data-target="#carousel-hero-/img" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-hero-/img" data-slide-to="1"></li>
                            <li data-target="#carousel-hero-/img" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="ms-hero-img-slider carousel-item active">
                                <img src="/img/hero/1.png" alt="" class="img-fluid"> </div>
                            <div class="ms-hero-img-slider carousel-item">
                                <img src="/img/hero/2.png" alt="" class="img-fluid"> </div>
                            <div class="ms-hero-img-slider carousel-item">
                                <img src="/img/hero/3.png" alt="" class="img-fluid"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>

