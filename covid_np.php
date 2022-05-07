<style>
    .hide {
        display: none;
    }

    .icon,
    .details-control {
        cursor: pointer;
    }

    .covidCheck a {
        color: #fff;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <h1 style="text-decoration: underline;">Total Covid Nagitive and Positive list </h1>
                        </div>
                        <div class="row justify-content-end ">
                            <button type="button" class="btn btn-primary mr-3 mb-4 covidCheck"><a href="javascript:void(0);">add new</a> </button>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>SR.no</th>
                                                <th>Name</th>
                                                <th>First Dose</th>
                                                <th>Second Dose</th>
                                                <!-- <th>Sem</th> -->
                                                <th>positive</th>
                                                <th>Recovered</th>
                                                <th>Product</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $inxc = 1;
                                            $query = "SELECT * FROM students JOIN vaccination ON students.vaccination_id=vaccination.id  WHERE students.is_deleted=1";
                                            // $query = "SELECT * FROM students_vaccine WHERE positive_status = 1 AND is_deleted=1";
                                            $exec = $conn->query($query);
                                            while ($row = $exec->fetch_assoc()) {
                                                // echo "<pre>";
                                                // print_r($row);
                                                // die;
                                            ?>
                                                <tr class="delid-<?= $row['id'] ?>">
                                                    <td><?= $inxc++ ?></td>
                                                    <td><?= $row['student_name'] ?></td>
                                                    <td><?= date("d-m-Y", strtotime($row['first_dose'])) ?></td>
                                                    <td><?= date("d-m-Y", strtotime($row['second_dose'])) ?></td>
                                                    <td><?= $row['positive_status'] == 1 ? "Yes" : "No" ?></td>
                                                    <td><?= $row['ever_positive'] == 1 ? "Yes" : "No" ?></td>
                                                    <td><?= $row['name'] ?></td>
                                                    <td class=""> </td>
                                                </tr>
                                                <tr class="hide delid-<?= $row['id'] ?>">
                                                    <td colspan="8">
                                                        <table cellpadding="5" cellspacing="0" border="0" style="width:100%;">
                                                            <tbody>
                                                                <tr class="expanded-row">
                                                                    <td colspan="8" class="row-bg">
                                                                        <div>
                                                                            <div class="d-flex justify-content-between covidNP">
                                                                                <div class="expanded-table-normal-cell">
                                                                                    <div class="mr-2 mb-4">
                                                                                        <p>NAME</p>
                                                                                        <h6 class="sName"><?= $row['student_name'] ?></h6>
                                                                                    </div>
                                                                                    <div class="mr-2">
                                                                                        <p>Mobile No</p>
                                                                                        <h6 class="mobile"><?= $row['mobile'] ?></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="expanded-table-normal-cell">
                                                                                    <div class="mr-2 mb-4">
                                                                                        <p>Father name</p>
                                                                                        <h6 class="fName"><?= $row['father_name'] ?></h6>
                                                                                    </div>
                                                                                    <div class="mr-2">
                                                                                        <p>Mother Name</p>
                                                                                        <h6 class="mName"><?= $row['mother_name'] ?></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="expanded-table-normal-cell">
                                                                                    <div class="mr-2 mb-4">
                                                                                        <p>Roll No</p>
                                                                                        <h6 class="roll_no"><?= $row['roll_no'] ?></h6>
                                                                                    </div>
                                                                                    <div class="mr-2">
                                                                                        <p>D.O.B</p>
                                                                                        <h6 class="dob"><?= date("d-m-Y", strtotime($row['birth'])) ?></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="expanded-table-normal-cell">
                                                                                    <div class="mr-2 mb-4">
                                                                                        <p>Gender</p>
                                                                                        <h6 class="gender"><?= $row['gender'] ?></h6>
                                                                                    </div>
                                                                                    <div class="mr-2">
                                                                                        <p>Category</p>
                                                                                        <h6 class="category"><?= $row['category'] ?></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="expanded-table-normal-cell">
                                                                                    <div class="mr-2 mb-4">
                                                                                        <p>Caste</p>
                                                                                        <h6 class="caste"><?= $row['caste'] ?></h6>
                                                                                    </div>
                                                                                    <div class="mr-2">
                                                                                        <p>Email</p>
                                                                                        <h6 class="email"><?= $row['email'] ?></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="expanded-table-normal-cell">
                                                                                    <div class="mr-2 mb-4">
                                                                                        <p>Admission Date</p>
                                                                                        <h6 class="admission_date"><?= $row['admission_date'] ?></h6>
                                                                                    </div>
                                                                                    <div class="mr-2">
                                                                                        <p>Address</p>
                                                                                        <h6 class="address"><?= $row['address'] ?></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="expanded-table-normal-cell">
                                                                                    <div class="mr-2 mb-4">
                                                                                        <p>District</p>
                                                                                        <h6 class="student_district_name"><?= $row['student_district_name'] ?></h6>
                                                                                    </div>
                                                                                    <div class="mr-2">
                                                                                        <p>Addhar No</p>
                                                                                        <h6 class="aadhar_no"><?= $row['aadhar_no'] ?></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="expanded-table-normal-cell">
                                                                                    <div class="mr-2 mb-4">
                                                                                        <p>Family Id</p>
                                                                                        <h6 class="ppp"><?= $row['ppp'] ?></h6>
                                                                                    </div>
                                                                                    <div class="mr-2">
                                                                                        <!-- <button type="submit" value="edit">edit</button> -->
                                                                                    </div>
                                                                                </div>
                                                                                <div class="expanded-table-normal-cell">
                                                                                    <div class="mr-2 mb-4">
                                                                                        <a href="javascript.void(0);" class="editStudentsCovidRecord" data-record_id="<?= $row['id'] ?>"><i class="ti-pencil-alt icon " value="update"></i></a>
                                                                                    </div>
                                                                                    <div class="mr-2">
                                                                                        <i class="ti-trash icon delete2" data-dell_id="<?= $row['id'] ?>"></i>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- model starts here -->
<div id="MyPopup" class="modal fade vaccineNew" role="dialog">
    <div class="modal-dialog modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title align-item-center">Update Data</h4>
            </div>
            <div class="modal-body">
                <?php include 'forms/updateCovidRecord.php' ?>
                <div class="modal-footer bg-white justify-content-center">
                    <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div id="covid_np" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title align-item-center">Update Data</h4>
            </div>
            <div class="modal-body bg-white justify-content-center">
                <?php include 'forms/newstudentsCovid.php' ?>
            </div>
        </div>
    </div>
</div>