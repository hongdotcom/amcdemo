<?php

use common\assets\DropZoneAsset;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

DropZoneAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <section id="urgent" class="stats-content">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="zmdi zmdi-account-circle"></i> Urgent Order 193</h3>
                    </div>
                    <table class="table table-no-border table-striped">
                        <tbody><tr>
                                <th>
                                    <i class="zmdi zmdi-account mr-1 color-royal"></i> Booth ID</th>

                                <td class="text-left">1993   <a href="worker" class="btn btn-primary btn-xs btn-raised ">
                                        <i class="zmdi zmdi-account-box-o"></i>    Release Order</a>
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
                                    <i class="zmdi zmdi-email mr-1 color-primary"></i>Floor Plan</th>
                                <td><a href="#attachment" class="btn btn-primary btn-xs btn-raised ">4 Attachments</a></td>
                            <tr>
                                <th>
                                    <i class="zmdi zmdi-calendar mr-1 color-danger"></i> Worker Feedback</th>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="zmdi zmdi-calendar mr-1 color-danger"></i> Attach Photo</th>
                                <td><input type="file" accept="image/*" capture="camera" /></td>
                            </tr>
                            <tr>
                                <th><i class="zmdi zmdi-calendar mr-1 color-danger"></i> Attach File</th>
                                <td>
                                    <form id="myDropzone<?= rand(1, 100) ?>" class="dropzone" action="/dms/upload" method="post">
                                        <input type="hidden" name="_csrf-frontend" value="">                        
                                        <input name="idfolder" type="hidden" value="1">
                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <i class="zmdi zmdi-calendar mr-1 color-danger"></i> Case Close</th>
                                <td class="text-left">      <a href="javascript:void(0)" class="btn btn-primary btn-xs btn-raised ">
                                        <i class="zmdi zmdi-shopping-cart-plus"></i> Close Order</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </section>
            <section id="attachment" class="stats-content">
                <div class="row">
                    <div class="card">
                        <div class="card-header">* Stand Floorplan</div>
                        <div class="card-body" style="max-width: 100%">
                            <img src="/img/floorplan.png"style="max-width: 100%">
                            <img src="/img/demo/tradestand.png" style="max-width: 100%">

                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-12">
                                    <span class="text-info">Version 4 - 2018-9-10</span>
                                    <img src="/img/vision-01.png" class="mw100 p-b-10">
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-12">
                                    <span class="text-info">Version 3 - 2018-9-1</span>
                                    <img src="/img/vision-02.jpg" class="mw100 p-b-10">
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-12">
                                    <span class="text-info">Version 2 - 2018-8-5</span>
                                    <img src="/img/vision-03.jpg" class="mw100 p-b-10">
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-12">
                                    <span class="text-info">Version 1 - 2018-8-1</span>
                                    <img src="/img/vision-04.jpg" class="mw100 p-b-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
