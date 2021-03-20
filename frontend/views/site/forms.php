<?php ?>
<div class="material-background"></div>

<div class="container container-full">
    <div class="ms-paper">
        <div class="row">
            <div class="col-lg-3 ms-paper-menu-left-container">
                <?= $this->render('forms-nav', ['refno' => "$refno"]) ?>
            </div>
            <!-- col-lg-3 -->
            <div class="col-lg-9 ms-paper-content-container">
                <div class="ms-paper-content">
                    <?= $this->render($refno, ['refno' => "$refno"])?>
                </div>
                <!-- ms-paper-content -->
            </div>
            <!-- col-lg-9 -->
        </div>
        <!-- row -->
    </div>
    <!-- ms-paper -->
</div>