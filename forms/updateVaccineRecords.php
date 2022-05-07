<!-- <div class="main-panel">
    <div class="content-wrapper"> -->

    <form action="functions/functions.php" method="POST" id="updateVaccineRwcords">
    <div class="container">
        <div class="row">
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputEmail1" class="form-label">company Name</label>
                <input type="text" class="form-control"name="company" id="company">
            </div>
            <!-- <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputEmail1" class="form-label">Mother Name</label>
                <input type="text" class="form-control" name="mother_name"id="mName">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control"name="email" id="email">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Contact No</label>
                <input type="number" class="form-control"name="mobile" id="mobile">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Roll No</label>
                <input type="number" class="form-control"name="roll_no" id="roll_no">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Class</label>
                <input type="text" class="form-control" name="section"id="class">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Admission</label>
                <input type="text" class="form-control" name="addmission_date"id="addmission">
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Aahdar</label>
                <input type="number" class="form-control"name="aadhar_no" id="aadhar">
            </div> -->
            <div class="mb-3 col-md-6 col-lg-6">
                <!-- <label for="exampleInputPassword1" class="form-label">Family Id</label>
                <input type="text" class="form-control"name="ppp" id="ppp"> -->
                <input type="hidden" name="updateVaccineRwcords">
                <input type="hidden" name="recordid" id="recordid">
            </div>
            <div class=" mb-3 col-md-6 col-lg-6 justify-content-center">
                <button type="submit" class="btn btn-primary" id="vaccinesave">Save changes</button>
                <button type="button" class="btn btn-secondary "id="close">Close</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>