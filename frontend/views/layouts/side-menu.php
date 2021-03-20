<?php

use yii\helpers\Url;
?>
<style>
    .list-item {
        list-style-type: none !important;
    }
</style>
<!-- ms-site-container -->
<div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
    <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
            <div class="ms-slidebar-login">
                <a href="javascript:void(0)" class="withripple">
                    <i class="zmdi zmdi-account"></i> Login</a>
                <a href="javascript:void(0)" class="withripple">
                    <i class="zmdi zmdi-account-add"></i> Register</a>
            </div>
            <div class="ms-slidebar-title">
                <form class="search-form">
                    <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
                    <label for="search-box-slidebar">
                        <i class="zmdi zmdi-search"></i>
                    </label>
                </form>
                <div class="ms-slidebar-t">
                    <span class="ms-logo ms-logo-sm">A</span>
                    <h3>AMC
                        <span>Style</span>
                    </h3>
                </div>
            </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
            <li class="card" role="tab" id="sch9">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc9" aria-expanded="false" aria-controls="sc9">
                    <i class="zmdi zmdi-home"></i> CALC Introduction </a>

                <ul id="sc9" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch9" data-parent="#slidebar-menu">
                    <li class="list-item">
                        <a href="<?= Url::to(['site/calcintro']) ?>" class="dropdown-item" href="<?= Url::to(['site/calcintro']) ?>">CALC Intro</a>
                    </li>
                </ul>
            </li>
            <li class="card" role="tab" id="sch1">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc1" aria-expanded="false" aria-controls="sc1">
                    <i class="zmdi zmdi-home"></i> Overview </a>

                <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1" data-parent="#slidebar-menu">
                    <li class="list-item">
                        <a href="<?= Url::to(['site/dashboard']) ?>" class="dropdown-item" href="<?= Url::to(['site/dashboard']) ?>">My Dashboard</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/news']) ?>" class="dropdown-item" href="<?= Url::to(['site/news']) ?>">Latest News</a>
                    </li>
                    <li class="list-item">
                        <a class="dropdown-item" href="<?= Url::to(['site/contact-info']) ?>">Your Information</a>
                    </li>
                </ul>
            </li>
            <li class="card" role="tab" id="sch2">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc2" aria-expanded="false" aria-controls="sc2">
                    <i class="zmdi zmdi-shopping-cart"></i> Shop </a>

                <ul id="sc2" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2" data-parent="#slidebar-menu">

                    <li id="sch2-0">
                        <a class="collapsed has_children dropdown-item" role="button" data-toggle="collapse" href="#sc4" aria-expanded="false" aria-controls="sch4">
                            <i class="zmdi zmdi-instagram"></i> Stand </a>

                        <ul id="sc4" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch4" data-parent="#sch2-0">
                            <li class="list-item">
                                <a href="<?= Url::to(['site/pick', 'cat' => 'stand']) ?>" class="dropdown-item" href="<?= Url::to(['site/dashboard']) ?>">System Stand</a>
                            </li>
                        </ul>
                    </li>
                    <li id="sch2-1">
                        <a class="collapsed has_children dropdown-item" role="button" data-toggle="collapse" href="#sc3" aria-expanded="false" aria-controls="sch3">
                            <i class="zmdi zmdi-apps"></i> Furniture </a>

                        <ul id="sc3" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch3" data-parent="#sch2-1">
                            <li class="list-item">
                                <a href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>" class="dropdown-item" href="<?= Url::to(['site/dashboard']) ?>">Chairs</a>
                            </li>
                            <li class="list-item">
                                <a href="<?= Url::to(['site/pick', 'cat' => 'tables']) ?>" class="dropdown-item" href="<?= Url::to(['site/news']) ?>">Tables</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Barstools</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Lounge furniture</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Chair & Table set</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Kitchen Furniture</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Equipment for system stands</a>
                            </li>
                        </ul>
                    </li>
                    <li id="sch2-2">
                        <a class="collapsed has_children dropdown-item" role="button" data-toggle="collapse" href="#sc2-3" aria-expanded="false" aria-controls="sch2-3">
                            <i class="zmdi zmdi-desktop-mac"></i> Equipments </a>

                        <ul id="sc2-3" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2-3" data-parent="#sch2-2">
                            <li class="list-item">
                                <a href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>" class="dropdown-item" href="<?= Url::to(['site/dashboard']) ?>">Electrical package - 5,2 KW</a>
                            </li>
                            <li class="list-item">
                                <a href="<?= Url::to(['site/pick', 'cat' => 'tables']) ?>" class="dropdown-item" href="<?= Url::to(['site/news']) ?>">LED - Track light</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">LED - Illuminated aperture</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">LED - Spot on bracket</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Spotlightt</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Halogen spot</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Spot on bracket</a>
                            </li>
                            <li class="list-item">
                                <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">HQI spot</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="card" role="tab">
                <a class="link" href="<?= Url::to(['site/deadlines']) ?>">
                    <i class="zmdi zmdi-calendar"></i> Schedule </a>
            </li>

            <li class="card" role="tab" id="sch-form">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc-form" aria-expanded="false" aria-controls="sc-form">
                    <i class="zmdi zmdi-file"></i> Manual </a>
                <ul id="sc-form" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch-form" data-parent="#slidebar-menu">
                    <li class="list-item">
                        <a href="<?= Url::to(['site/manual']) ?>">Welcome Message</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/manual']) ?>">Organiser Contact List</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/manual']) ?>">Timetable</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/manual']) ?>">Frequently Asked Questions</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/manual']) ?>">Contractors, Suppliers & Venue</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/manual']) ?>">General Information and Regulations</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/manual']) ?>">Ready Stand Specifications</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/manual']) ?>">Use of Sticker</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/manual']) ?>">Terms and Conditions of Hiret</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="link" href="<?= Url::to(['site/invitation']) ?>">
                    <i class="zmdi zmdi-email"></i> Mailing </a>
            </li>

            <li class="card" role="tab" id="sch5">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc5" aria-expanded="false" aria-controls="sc5">
                    <i class="zmdi zmdi-help"></i> Help </a>
                <ul id="sc5" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch5" data-parent="#slidebar-menu">
                    <li class="list-item">
                        <a href="<?= Url::to(['site/faq']) ?>">Frequently Asked Questions</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/faq2']) ?>">Frequently Asked Questions 2</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/contactus']) ?>">Contact AMC</a>
                    </li>
                </ul>
            </li>
            <li class="card" role="tab" id="sch6">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc6" aria-expanded="false" aria-controls="sc6">
                    <i class="zmdi zmdi-collection-image-o"></i> Contractor </a>
                <ul id="sc6" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch6" data-parent="#slidebar-menu">
                    <li class="list-item">
                        <a href="<?= Url::to(['site/contractor-orders']) ?>">Orders</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/contractor-worker']) ?>">Worker</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/contractor-statement']) ?>">Statement</a>
                    </li>
                </ul>
            </li>
            <li class="card" role="tab" id="sch8">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc8" aria-expanded="false" aria-controls="sc8">
                    <i class="zmdi zmdi-collection-image-o"></i> Worker </a>
                <ul id="sc8" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch8" data-parent="#slidebar-menu">
                    <li class="list-item">
                        <a href="<?= Url::to(['site/worker']) ?>">My Dashboard</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= Url::to(['site/worker-order']) ?>">Work Order</a>
                    </li>

                </ul>



            </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
            <h4 class="ms-slidebar-block-title">Social Links</h4>
            <div class="ms-slidebar-social">
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                    <span class="badge-pill badge-pill-pink">12</span>
                    <div class="ripple-container"></div>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                    <span class="badge-pill badge-pill-pink">4</span>
                    <div class="ripple-container"></div>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
                    <i class="zmdi zmdi-google"></i>
                    <div class="ripple-container"></div>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
                    <i class="zmdi zmdi-instagram"></i>
                    <div class="ripple-container"></div>
                </a>
            </div>
        </div>
    </div>
</div>
