<?php ?>

<section class="ms-component-section">
    <h2 class="section-title">Form 2a</h2>
    <div class="alert alert-info">
        <p>
            <i class="zmdi zmdi-info-outline"></i> This is just a sample of the form fields. You can view completed forms in the
            <strong>Pages section</strong>.</p>
    </div>
    <form class="form-horizontal" autocomplete="off">
        <fieldset>
            <legend>Legend</legend>
            <div class="form-group row is-empty">
                <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email"> </div>
            </div>
            <div class="form-group row is-empty">
                <label for="inputPassword" autocomplete="new-password" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password"> </div>
            </div>
            <div class="form-group row justify-content-end row" style="margin-top: 0;">
                <!-- inline style is just to demo custom css to put checkbox below input above -->
                <div class="col-lg-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"><span class="checkbox-material"></span> Checkbox </label>
                        <label>
                            <input type="checkbox" disabled=""><span class="checkbox-material"><span class="check"></span></span> Disabled Checkbox </label>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end row">
                <div class="col-lg-10">
                    <div class="togglebutton">
                        <label>
                            <input type="checkbox" checked=""><span class="toggle"></span> Toggle button </label>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end is-empty is-fileinput">
                <label for="inputFile" class="col-lg-2 control-label">File</label>
                <div class="col-lg-10">
                    <input type="text" readonly="" class="form-control" placeholder="Browse...">
                    <input type="file" id="inputFile" multiple=""> </div>
            </div>
            <div class="form-group row justify-content-end is-empty">
                <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                    <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <label class="col-lg-2 control-label">Radios</label>
                <div class="col-lg-10">
                    <div class="radio radio-primary">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="circle"></span><span class="check"></span> Option one is this </label>
                    </div>
                    <div class="radio radio-primary">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><span class="circle"></span><span class="check"></span> Option two can be something else </label>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <label for="select111" class="col-lg-2 control-label">Select</label>
                <div class="col-lg-10">
                    <div class="dropdown bootstrap-select form-control"><select id="select111" class="form-control selectpicker" data-dropup-auto="false" tabindex="-98">
                            <option>Ea nam qui vel consequatur</option>
                            <option>Dolorem perspiciatis adipisci </option>
                            <option>Aperiam, debitis deleniti</option>
                            <option>Accusamus non qui amet eum</option>
                            <option>Doloremque commodi impedit</option>
                        </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" data-id="select111" title="Ea nam qui vel consequatur"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Ea nam qui vel consequatur</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <label for="select112" class="col-lg-2 control-label">Select with Search</label>
                <div class="col-lg-10">
                    <div class="dropdown bootstrap-select form-control"><select id="select112" class="form-control selectpicker" data-live-search="true" data-dropup-auto="false" tabindex="-98">
                            <option>Ea nam qui vel consequatur</option>
                            <option>Dolorem perspiciatis adipisci </option>
                            <option>Aperiam, debitis deleniti</option>
                            <option>Accusamus non qui amet eum</option>
                            <option>Doloremque commodi impedit</option>
                        </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" data-id="select112" title="Ea nam qui vel consequatur"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Ea nam qui vel consequatur</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <label for="select222" class="col-lg-2 control-label">Select Multiple</label>
                <div class="col-lg-10">
                    <div class="dropdown bootstrap-select show-tick form-control"><select id="select222" multiple="" class="selectpicker form-control" data-dropup-auto="false" tabindex="-98">
                            <option>Ea nam qui vel consequatur</option>
                            <option>Dolorem perspiciatis adipisci </option>
                            <option>Aperiam, debitis deleniti</option>
                            <option>Accusamus non qui amet eum</option>
                            <option>Doloremque commodi impedit</option>
                        </select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="select222" title="Nothing selected"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                </div>
            </div>
            <div class="form-group row justify-content-end is-empty">
                <label for="datePicker" class="col-lg-2 control-label">Date Picker</label>
                <div class="col-lg-10">
                    <input id="datePicker" type="text" class="form-control"> </div>
            </div>
            <div class="form-group row justify-content-end">
                <label for="datePicker" class="col-lg-2 control-label">Slider</label>
                <div class="col-lg-10">
                    <div style="max-width: 160px">
                        <div class="slider slider-horizontal" id="ex1Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 50%;"></div><div class="slider-track-high" style="right: 0px; width: 50%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 50%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">5</div></div><div class="tooltip tooltip-min top" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max top" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="10" aria-valuenow="5" style="left: 50%;" tabindex="0"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="10" aria-valuenow="0" tabindex="0" style="left: 0%;"></div></div><input class="ms-slider" data-slider-id="ex1Slider" type="text" data-slider-focus="true" data-value="5" value="5" style="display: none;"> </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-lg-10">
                    <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </fieldset>
    </form>
</section>

<section class="ms-component-section">
    <h2 class="section-title">More Options</h2>
    <div class="form-group label-floating is-empty">
        <label class="control-label" for="focusedInput1">Write something to make the label float</label>
        <input class="form-control" id="focusedInput1" type="text"> </div>
    <div class="form-group label-floating is-empty">
        <label class="control-label" for="focusedInput2">Focus to show the help-block</label>
        <input class="form-control" id="focusedInput2" type="text">
        <p class="help-block">You should really write something here</p>
    </div>
    <div class="form-group is-empty">
        <label class="control-label" for="disabledInput">Disabled input</label>
        <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled=""> </div>
    <div class="form-group has-warning is-empty">
        <label class="control-label" for="inputWarning">Input warning</label>
        <input type="text" class="form-control" id="inputWarning"> </div>
    <div class="form-group has-error is-empty">
        <label class="control-label" for="inputError">Input error</label>
        <input type="text" class="form-control" id="inputError"> </div>
    <div class="form-group has-success is-empty">
        <label class="control-label" for="inputSuccess">Input success</label>
        <input type="text" class="form-control" id="inputSuccess"> </div>
    <div class="form-group form-group-lg is-empty">
        <label class="control-label" for="inputLarge">Large input</label>
        <input class="form-control" type="text" id="inputLarge"> </div>
    <div class="form-group is-empty">
        <label class="control-label" for="inputDefault">Default input</label>
        <input type="text" class="form-control" id="inputDefault"> </div>
    <div class="form-group form-group-sm is-empty">
        <label class="control-label" for="inputSmall">Small input</label>
        <input class="form-control" type="text" id="inputSmall"> </div>
    <div class="form-group is-empty">
        <label class="control-label" for="addon1">Default label w/input addons</label>
        <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" id="addon1" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Button</button>
            </span>
        </div>
    </div>
    <div class="form-group label-floating is-empty">
        <div class="input-group">
            <span class="input-group-addon">$</span>
            <label class="control-label" for="addon3a">Floating label w/2 addons</label>
            <input type="text" id="addon3a" class="form-control">
            <p class="help-block">The label is inside the <code>input-group</code> so that it is positioned properly as a placeholder.</p>
            <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-fab-mini">
                    <i class="material-icons">send</i>
                </button>
            </span>
        </div>
    </div>
    <div class="form-group label-floating is-empty">
        <label class="control-label" for="addon2">Floating label w/right addon</label>
        <div class="input-group">
            <input type="text" id="addon2" class="form-control">
            <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-fab-mini">
                    <i class="material-icons">functions</i>
                </button>
            </span>
        </div>
    </div>
    <div class="form-group is-empty is-fileinput">
        <input type="file" id="inputFile4" multiple="">
        <div class="input-group">
            <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
            <span class="input-group-btn input-group-sm">
                <button type="button" class="btn btn-fab btn-fab-mini">
                    <i class="material-icons">attach_file</i>
                </button>
            </span>
        </div>
    </div>
</section>
