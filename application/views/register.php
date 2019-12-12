<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Multiple step form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet"
        id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>

    <style type="text/css">
    .no-js .multi-step-form fieldset button,
    .no-js .multi-step-form h2,
    .multi-step-form.edit-form fieldset button,
    .multi-step-form.edit-form h2 {
        display: none !important;
    }

    .no-js .multi-step-form fieldset,
    .multi-step-form.edit-form fieldset {
        display: block !important;
    }

    .no-js .multi-step-form [type="submit"],
    .no-js .multi-step-form [type="reset"],
    .multi-step-form.edit-form [type="submit"],
    .multi-step-form.edit-form [type="reset"] {
        display: inline-block !important;
    }

    .no-js .multi-step-form .steps,
    .multi-step-form.edit-form .steps {
        display: none;
    }

    .multi-step-form fieldset {
        display: none;
    }

    .multi-step-form fieldset:first-of-type {
        display: block;
    }

    .multi-step-form fieldset.hidden {
        display: none;
    }

    .multi-step-form fieldset.visible {
        display: block;
    }

    .multi-step-form .steps button {
        border: 0;
    }

    .multi-step-form .steps [disabled] {
        background: none;
    }

    .multi-step-form .steps .fa-user [disabled] {
        color: #ccc;
    }

    .multi-step-form .steps .active {
        background: #eee;
        border-radius: 30px;
        width: 40px;
        height: 40px;
    }

    .multi-step-form button+button {
        margin-left: 10%;
    }

    body {
        padding: 1em;
        max-width: 35em;
        margin: 0 auto;
    }

    .error {
        color: red;
    }

    label .optional {
        font-weight: normal;
        font-size: 90%;
    }
    </style>
</head>

<body>
    <div class="container">
        <section class="multi-step-form col-lg-6">

            <h1>Multi-step form</h1>

            <div class="steps">
                <button class="active" type="button" disabled><i class='fa fa-user'></i></button>
                <button type="button" disabled><i class='fa fa-phone'></i></button>
                <button type="button" disabled><i class='fa fa-graduation-cap'></i></button>
            </div>

            <fieldset aria-label="Step One" tabindex="-1" id="step-1">
                <h3>Personal Details</h3>
                <hr />
                <form>
                    <div class='row'>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="fname"
                                placeholder="First Name" required="required" />
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="lname" name='lname'
                                placeholder="Last Name" required="required" />
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 input-group date has-feedback" id='myDatepicker2'>
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2"
                                placeholder="Data of birth" required="required" />
                            <span class="input-group-addon"><span class="fa fa-calendar form-control-feedback left"
                                    aria-hidden="true"></span></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback" style='margin-top: 7px;'>
                            <label class="col-md-2 col-sm-2 control-label">Gender
                                <small class="text-navy">*</small></label>
                            <input type="radio" value="Male" id="optionsRadios1" name="optionsRadios" checked> Male
                            <input type="radio" value="Female" id="optionsRadios2" name="optionsRadios"> Female
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="email" class="form-control has-feedback-left" id="inputSuccess4"
                                placeholder="Email" required="required" />
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess5" maxlength="10"
                                placeholder="+91">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="f_h_name" name='f_h_name'
                                maxlength="10" placeholder="Father's/Husband Name">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="occupation" name='occupation'
                                placeholder="Father's/Husband Cccupation">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="occupation" name='occupation'
                                placeholder="Nationality">
                            <span class="fa fa-flag form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="occupation" name='occupation'
                                placeholder="Religion">
                            <span class="fa fa-vihara form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <select class="form-control has-feedback-left" tabindex="-1">
                                <option>----- Select Community -----</option>
                                <option value="OC">OC</option>
                                <option value="BC">BC</option>
                                <option value="MBC">MBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                                <option value="PH">PH</option>
                            </select>
                            <span class="fa fa-bookmark form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="occupation" name='occupation'
                                maxlength="10" placeholder="Caste">
                            <span class="far fa-circle form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="occupation" name='occupation'
                                maxlength="10" placeholder="Mother Tonque">
                            <span class="fa fa-volume-up form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="occupation" name='occupation'
                                maxlength="10" placeholder="Native Place">
                            <span class="fa fa-map-marker-alt form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9">
                            <!-- <button type="button" class="btn btn-primary">Cancel</button>
														<button class="btn btn-primary" type="reset">Reset</button> -->
                            <button type="submit" data-toggle="tab" href="#communication"
                                class="btn btn-success">Next</button>
                        </div>
                    </div>
                    <p>
                        <button class="btn btn-default btn-next" type="button" aria-controls="step-2">Next</button>
                    </p>
                </form>

            </fieldset>

            <fieldset aria-label="Step Two" tabindex="-1" id="step-2">
                <h3>Education Details</h3>
                                            <hr/>
                                            <table class="table table-bordered" id="add_row">
                                                <thead>
                                                <th>S.No</th>
                                                <th>Degree</th> 
                                                <th>Subject</th>
                                                <th>College/University/Board</th>
                                                <th>Mode of Study (Regular/Correspondence)</th>
                                                <th>Affiliated University</th>
                                                <th>Year of Passing</th>
                                                <th> % </th>
                                                <thead>
                                                <tbody>
                                                <form class="form-inline" role="form" id="frmadd" action="<?php echo base_url() ?>create" method="POST">
                                                    <tr class="txtMult">
                                                        <td><input type="text" name="exp_id[]" class="form-control val1" id="exp_id" placeholder="" style="width:50px;" ></td>
                                                        <td><input type="text" name="college[]" class="form-control val2" id="college" placeholder="Enter College"></td>
                                                        <td><input type="text" name="university[]" id="university" class="form-control val3" placeholder="Enter University"/></td>
                                                        <td><input type="text" name="designation[]" id="designation" class="form-control val4" placeholder="Enter Designation" /></td>
                                                        <td><input type="text" name="doj[]" id='doj' class="form-control val5" placeholder="YYYY/MM/DD"/></td>
                                                        <td><input type="text" name="dol[]" id="dol" class="form-control val6" placeholder="YYYY/MM/DD"/></td>
                                                        <td><input type="text"name="yoj[]" id="yoj" class="form-control val7" placeholder="YYYY/MM/DD"/></td> 
                                                        <td><input type="text"name="perc[]" id="perc" class="form-control val8" placeholder="%" style="width:50px;"/></td>                                                        
                                                    </tr>
                                                </tbody>
                                             </table>
                                                <div class="form-group">
                                                    <input type="submit" id="create_data" class="btn btn-success" id="btn btn-success" value="Next">
                                                </div>                                                
                                            </form>
                                            <div class='text-center add-row'>                                                
                                                    <button id="insert-more" class="btn btn-sm btn-info float-right" type="">Add Row</button>
                                            </div>
                <p>
                    <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button>
                    <button class="btn btn-default btn-next" type="button" aria-controls="step-3">Next</button>
                </p>
            </fieldset>

            <fieldset aria-label="Step Three" tabindex="-1" id="step-3">
                <h2>Step Three</h2>
                <p>
                    <label for="message"></label>
                    <textarea class="form-control" rows="3" name="message" id="message" required></textarea>
                </p>
                <p>
                    <button class="btn btn-success" type="submit">Submit</button>
                    <button class="btn btn-default btn-edit" type="button">Edit</button>
                    <button class="btn btn-danger" type="reset">Start Over</button>
                </p>
            </fieldset>


        </section>


        <!-- 
HTML Requirements

1. Include .multi-step-form
2. Define parents e.g. fieldset
3. Each parent should own a unique ID with aria-label
4. Each next/prev button owns aria-controls which points to unique ID of parents
5. For validation each field should own required attribute

<section class="multi-step-form">
	<form>

		<fieldset aria-label="Step One" tabindex="-1" id="step-1">
			...
			<button class="btn-next" type="button" aria-controls="step-2">Next</button>
		</fieldset>

		<fieldset aria-label="Step Two" tabindex="-1" id="step-2">
			...
			<button class="btn-prev" type="button" aria-controls="step-1">Previous</button>
			<button class="btn-next" type="button" aria-controls="step-3">Next</button>
		</fieldset>

		<fieldset aria-label="Step Three" tabindex="-1" id="step-3">
			...
			<button type="submit">Submit</button>
			<button class="btn-edit" type="button">Edit</button>
			<button type="reset">Start Over</button>
		</fieldset>

	</form>
</section>
-->
    </div>

    <script>
    /**
     * @name Multi-step form - WIP
     * @description Prototype for basic multi-step form
     * @deps jQuery, jQuery Validate
     */

    var app = {

        init: function() {
            this.cacheDOM();
            this.setupAria();
            this.nextButton();
            this.prevButton();
            this.validateForm();
            this.startOver();
            this.editForm();
            this.killEnterKey();
            this.handleStepClicks();
        },

        cacheDOM: function() {
            if ($(".multi-step-form").size() === 0) {
                return;
            }
            this.$formParent = $(".multi-step-form");
            this.$form = this.$formParent.find("form");
            this.$formStepParents = this.$form.find("fieldset"),

                this.$nextButton = this.$form.find(".btn-next");
            this.$prevButton = this.$form.find(".btn-prev");
            this.$editButton = this.$form.find(".btn-edit");
            this.$resetButton = this.$form.find("[type='reset']");

            this.$stepsParent = $(".steps");
            this.$steps = this.$stepsParent.find("button");
        },

        htmlClasses: {
            activeClass: "active",
            hiddenClass: "hidden",
            visibleClass: "visible",
            editFormClass: "edit-form",
            animatedVisibleClass: "animated fadeIn",
            animatedHiddenClass: "animated fadeOut",
            animatingClass: "animating"
        },

        setupAria: function() {

            // set first parent to visible
            this.$formStepParents.eq(0).attr("aria-hidden", false);

            // set all other parents to hidden
            this.$formStepParents.not(":first").attr("aria-hidden", true);

            // handle aria-expanded on next/prev buttons
            app.handleAriaExpanded();

        },

        nextButton: function() {

            this.$nextButton.on("click", function(e) {

                e.preventDefault();

                // grab current step and next step parent
                var $this = $(this),
                    currentParent = $this.closest("fieldset"),
                    nextParent = currentParent.next();

                // if the form is valid hide current step
                // trigger next step
                if (app.checkForValidForm()) {
                    currentParent.removeClass(app.htmlClasses.visibleClass);
                    app.showNextStep(currentParent, nextParent);
                }

            });
        },

        prevButton: function() {

            this.$prevButton.on("click", function(e) {

                e.preventDefault();

                // grab current step parent and previous parent
                var $this = $(this),
                    currentParent = $(this).closest("fieldset"),
                    prevParent = currentParent.prev();

                // hide current step and show previous step
                // no need to validate form here
                currentParent.removeClass(app.htmlClasses.visibleClass);
                app.showPrevStep(currentParent, prevParent);

            });
        },

        showNextStep: function(currentParent, nextParent) {

            // hide previous parent
            currentParent
                .addClass(app.htmlClasses.hiddenClass)
                .attr("aria-hidden", true);

            // show next parent
            nextParent
                .removeClass(app.htmlClasses.hiddenClass)
                .addClass(app.htmlClasses.visibleClass)
                .attr("aria-hidden", false);

            // focus first input on next parent
            nextParent.focus();

            // activate appropriate step
            app.handleState(nextParent.index());

            // handle aria-expanded on next/prev buttons
            app.handleAriaExpanded();

        },

        showPrevStep: function(currentParent, prevParent) {

            // hide previous parent
            currentParent
                .addClass(app.htmlClasses.hiddenClass)
                .attr("aria-hidden", true);

            // show next parent
            prevParent
                .removeClass(app.htmlClasses.hiddenClass)
                .addClass(app.htmlClasses.visibleClass)
                .attr("aria-hidden", false);

            // send focus to first input on next parent
            prevParent.focus();

            // activate appropriate step
            app.handleState(prevParent.index());

            // handle aria-expanded on next/prev buttons
            app.handleAriaExpanded();

        },

        handleAriaExpanded: function() {

            /*
                Loop thru each next/prev button
                Check to see if the parent it conrols is visible
                Handle aria-expanded on buttons
            */
            $.each(this.$nextButton, function(idx, item) {
                var controls = $(item).attr("aria-controls");
                if ($("#" + controls).attr("aria-hidden") == "true") {
                    $(item).attr("aria-expanded", false);
                } else {
                    $(item).attr("aria-expanded", true);
                }
            });

            $.each(this.$prevButton, function(idx, item) {
                var controls = $(item).attr("aria-controls");
                if ($("#" + controls).attr("aria-hidden") == "true") {
                    $(item).attr("aria-expanded", false);
                } else {
                    $(item).attr("aria-expanded", true);
                }
            });

        },

        validateForm: function() {
            // jquery validate form validation
            this.$form.validate({
                ignore: ":hidden", // any children of hidden desc are ignored
                errorElement: "span", // wrap error elements in span not label
                invalidHandler: function(event, validator) { // add aria-invalid to el with error
                    $.each(validator.errorList, function(idx, item) {
                        if (idx === 0) {
                            $(item.element).focus(); // send focus to first el with error
                        }
                        $(item.element).attr("aria-invalid", true); // add invalid aria
                    })
                },
                submitHandler: function(form) {
                    alert("form submitted!");
                    // form.submit();
                }
            });
        },

        checkForValidForm: function() {
            if (this.$form.valid()) {
                return true;
            }
        },

        startOver: function() {

            var $parents = this.$formStepParents,
                $firstParent = this.$formStepParents.eq(0),
                $formParent = this.$formParent,
                $stepsParent = this.$stepsParent;

            this.$resetButton.on("click", function(e) {

                // hide all parents - show first
                $parents
                    .removeClass(app.htmlClasses.visibleClass)
                    .addClass(app.htmlClasses.hiddenClass)
                    .eq(0).removeClass(app.htmlClasses.hiddenClass)
                    .eq(0).addClass(app.htmlClasses.visibleClass);

                // remove edit state if present
                $formParent.removeClass(app.htmlClasses.editFormClass);

                // manage state - set to first item
                app.handleState(0);

                // reset stage for initial aria state
                app.setupAria();

                // send focus to first item
                setTimeout(function() {
                    $firstParent.focus();
                }, 200);

            }); // click

        },

        handleState: function(step) {

            this.$steps.eq(step).prevAll().removeAttr("disabled");
            this.$steps.eq(step).addClass(app.htmlClasses.activeClass);

            // restart scenario
            if (step === 0) {
                this.$steps
                    .removeClass(app.htmlClasses.activeClass)
                    .attr("disabled", "disabled");
                this.$steps.eq(0).addClass(app.htmlClasses.activeClass)
            }

        },

        editForm: function() {
            var $formParent = this.$formParent,
                $formStepParents = this.$formStepParents,
                $stepsParent = this.$stepsParent;

            this.$editButton.on("click", function() {
                $formParent.toggleClass(app.htmlClasses.editFormClass);
                $formStepParents.attr("aria-hidden", false);
                $formStepParents.eq(0).find("input").eq(0).focus();
                app.handleAriaExpanded();
            });
        },

        killEnterKey: function() {
            $(document).on("keypress", ":input:not(textarea,button)", function(event) {
                return event.keyCode != 13;
            });
        },

        handleStepClicks: function() {

            var $stepTriggers = this.$steps,
                $stepParents = this.$formStepParents;

            $stepTriggers.on("click", function(e) {

                e.preventDefault();

                var btnClickedIndex = $(this).index();

                // kill active state for items after step trigger
                $stepTriggers.nextAll()
                    .removeClass(app.htmlClasses.activeClass)
                    .attr("disabled", true);

                // activate button clicked
                $(this)
                    .addClass(app.htmlClasses.activeClass)
                    .attr("disabled", false)

                // hide all step parents
                $stepParents
                    .removeClass(app.htmlClasses.visibleClass)
                    .addClass(app.htmlClasses.hiddenClass)
                    .attr("aria-hidden", true);

                // show step that matches index of button
                $stepParents.eq(btnClickedIndex)
                    .removeClass(app.htmlClasses.hiddenClass)
                    .addClass(app.htmlClasses.visibleClass)
                    .attr("aria-hidden", false)
                    .focus();

            });

        }

    };

    app.init();
    </script>

</body>

</html>