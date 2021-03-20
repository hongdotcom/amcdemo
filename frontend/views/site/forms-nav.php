<?php

use yii\helpers\Url;
?>
<div class="ms-paper-menu-left">
    <h3 class="ms-paper-menu-title">
        <i class="zmdi zmdi-apps"></i> Forms Menu
        <a role="button" data-toggle="collapse" href="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu" class="withripple">
            <i class="zmdi zmdi-menu"></i>
        </a>
    </h3>
    <div class="panel-menu collapse" id="collapseMenu">
        <ul class="panel-group ms-collapse-nav" id="components-nav" role="tablist" aria-multiselectable="true">
            <li class="card" role="tab" id="e1">
                <a role="button" data-toggle="collapse" href="#c1" aria-expanded="true" aria-controls="c1" class="withripple">
                    <i class="fa fa-times-circle text-danger"></i> Outstanding</a>
                <ul id="c1" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="e1" data-parent="#components-nav">
                    <li>
                        <a class="withripple <?= $refno == "form4a" ? 'active' : '' ?>" href="<?= Url::to(['site/forms', 'refno' => 'form4a']) ?>">4a</a>
                    </li>
                    <li>
                        <a class="withripple <?= $refno == "form2a" ? 'active' : '' ?>" href="<?= Url::to(['site/forms', 'refno' => 'form2a']) ?>">2a</a>
                    </li>
                    <li>
                        <a class="withripple" href="<?= Url::to(['site/forms', 'refno' => '2b']) ?>">2b</a>
                    </li>
                    <li>
                        <a class="withripple" href="<?= Url::to(['site/forms', 'refno' => '3a']) ?>">3a</a>
                    </li>
                    <li>
                        <a class="withripple" href="<?= Url::to(['site/forms', 'refno' => '3b']) ?>">3b</a>
                    </li>
                </ul>
            </li>
            <li class="card" role="tab" id="e2">
                <a role="button" data-toggle="collapse" href="#c2" aria-expanded="true" aria-controls="c2" class="collapsed withripple">
                    <i class="fa fa-check-circle text-success"></i> Completed</a>

                <ul id="c2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="e2" data-parent="#components-nav">
                    <li>
                        <a class="withripple" href="<?= Url::to(['site/forms', 'refno' => '5']) ?>">
                            5</a>
                    </li>
                    <li>
                        <a class="withripple" href="<?= Url::to(['site/forms', 'refno' => '5a']) ?>">
                            5a</a>
                    </li>
                    <li>
                        <a class="withripple" href="<?= Url::to(['site/forms', 'refno' => '6']) ?>">
                            6</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- ms-collapse-nav -->
    </div>
</div>