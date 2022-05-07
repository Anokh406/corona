<?php if (isset($_SESSION['loggedin']) !== true) {
    echo header('location:./login.php');
    exit;
} ?>
<div class="main-panel">
    <?php if (isset($_SESSION['profile-msg'])) {
        $profile_msg = $_SESSION['profile-msg'];  ?>
        <div class="alert alert-warning alert-fixed" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <span><?= $profile_msg ?></span>
        </div>
    <?php unset($_SESSION['profile-msg']);
    } ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome <?= $fname ?></h3>
                        <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
                    </div>
                    <!-- <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                    <a class="dropdown-item" href="#">January - March</a>
                                    <a class="dropdown-item" href="#">March - June</a>
                                    <a class="dropdown-item" href="#">June - August</a>
                                    <a class="dropdown-item" href="#">August - November</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3 shadow">
                        <form id="msform">
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Proxy</strong></li>
                                <li id="personal"><strong>Details</strong></li>
                                <li id="payment"><strong>Profile</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <fieldset>
                                <div class="form-group">
                                    <label>Single select box using select 2</label>
                                    <select class="js-example-basic-single w-100">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="AM">America</option>
                                        <option value="CA">Canada</option>
                                        <option value="RU">Russia</option>
                                    </select>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" />
                                    <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" />
                                    <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." />
                                    <label class="fieldlabels">Alternate Contact No.: *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*">
                                    <label class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic" accept="image/*">
                                </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="fs-title">Finish:</h2>
                                        </div>
                                    </div> <br><br>
                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container-fluid">
            <div class="row">
                <div class="account-first-explainer col-lg-12 col-sm-12 p-3 d-flex justify-content-between align-items-center">
                    <div class="accounts-title">
                        <h3>Add your account below</h3>
                    </div>
                    <div class="accounts-btn"><a href="index.php?add_account" class="btn btn-sm btn-add-account">Add Acccount</a></div>
                </div>
            </div>
        </div>
    </div>
</div>