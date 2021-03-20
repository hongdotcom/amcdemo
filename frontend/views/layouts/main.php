<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use richardfan\widget\JSRegister;
use common\helpers\AifinHelper;

$this->title = "AMC Style";
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <?php $this->head() ?>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="theme-color" content="#333">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <meta name="description" content="AMC Style Theme">
        <link rel="shortcut icon" href="img/favicon.png?v=3">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--[if lt IE 9]>
            <script src="js/html5shiv.min.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php $this->beginBody() ?>
        <a href="javascript:void(0)" class="ms-conf-btn ms-configurator-btn btn-circle btn-circle-raised btn-circle-primary animated rubberBand">
            <i class="fa fa-gears"></i>
        </a>

        <div class="wrapper">
            <header class="ms-header ms-header-primary">
                <!--ms-header-primary-->
                <div class="container container-full">
                    <div class="ms-title">
                        <a href="/">
                          <!-- <img src="img/demo/logo-header.png" alt=""> -->
                            <span class="ms-logo animated zoomInDown animation-delay-5">A</span>
                            <h1 class="animated fadeInRight animation-delay-6">AMC
                                <span>Style</span>
                            </h1>
                        </a>
                    </div>
                    <div class="header-right">
                        <div class="share-menu">
                            <a href="<?= Url::to(['site/cart']) ?>" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </a>
                        </div>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
                            <i class="zmdi zmdi-account"></i>
                        </a>

                        <form class="search-form animated zoomInDown animation-delay-9" action="dashboard" submit="forward">
                            <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />
                                <label for="search-box">
                                    <i class="zmdi zmdi-search"></i>
                                </label>
                     
                        </form>
                        <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10">
                            <i class="zmdi zmdi-menu"></i>
                        </a>
                    </div>
                </div>
            </header>

            <?= $this->render('nav') ?>
            <?= $this->render('_theme-configurator') ?>

            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>

        <!-- Login Modal -->
        <div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog animated zoomIn animated-3x" role="document">
                <div class="modal-content">
                    <div class="modal-header d-block shadow-2dp no-pb">
                        <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close"></i>
                            </span>
                        </button>
                        <div class="modal-title text-center">
                            <span class="ms-logo ms-logo-white ms-logo-sm mr-1">A</span>
                            <h3 class="no-m ms-site-title">AMC
                                <span>Style</span>
                            </h3>
                        </div>
                        <div class="modal-header-tabs">
                            <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple">
                                        <i class="zmdi zmdi-account"></i> Login</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                                        <i class="zmdi zmdi-account-add"></i> Register</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                                        <i class="zmdi zmdi-key"></i> Recovery Pass</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                                <form autocomplete="off">
                                    <fieldset>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-account"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-user">Username</label>
                                                <input type="text" id="ms-form-user" class="form-control"> </div>
                                        </div>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-lock"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-pass">Password</label>
                                                <input type="password" id="ms-form-pass" class="form-control"> </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="form-group no-mt">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> Remember Me </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-raised btn-primary pull-right">Login</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                                <div class="text-center">
                                    <h3>Login with</h3>
                                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-facebook">
                                        <i class="zmdi zmdi-facebook"></i> Facebook</a>
                                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-twitter">
                                        <i class="zmdi zmdi-twitter"></i> Twitter</a>
                                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-google">
                                        <i class="zmdi zmdi-google"></i> Google</a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                                <form>
                                    <fieldset>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-account"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-user-r">Username</label>
                                                <input type="text" id="ms-form-user-r" class="form-control"> </div>
                                        </div>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-email-r">Email</label>
                                                <input type="email" id="ms-form-email-r" class="form-control"> </div>
                                        </div>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-lock"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-pass-r">Password</label>
                                                <input type="password" id="ms-form-pass-r" class="form-control"> </div>
                                        </div>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-lock"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-pass-rn">Re-type Password</label>
                                                <input type="password" id="ms-form-pass-rn" class="form-control"> </div>
                                        </div>
                                        <button class="btn btn-raised btn-block btn-primary">Register Now</button>
                                    </fieldset>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                                <fieldset>
                                    <div class="form-group label-floating">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="zmdi zmdi-account"></i>
                                            </span>
                                            <label class="control-label" for="ms-form-user-re">Username</label>
                                            <input type="text" id="ms-form-user-re" class="form-control"> </div>
                                    </div>
                                    <div class="form-group label-floating">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="zmdi zmdi-email"></i>
                                            </span>
                                            <label class="control-label" for="ms-form-email-re">Email</label>
                                            <input type="email" id="ms-form-email-re" class="form-control"> </div>
                                    </div>
                                    <button class="btn btn-raised btn-block btn-primary">Send Password</button>
                                </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end login modal-->

        <?= $this->render('footer') ?>
        <?php $this->endBody() ?>
    </body>
</html>

<script>
    function forward() {
        window.location = "site/dashboard";
    }
</script>

<?php $this->endPage() ?>
