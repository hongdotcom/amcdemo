<?php

use common\assets\DropZoneAsset;
use yii\helpers\Url;
//use yii\bootstrap\ActiveForm;
//use yii\helpers\Url;

DropZoneAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="alert alert-danger">
                <strong>Urgent!</strong> Please handle <a href="#urgent" class="alert-link">Booth 193 now!!!</a>.
            </div>

            <div class="card card-pills animated fadeInUp  order-first order-sm-2 animation-delay-12">
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

        <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 ">
            <section id="urgent" class="stats-content">

                <div class="card card-danger animated fadeInUp animation-delay-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="zmdi zmdi-account-circle"></i> Urgent Order 193</h3>
                    </div>
                    <table class="table table-no-border table-striped">
                        <tbody><tr>
                                <th>
                                    <i class="zmdi zmdi-account mr-1 color-royal"></i> Booth ID</th>

                                <td class="text-left">1993   <a href="worker-order" class="btn btn-primary btn-xs btn-raised ">
                                        <i class="zmdi zmdi-account-box-o"></i>    Pick Order</a>
                                </td>

                            </tr>
                            <tr>
                                <th>
                                    <i class="zmdi zmdi-account mr-1 color-royal"></i> Booth Dimension</th>

                                <td class="text-left">3M x 6M Open to Left
                                </td>

                            </tr>

                            <tr>
                                <th>
                                    <i class="zmdi zmdi-male-female mr-1 color-success"></i> Team</th>
                                <td>Team Electricity</td>
                            </tr>
                            <tr>
                                <th>
                                    <i class="zmdi zmdi-info mr-1 color-success"></i> Description</th>
                                <td>The electricity for one outlet is very untable. The laptop is not charging</td>
                            </tr>



                            <tr>
                                <th class>
                                    <i class="zmdi zmdi-male-female mr-1 color-success"></i> Client Mobile No</th>
                                <td>852-12345678</td>
                            </tr>
                            <tr>
                                <th>
                                    <i class="zmdi zmdi-email mr-1 color-success"></i> Primary Contact</th>
                                <td>
                                    Client H3C
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <i class="zmdi zmdi-email mr-1 color-primary"></i> Email</th>
                                <td>
                                    <a href="#">h3c@h3c.com</a>
                                </td>
                            </tr>
                            <tr>
                                <th class="color-danger">
                                    <i class="zmdi zmdi-calendar mr-1 color-danger"></i> Order Time</th>
                                <td><p class="color-danger">Mar 21, 2018 11:00pm</p></td>
                            </tr>
                            <tr>
                                <th>
                                    <i class="zmdi zmdi-calendar mr-1 color-danger"></i> Worker Feedback</th>
                                <td><input type="text"  /></td>

                            </tr>
                            <tr>
                                <th><i class="zmdi zmdi-calendar mr-1 color-danger"></i> Attach Photo</th>
                                <td><input type="file" accept="image/*" capture="camera" /></td>
                            </tr>
                            <tr>
                                <th><i class="zmdi zmdi-calendar mr-1 color-danger"></i> Attach File</th>
                                <td>
                                    <form id="myDropzone" class="dropzone" action="/dms/upload" method="post">
                                        <input type="hidden" name="_csrf-frontend" value="">                        
                                        <input name="idfolder" type="hidden" value="1">
                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                    </form>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <i class="zmdi zmdi-calendar mr-1 color-danger"></i> Case Close</th>
                                <td class="text-left">      <a href="<?= Url::to(['site/work-orders']) ?>" class="btn btn-primary btn-xs btn-raised ">
                                        <i class="zmdi zmdi-shopping-cart-plus"></i> Close Order</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </section>

            <div class="card animated fadeInUp animation-delay-7 order-first order-sm-12">
                <div class="ms-hero-bg-primary ms-hero-img-coffee">
                    <h3 class="color-white index-1 text-center no-m pt-4">CA2018-Worker7064</h3>
                    <div class="color-medium index-1 text-center np-m">ID 7064</div>
                    <img src="/img/demo/avatar/1.jpg" alt="..." class="img-avatar-circle"> </div>
                <div class="card-body pt-4 text-center">
                    <h3 class="color-primary">COSMOPROF 2018</h3>
                    <img src="/img/demo/cosmoprof2018.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="card animated fadeInUp animation-delay-12 order-first order-sm-12">
                <div class="ms-hero-bg-royal ms-hero-img-mountain">
                    <h3 class="color-white index-1 text-center pb-4 pt-4">Your Contractor Team Manager</h3>
                </div>
                <div class="card-body">
                    <div class="ms-media-list">
                        <div class="media mb-2">
                            <a class="mr-3" href="#">
                                <img class="media-object" src="/img/demo/avatar/9.jpg"> </a>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0 color-warning">Brother Chung</h4>
                                <a href="mailto:joe@example.com?subject=feedback">bro.chung@amcstyle.com</a><br>
                                Mobile 852-1234-5678
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-primary animated fadeInUp animation-delay-12 order-first order-sm-12">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="zmdi zmdi-account-circle"></i> Profile Information</h3>
                </div>
                <table class="table table-no-border table-striped">
                    <tbody><tr>
                            <th>
                                <i class="zmdi zmdi-account mr-1 color-royal"></i> ID</th>
                            <td>7064</td>
                        </tr>

                        <tr>
                            <th>
                                <i class="zmdi zmdi-male-female mr-1 color-success"></i> Team</th>
                            <td>Team Electricity</td>
                        </tr>
                        <tr>
                            <th>
                                <i class="zmdi zmdi-male-female mr-1 color-success"></i> Official ID</th>
                            <td>A9933311</td>
                        </tr>



                        <tr>
                            <th>
                                <i class="zmdi zmdi-male-female mr-1 color-success"></i> Telephone</th>
                            <td>852-12345678</td>
                        </tr>
                        <tr>
                            <th>
                                <i class="zmdi zmdi-email mr-1 color-primary"></i> Primary Contact</th>
                            <td>
                                <a href="#">Bruce Wayne</a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <i class="zmdi zmdi-email mr-1 color-primary"></i> Email</th>
                            <td>
                                <a href="#">ana.sanz@example.com</a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <i class="zmdi zmdi-calendar mr-1 color-info"></i> Member Since</th>
                            <td>Mar 21, 2018</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
