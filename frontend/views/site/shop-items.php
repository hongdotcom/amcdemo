<?php

use yii\helpers\Url;
?>
<div class="ms-site-container">
    <!-- Modal -->
    <div class="ms-hero-page ms-hero-img-city2 ms-hero-bg-info mb-6">
        <div class="text-center color-white mt-6 mb-6 index-1">
            <h1>AMC Style Store</h1>
            <p class="lead lead-lg">Welcome to the AMC Style Store. Discover the latest products at incredible prices.
                <br> Don't forget to check our daily offers.</p>
            <a href="javascript:void(0)" class="btn btn-raised btn-white color-danger">
                <i class="zmdi zmdi-label"></i> Latest offers</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Filter List</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" id="Filters">
                            <h4 class="mb-1 no-mt">Furniture</h4>
                            <fieldset>
                                <div class="form-group no-mt">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=".smartphone"><span class="checkbox-material"></span> Table & Chair Set </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=".tablet"><span class="checkbox-material"></span> Table </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=".laptop"><span class="checkbox-material"></span> Chair </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=".accessory"><span class="checkbox-material"></span> Barstools </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=".accessory"><span class="checkbox-material"></span> Lounge </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=".accessory"><span class="checkbox-material"></span> Kitchen </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <h4 class="mb-1">Brand</h4>
                                <div class="form-group no-mt">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=".apple"><span class="checkbox-material"></span> IKEA </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=".microsoft"><span class="checkbox-material"></span> Pricerite </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=".samsung"><span class="checkbox-material"></span> Sofamark </label>
                                    </div>
                                </div>
                            </fieldset>
                            <button class="btn btn-danger btn-block no-mb mt-2" id="Reset">
                                <i class="zmdi zmdi-delete"></i> Clear Filters</button>
                        </form>
                        <form class="form-horizontal">
                            <h4>Sort by</h4>
                            <div class="form-group">
                                <div class="dropdown bootstrap-select form-control"><select id="SortSelect" class="form-control selectpicker" data-dropup-auto="false" tabindex="-98">
                                        <option value="random">Popular</option>
                                        <option value="price:asc">Price ASC</option>
                                        <option value="price:desc">Price DESC</option>
                                        <option value="date:asc">Release ASC</option>
                                        <option value="date:desc">Release DESC</option>
                                    </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" data-id="SortSelect" title="Popular"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Popular</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row" id="Container">
                    <div class="col-xl-4 col-md-6 mix laptop apple" data-price="1999.99" data-date="20160901" style="display: inline-block;" data-bound="">
                        <div class="card ms-feature">
                            <div class="card-body overflow-hidden text-center">
                                <a href="<?= Url::to(['site/shop-item']) ?>">
                                    <img src="/img/demo/products/m1.png" alt="" class="img-fluid center-block">
                                </a>
                                <h4 class="text-normal text-center">Sample Item</h4>
                                <p>Quibusdam aperiam tempora ut blanditiis cumque ab pariatur.</p>
                                <div class="mt-2">
                                    <span class="mr-2">
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </span>
                                    <span class="ms-tag ms-tag-success">$ 1999.99</span>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block btn-raised mt-2 no-mb">
                                    <i class="zmdi zmdi-shopping-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mix tablet apple" data-price="999.99" data-date="20160705" style="display: inline-block;" data-bound="">
                        <div class="card ms-feature">
                            <div class="card-body overflow-hidden text-center">
                                <a href="<?= Url::to(['site/shop-item']) ?>">
                                    <img src="/img/demo/products/m2.png" alt="" class="img-fluid center-block">
                                </a>
                                <h4 class="text-normal text-center">Sample Item</h4>
                                <p>Quibusdam aperiam tempora ut blanditiis cumque ab pariatur.</p>
                                <div class="mt-2">
                                    <span class="mr-2">
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                    </span>
                                    <span class="ms-tag ms-tag-success">$ 999.99</span>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block btn-raised mt-2 no-mb">
                                    <i class="zmdi zmdi-shopping-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mix accessory samsung" data-price="459.89" data-date="20160815" style="display: inline-block;" data-bound="">
                        <div class="card ms-feature">
                            <div class="card-body overflow-hidden text-center">
                                <a href="<?= Url::to(['site/shop-item']) ?>">
                                    <img src="/img/demo/products/m3.png" alt="" class="img-fluid center-block">
                                </a>
                                <h4 class="text-normal text-center">Sample Item</h4>
                                <p>Quibusdam aperiam tempora ut blanditiis cumque ab pariatur.</p>
                                <div class="mt-2">
                                    <span class="mr-2">
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </span>
                                    <span class="ms-tag ms-tag-success">$ 459.89</span>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block btn-raised mt-2 no-mb">
                                    <i class="zmdi zmdi-shopping-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mix accessory apple" data-price="769.99" data-date="20151014" style="display: inline-block;" data-bound="">
                        <div class="card ms-feature">
                            <div class="card-body overflow-hidden text-center">
                                <a href="<?= Url::to(['site/shop-item']) ?>">
                                    <img src="/img/demo/products/m4.png" alt="" class="img-fluid center-block">
                                </a>
                                <h4 class="text-normal text-center">Sample Item</h4>
                                <p>Quibusdam aperiam tempora ut blanditiis cumque ab pariatur.</p>
                                <div class="mt-2">
                                    <span class="mr-2">
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </span>
                                    <span class="ms-tag ms-tag-success">$ 769.99</span>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block btn-raised mt-2 no-mb">
                                    <i class="zmdi zmdi-shopping-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mix smartphone samsung" data-price="569.99" data-date="20151201" style="display: inline-block;" data-bound="">
                        <div class="card ms-feature">
                            <div class="card-body overflow-hidden text-center">
                                <a href="<?= Url::to(['site/shop-item']) ?>">
                                    <img src="/img/demo/products/m5.png" alt="" class="img-fluid center-block">
                                </a>
                                <h4 class="text-normal text-center">Sample Item</h4>
                                <p>Quibusdam aperiam tempora ut blanditiis cumque ab pariatur.</p>
                                <div class="mt-2">
                                    <span class="mr-2">
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </span>
                                    <span class="ms-tag ms-tag-success">$ 569.99</span>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block btn-raised mt-2 no-mb">
                                    <i class="zmdi zmdi-shopping-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mix laptop microsoft" data-price="2499.25" data-date="20161205" style="display: inline-block;" data-bound="">
                        <div class="card ms-feature">
                            <div class="card-body overflow-hidden text-center">
                                <a href="<?= Url::to(['site/shop-item']) ?>">
                                    <img src="/img/demo/products/m1.png" alt="" class="img-fluid center-block">
                                </a>
                                <h4 class="text-normal text-center">Sample Item</h4>
                                <p>Quibusdam aperiam tempora ut blanditiis cumque ab pariatur.</p>
                                <div class="mt-2">
                                    <span class="mr-2">
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </span>
                                    <span class="ms-tag ms-tag-success">$ 2499.25</span>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block btn-raised mt-2 no-mb">
                                    <i class="zmdi zmdi-shopping-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mix smartphone apple" data-price="769.00" data-date="20160907" style="display: inline-block;" data-bound="">
                        <div class="card ms-feature">
                            <div class="card-body overflow-hidden text-center">
                                <a href="<?= Url::to(['site/shop-item']) ?>">
                                    <img src="/img/demo/products/m2.png" alt="" class="img-fluid center-block">
                                </a>
                                <h4 class="text-normal text-center">Sample Item</h4>
                                <p>Quibusdam aperiam tempora ut blanditiis cumque ab pariatur.</p>
                                <div class="mt-2">
                                    <span class="mr-2">
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </span>
                                    <span class="ms-tag ms-tag-success">$ 769.00</span>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block btn-raised mt-2 no-mb">
                                    <i class="zmdi zmdi-shopping-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mix accessory samsung" data-price="819.00" data-date="20160725" style="display: inline-block;" data-bound="">
                        <div class="card ms-feature">
                            <div class="card-body overflow-hidden text-center">
                                <a href="<?= Url::to(['site/shop-item']) ?>">
                                    <img src="/img/demo/products/m5.png" alt="" class="img-fluid center-block">
                                </a>
                                <h4 class="text-normal text-center">Sample Item</h4>
                                <p>Quibusdam aperiam tempora ut blanditiis cumque ab pariatur.</p>
                                <div class="mt-2">
                                    <span class="mr-2">
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star color-warning"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </span>
                                    <span class="ms-tag ms-tag-success">$ 2499.25</span>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block btn-raised mt-2 no-mb">
                                    <i class="zmdi zmdi-shopping-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>