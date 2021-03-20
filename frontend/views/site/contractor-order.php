<?php

use yii\helpers\Url;
use richardfan\widget\JSRegister;
?>
<style>
    .drawing-wrapper {
        position: relative;
        width: calc(100hw - 50px);
        height: 400px;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        overflow: auto;
    }
    .drawing-wrapper img {
        width: 100% !important;
    }

    .signature-pad {
        position: absolute;
        left: 0;
        top: 0;
        width:calc(100hw - 50px);
        height:400px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
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
                                <a href="javascript:void(0)">Deliver and install LED Spotlight</a>
                            </h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudianda beatae magni es repudiandae beatae magni magnam autem natuse inse on voluptates elit sit molestias.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="/img/demo/avatar/50.jpg" alt="..." class="rounded-circle mr-1"> by
                            <a href="javascript:void(0)">Jane</a> in
                            <a href="javascript:void(0)" class="ms-tag ms-tag-info">Equipment</a>
                            <span class="ml-1 d-none d-sm-inline">
                                <i class="zmdi zmdi-time mr-05 color-info"></i>
                                <span class="color-medium-dark">August 15, 2018</span>
                            </span>
                        </div>
                        <div class="col-lg-4 text-right">
                            <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-block animate-icon">Work in progress
                            </a>
                        </div>
                    </div>
                </div>
            </div>
             <div class="card card-primary">
                <div class="card-header"  role="tab" id="headingTwo5">
                   <h4 class="card-title">
                            <a class="withripple collapsed" role="button" data-toggle="collapse" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                                <h3> Floor Plan</h3> <div class="ripple-container"></div></a>
                        </h4>
                </div>
                 <div class="card-collapse collapse" id="collapseTwo5" aria-expanded="false">
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
            <div class="card card-primary">
                <div class="card-header">
                    Work Orders
                </div>
                <div class="card-body overflow-hidden">
                    <table class="table">
                        <tr>
                            <th>展品名稱</th>
                            <th>攤位號碼</th>
                            <th>日期</th>
                            <th>供應商</th>
                            <th>狀態</th>
                        </tr>
                        <tr>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td class="text-success">Completed</td>
                        </tr>
                        <tr>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td class="text-warning">WIP</td>
                        </tr>
                        <tr>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td class="text-warning">WIP</td>
                        </tr>
                        <tr>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td class="text-danger">Overdue</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card card-primary wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="card-header">
                    <i class="fa fa-2x fa-plus"></i> New Work Order 現場工程單
                </div>
                <div class="card-body">
                    <div class='row'>
                        <div class='col-sm-12'>
                            <h4 class="text-primary">* You can draw notes on top of the stand floorplan</h4>
                            <div class="drawing-wrapper">
                                <img src="/img/floorplan.png">
                                <canvas id="signature-pad" class="signature-pad" width=500 height=300></canvas>
                            </div>
                            <div style='margin-top: 20px;'>
                                <button id="save" class='btn btn-primary'>Save</button>
                                <button id="clear" class='btn btn-warning'>Clear</button>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-sm-12'>
                            <form class="">
                                <div class="form-group label-floating is-empty">
                                    <label for="inputEmail" class="control-label">展品名稱</label>
                                    <input type="email" class="form-control" id="x1"> </div>
                                <div class="form-group label-floating is-empty">
                                    <label for="inputEmail" class="control-label">攤位號碼</label>
                                    <input type="email" class="form-control" id="x2"> </div>
                                <div class="form-group label-floating is-empty">
                                    <label for="inputEmail" class="control-label">日期</label>
                                    <input type="email" class="form-control" id="x3"> </div>
                                <div class="form-group label-floating is-empty">
                                    <label for="inputName" class="control-label">時間</label>
                                    <input type="text" class="form-control" id="inputName"> </div>
                                <div class="form-group label-floating is-empty">
                                    <label for="inputSubject" class="control-label">供應商</label>
                                    <input type="text" class="form-control" id="inputSubject"> </div>
                                <div class="form-group label-floating is-empty">
                                    <label for="textArea" class="control-label">跟住事項</label>
                                    <textarea class="form-control" rows="5" id="textArea"></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                    <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">

            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Worker List</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="Filters">
                        <h3 class="mb-1 no-mt">Available</h3>
                        <div class="gaadiex-list">


                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=".smartphone"><span class="checkbox-material"></span> <img class="rounded-circle mr-1" src="/img/demo/avatar/50.jpg" alt="List user">  Anthony Wong </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=".smartphone"><span class="checkbox-material"></span> <img class="rounded-circle mr-1" src="/img/demo/avatar/50.jpg" alt="List user">  陳九 </label>
                            </div> 
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=".smartphone"><span class="checkbox-material"></span> <img class="rounded-circle mr-1" src="/img/demo/avatar/50.jpg" alt="List user">  Raymond Chan </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=".smartphone"><span class="checkbox-material"></span> <img class="rounded-circle mr-1" src="/img/demo/avatar/50.jpg" alt="List user"> 鍾叔 </label>
                            </div> 
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value=".smartphone"><span class="checkbox-material"></span> <img class="rounded-circle mr-1" src="/img/demo/avatar/50.jpg" alt="List user">  渠王 </label>
                            </div>


                        </div>
                        <fieldset>
                            <h3 class="mb-1">Engaged</h3>
                            <div class="form-group no-mt">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value=".smartphone"><span class="checkbox-material"></span> <img class="rounded-circle mr-1" src="/img/demo/avatar/50.jpg" alt="List user">  科哥 </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value=".smartphone"><span class="checkbox-material"></span> <img class="rounded-circle mr-1" src="/img/demo/avatar/50.jpg" alt="List user">  林生 </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value=".smartphone"><span class="checkbox-material"></span> <img class="rounded-circle mr-1" src="/img/demo/avatar/50.jpg" alt="List user">  超人 </label>
                                </div>
                            </div>
                        </fieldset>
                        <button class="btn btn-danger btn-block no-mb mt-2" id="Reset">
                            <i class="zmdi zmdi-delete"></i> Clear Selection</button>
                    </form>
                 
                </div>
            </div>

            <div class="card card-primary wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="ms-hero-bg-primary ms-hero-img-mountain">
                    <h3 class="color-white index-1 text-center pb-4 pt-4 no-mb">Client info</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-2">
                        <h3 class="no-m ms-site-title">Avengers Alliance</h3>
                    </div>
                    <address class="no-mb">
                        <p>
                            <i class="color-danger-light zmdi zmdi-pin mr-1"></i> Unit AB, 8th Floor, Tung Kin Factory Building,</p>
                        <p>
                            <i class="color-warning-light zmdi zmdi-account mr-1"></i> Ringo Wong</p>
                        <p>
                            <i class="color-info-light zmdi zmdi-email mr-1"></i>
                            <a href="mailto:joe@example.com">ringowong@abc.com</a>
                        </p>
                        <p>
                            <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+852 3752 9000 </p>
                        <p>
                            <i class="color-success-light fa fa-fax mr-1"></i>+852 3585 6003 </p>
                    </address>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Activity History
                </div>
                <div class="card-body overflow-hidden">
                    <div class="ms-media-list">
                        <div class="media mb-2">
                            <div class="media-body">
                                <a href="javascript:void(0)" class="media-heading">Site visited</a>
                                <div class="media-footer text-small">
                                    <span class="mr-1">
                                        <i class="zmdi zmdi-time color-info mr-05"></i> August 18, 2018</span>
                                    <span>
                                        <i class="zmdi zmdi-folder-outline color-success mr-05"></i>
                                        <a href="javascript:void(0)">Visit</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="media mb-2">
                            <div class="media-body">
                                <a href="javascript:void(0)" class="media-heading">Installed but failed</a>
                                <div class="media-footer text-small">
                                    <span class="mr-1">
                                        <i class="zmdi zmdi-time color-info mr-05"></i> August 20, 2018</span>
                                    <span>
                                        <i class="zmdi zmdi-folder-outline color-danger mr-05"></i>
                                        <a href="javascript:void(0)">On site</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <a href="javascript:void(0)" class="media-heading">Contacted Ringo for another date to reinstall the spotlight. </a>
                                <div class="media-footer text-small">
                                    <span class="mr-1">
                                        <i class="zmdi zmdi-time color-info mr-05"></i> August 21, 2018</span>
                                    <span>
                                        <i class="zmdi zmdi-folder-outline color-royal-light mr-05"></i>
                                        <a href="javascript:void(0)">Follow up</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="card-header">
                    <i class="fa fa-2x fa-plus"></i> Add Activity
                </div>
                <div class="card-body">
                    <form class="">
                        <div class="form-group label-floating is-empty">
                            <label for="inputEmail1" class="control-label">Date & Time</label>
                            <input type="email" class="form-control" id="inputEmail1"> </div>
                        <div class="form-group label-floating is-empty">
                            <label for="inputName1" class="control-label">Description</label>
                            <input type="text" class="form-control" id="inputName1"> </div>
                        <div class="form-group label-floating is-empty">
                            <label for="inputSubject1" class="control-label">Charges</label>
                            <input type="text" class="form-control" id="inputSubject1"> </div>
                        <div class="form-group label-floating is-empty">
                            <label for="textArea1" class="control-label">Work Done</label>
                            <textarea class="form-control" rows="5" id="textArea1"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-danger">Cancel</button>
                            <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php

JSRegister::begin([
    'position' => \yii\web\View::POS_END
]);
?>
<script>
    var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
        backgroundColor: 'rgba(255, 255, 255, 0)',
        penColor: 'rgb(0, 0, 0)'
    });
    var saveButton = document.getElementById('save');
    var cancelButton = document.getElementById('clear');

    saveButton.addEventListener('click', function (event) {
        var data = signaturePad.toDataURL('image/png');

        // Send data to server instead...
        window.open(data);
    });

    cancelButton.addEventListener('click', function (event) {
        signaturePad.clear();
    });
</script>    
<?php JSRegister::end(); ?>