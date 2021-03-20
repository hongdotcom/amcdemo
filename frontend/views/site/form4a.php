<?php ?>
<div class="ms-hero-page-override ms-hero-img-airplane ms-bg-fixed ms-hero-bg-dark-light">
    <div class="container">
        <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">
                Form <?= $refno ?> - 
                Ready stands Fascia board acknowledgement / Showcase and shelving options
            </h1>
            <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">
                Form 4a must be returned by exhibitor before proceeding to other forms.
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="card card-primary card-hero animated fadeInUp animation-delay-7">
        <div class="card-body">
            <form class="form-horizontal">

                <h2>FASCIA BOARD ACKNOWLEDGEMENT</h2>

                <p>Fascia Board (Company Name and stand number) will be printed as provided on your Contract for Exhibition Space. No other name will be accepted. No logo-types or house-styles permitted.</p>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"><span class="checkbox-material"></span>
                        <span class="ml-2"> I acknowledge the above information will be printed on my stand's fascia.</span>
                    </label>
                </div>

                <h2>SHOWCASES AND DISPLAY OPTIONS<br>
                    <small>(All Ready Stand Exhibitors must complete this section.) </small>
                </h2>            
                <fieldset>
                    <div class="row form-group">
                        <label for="inputGen" class="col-md-2 control-label">Showcase option </label>
                        <div class="col-md-9">
                            <div class="dropdown bootstrap-select form-control">
                                <select id="showcase_option" class="form-control selectpicker" tabindex="-98">
                                    <option>OPTION A (Tall showcase)</option>
                                    <option>OPTION B (Table showcase) </option>
                                    <option>OPTION A (Tall showcase) and OPTION B (Table showcase)</option>
                                    <option>we do not need any showcase and shall forfeit this item</option>
                                </select>
                            </div>
                        </div>

                        <label for="inputGen" class="col-md-2 control-label">Display Option</label>
                        <div class="col-md-9">
                            <div class="dropdown bootstrap-select form-control">
                                <select id="display_option" class="form-control selectpicker" tabindex="-98">
                                    <option>OPTION C1 (Free Standing Slat Wall) - Flat Shelf </option>
                                    <option>OPTION C2 (Free Standing Slat Wall) - Slope Shelf</option>
                                    <option>OPTION C3 (Free Standing Slat Wall) - Hooks</option>
                                    <option>Option D (Pegboard)</option>
                                    <option>We do not need any Slat wall or Pegboard and shall forfeit this items.</option>
                                </select>
                            </div>
                        </div>

                        <label for="inputDate" class="col-md-2 control-label">Date</label>
                        <div class="col-md-9">
                            <input id="datePicker" type="text" class="form-control" placeholder="yyyy-mm-dd"> 
                        </div>

                        <div class="row row mt-2">
                            <div class="offset-lg-2 col-lg-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"><span class="checkbox-material"></span>
                                        <span class="ml-2"> I acknowledge the above information will be printed on my stand's fascia.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <button class="btn btn-raised btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>

            <h4 class="text-danger">Late submission of Form may result in Showcase and Display Options not being available, in which case Showcase Option A (Tall showcase) and Option C1 (Flat Shelf for Slat Wall) will be supplied.</h4>

            <h4 class="text-danger">This content was restricted to submit ONCE, if changes are required please contact Ms Grace Lam: grace.lam@arconmarketing.com</h4>
        </div>
    </div>
</div>
