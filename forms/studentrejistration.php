<!-- <div class="main-panel">
    <div class="content-wrapper"> -->
<style>
    .ch {
        margin-top: 33px;

    }
</style>
<?php //include('includes/config.php'); ?>
<form action="functions/functions.php" method="POST" id="studentrejister">
    <div class="container">
        <div class="row">
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="student_name" id="stName" value="" />
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputEmail1" class="form-label">Father Name</label>
                <input type="text" class="form-control" name="father_name" id="stfName" />
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputEmail1" class="form-label">Mother Name</label>
                <input type="text" class="form-control" name="mother_name" id="stmName" />
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="stEmail" />
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Contact No</label>
                <input type="text" class="form-control" name="mobile" id="stMobile" />
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Roll No</label>
                <input type="text" class="form-control" name="roll_no" id="stRollNo" />
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Class</label>
                <input type="text" class="form-control" name="section" id="stClass" />
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Admission</label>
                <input type="text" class="form-control" name="addmission_date" id="stAddmission" />
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Aahdar</label>
                <input type="text" class="form-control" name="aadhar_no" id="stAadhar" />
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Family Id</label>
                <input type="text" class="form-control" name="ppp" id="ppp" />
                <input type="hidden" name="studentrejister" />
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <?php $sql = "SELECT id,name FROM vaccination WHERE status = 1 AND is_deleted = 1";
                    $result = $conn->query($sql); 
                    ?>
                <label for="exampleInputPassword1" class="form-label">Vacecine</label>
                <select class="form-control sel" name="vaccination_id" id="vacsId">
                    <option value="">--Select Vaccination--</option>
                    <?php if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                    <?php }
                    } ?>
                    <!-- <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option> -->
                </select>
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <!-- <ul> -->
                <div class="form-check ch">
                    <label class="form-check-label">
                        <input class="checkbox" name="positive_status" type="checkbox" id="everPosiitive" />
                        Ever Positive
                    </label>
                </div>
                <!-- <i class="remove ti-close"></i> -->
                <!-- </ul> -->
            </div>

        </div>
    </div>
    <div class=" mb-3 col-md-6 col-lg-6 justify-content-center">
        <button type="submit" class="btn btn-primary  justify-content-center" id="submitNewRecords">Save changes</button>
        <button type="button" class="btn btn-secondary  justify-content-center" id="studentClose">Close</button>
    </div>
    </div>
    </div>
</form>
</div>
</div>