<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

//NavBar::begin([
//    'brandLabel' => Yii::$app->name,
//    'brandUrl' => Yii::$app->homeUrl,
//    'options' => [
//        'class' => 'navbar-calc navbar-fixed-top',
//    ],
//]);
//
//if (Yii::$app->user->isGuest) {
////$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//} else {
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'Tickets', 'url' => ['/crm-record/index']],
//        ['label' => 'User Registration', 'url' => ['/site/signup']],
//    ];
//    $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//}
//echo Nav::widget([
//    'options' => ['class' => 'navbar-nav navbar-right'],
//    'items' => $menuItems,
//]);
//NavBar::end();
?>
<nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-primary">
    <div class="container container-full">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= Url::to(['site/dashboard']) ?>">
              <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
                <span class="ms-logo ms-logo-sm">A</span>
                <span class="ms-title">AMC
                    <strong>Style</strong>
                </span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
                <!--- my information -->
<!--                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" 
                       data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">CALC
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li>
                            <a href="<?= Url::to(['site/calcintro']) ?>" class="dropdown-item" href="<?= Url::to(['site/calcintro']) ?>">CALC Introduction</a>
                        </li>
                    </ul>
                </li>-->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" 
                       data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Overview
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li>
                            <a href="<?= Url::to(['site/dashboard']) ?>" class="dropdown-item" href="<?= Url::to(['site/dashboard']) ?>">Client Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['site/news']) ?>" class="dropdown-item" href="<?= Url::to(['site/news']) ?>">Latest News</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/contact-info']) ?>">Your Information</a>
                        </li>
                        
                    </ul>
                </li>
                <!-- my information end -->

                <!-- gallery -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" 
                       data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Shop
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-item has_children">Stand</a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'stand']) ?>">System Stand</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="<?= Url::to(['site/pick']) ?>" class="has_children dropdown-item">Furniture</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Chairs</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'tables']) ?>">Tables</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Barstools</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Lounge furniture</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Chair & Table set</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Kitchen Furniture</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Equipment for system stands</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="has_children dropdown-item">Equipments</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Electrical package - 5,2 KW</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">LED - Track light</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">LED - Illuminated aperture</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">LED - Spot on bracket</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Spotlight</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Halogen spot</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">Spot on bracket</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/pick', 'cat' => 'chairs']) ?>">HQI spot</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- gallery end -->

                <!-- my activities -->
                <li class="nav-item dropdown">
                    <a href="<?= Url::to(['site/deadlines']) ?>" class="nav-link dropdown-toggle animated fadeIn animation-delay-7"
                       role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Schedule
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" 
                       data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Manual
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/manual']) ?>">Welcome Message</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/manual']) ?>">Organiser Contact List</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/manual']) ?>">Timetable</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/manual']) ?>">Frequently Asked Questions</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/manual']) ?>">Contractors, Suppliers & Venue</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/manual']) ?>">General Information and Regulations</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/manual']) ?>">Ready Stand Specifications</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/manual']) ?>">Use of Sticker</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/manual']) ?>">Terms and Conditions of Hire</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a href="<?= Url::to(['site/invitation']) ?>" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" 
                       role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Mailing
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" 
                       data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Help
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/faq']) ?>">Frequently Asked Questions</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/faq2']) ?>">Frequently Asked Questions 2</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/contactus']) ?>">Contact AMC</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" 
                       data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Contractor
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/contractor-orders']) ?>">Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/contractor-worker']) ?>">Worker</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" 
                       data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Worker
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/worker']) ?>">My Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/worker-order']) ?>">Work Order</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" 
                       data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Invoice
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/contractor-statement']) ?>">Invoice</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['site/account-export']) ?>">Account Export</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="<?= Url::to(['site/inventory-dashboard']) ?>" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" 
                       role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Inventory
                    </a>
                </li>
            </ul>
        </div>
        <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
        </a>
    </div>
    <!-- container -->
</nav>

<?= $this->render("side-menu") ?>
