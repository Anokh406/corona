<!-- <div class="main-panel">
    <div class="content-wrapper"> -->

    <form action="functions/functions.php" method="POST" id="updateStudent">
    <div class="container">
        <div class="row">
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="sname" class="form-label">Name</label>
                <input type="text" class="form-control" name="student_name" id="sname">
            </div>
            <!-- <div class="mb-3 col-md-6 col-lg-6">
                <label for="fname" class="form-label">Father Name</label>
                <input type="text" class="form-control"name="father_name" id="fname">
            </div> -->
            <!-- <div class="mb-3 col-md-6 col-lg-6">
                <label for="mName" class="form-label">Mother Name</label>
                <input type="text" class="form-control" name="mother_name"id="mName">
            </div> -->
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control"name="email" id="email">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="mobile" class="form-label">Contact No</label>
                <input type="text" class="form-control"name="mobile" id="mobile">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="roll_no" class="form-label">Roll No</label>
                <input type="text" class="form-control"name="roll_no" id="roll_no">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="addmission" class="form-label">Admission</label>
                <input type="text" class="form-control" name="addmission_date" id="addmission">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="aadhar" class="form-label">Aahdar</label>
                <input type="text" class="form-control"name="aadhar_no" id="aadhar">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <?php $sql = "SELECT id,name FROM vaccination WHERE status = 1 AND is_deleted = 1";
                    $result = $conn->query($sql); 
                    ?>
                <label for="vaccineId" class="form-label">Vacecine</label>
                <select class="form-control" name="vaccineId" id="vaccineId">
                    <option value="">--Select Vaccination--</option>
                    <?php if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                    <?php }
                    } ?>
                </select>
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <!-- <ul> -->
                    <div class="form-check ch">
                        <label class="form-check-label">
                            <input class="checkbox" name="current_status" type="checkbox" id="currentStatusStatusUpdate">
                            Current Status
                        </label>
                    </div>
                    <!-- <i class="remove ti-close"></i> -->
                <!-- </ul> -->
            </div>
            <div class=" mb-3 col-md-6 col-lg-6 justify-content-center">
                <input type="hidden" name="updateStudent" id="updateStudent" value="">
                <button type="submit" class="btn btn-primary" name="updateStudentBtn" >Save changes</button>
                <button type="button" class="btn btn-secondary "id="close" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>