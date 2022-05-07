<style>
    .hide {
        display: none;
    }

    .icon,
    .details-control {
        cursor: pointer;
    }

    .newstudent a {
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
                            <h1 style="text-decoration: underline;">Total students list </h1>
                        </div>
                        <div class="row justify-content-end ">
                            <button type="button" class="btn btn-primary mr-3 mb-4 newstudent">add new </button>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="studentsTable" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>SR.No</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Roll.No</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $inxc = 1;
                                            $query = "SELECT * FROM students WHERE students.is_deleted=1";//ORDER BY students.id DESC
                                            $exec = $conn->query($query);
                                            if ($exec->num_rows > 0) {
                                                while ($row = $exec->fetch_assoc()) {
                                            ?>
                                                    <tr class="upper_row delid-<?= $row['id'] ?>">
                                                        <td><?= $inxc++ ?></td>
                                                        <td><?= $row['student_name'] ?></td>
                                                        <td>BCA-2ND</td>
                                                        <td><?= $row['mobile'] ?></td>
                                                        <td><?= $row['email'] ?></td>
                                                        <td><?= $row['roll_no'] ?></td>
                                                        <td class="details-control"> </td>
                                                    </tr>
                                                    <tr class="target_row hide delid-<?= $row['id'] ?>">
                                                        <td colspan="8">
                                                            <table cellpadding="5" cellspacing="0" border="0" style="width:100%;">
                                                                <tbody>
                                                                    <tr class="expanded-row">
                                                                        <td colspan="8" class="row-bg">
                                                                            <div>
                                                                                <div class="d-flex justify-content-between viewStudents_data">
                                                                                    <div class="expanded-table-normal-cell">
                                                                                        <div class="mr-2 mb-4">
                                                                                            <p>NAME</p>
                                                                                            <h6 class="sName"><?= $row['student_name'] ?></h6>
                                                                                        </div>
                                                                                        <div class="mr-2">
                                                                                            <p>Mobile No</p>
                                                                                            <h6 class="mobile"><?= $row['mobile'] ?></h6>
                                                                                        </div>
                                                                                        <div class="mr-2">
                                                                                            <p>Vaccine Name</p>
                                                                                            <?php
                                                                                            $query2 = 'SELECT `name` FROM vaccination WHERE id='.$row["vaccination_id"].' LIMIT 1';//ORDER BY students.id DESC
                                                                                            $exec2 = $conn->query($query2);
                                                                                            $vacsName = '';
                                                                                            if ($exec2->num_rows > 0) {
                                                                                                while ($row2 = $exec2->fetch_assoc()) { $vacsName =  $row2['name'];}} ?>
                                                                                            <h6 class="vaccine_name" data-vacineid="<?= $row['vaccination_id'] ?>"><?= $vacsName ?></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="expanded-table-normal-cell">
                                                                                        <div class="mr-2 mb-4">
                                                                                            <p>Roll No</p>
                                                                                            <h6 class="roll_no"><?= $row['roll_no'] ?></h6>
                                                                                        </div>
                                                                                        <div class="mr-2">
                                                                                            <p>Gender</p>
                                                                                            <h6 class="gender"><?= $row['gender'] ?></h6>
                                                                                        </div>
                                                                                        <div class="mr-2">
                                                                                            <p>Ever Positive?</p>
                                                                                            <h6 class="vaccine_name" id="everPositiveStatus" data-everpositive="<?= $row['ever_positive'] ?>"><?= $row['ever_positive'] == 0 ? 'Yes' : 'No' ?></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="expanded-table-normal-cell">
                                                                                        <div class="mr-2 mb-4">
                                                                                            <p>Email</p>
                                                                                            <h6 class="email"><?= $row['email'] ?></h6>
                                                                                        </div>
                                                                                        <div class="mr-2">
                                                                                            <p>Admission Date</p>
                                                                                            <h6 class="admission_date"><?= date("d-m-Y", strtotime($row['admission_date'])) ?></h6>
                                                                                        </div>
                                                                                        <div class="mr-2">
                                                                                            <p>Current Status?</p>
                                                                                            <h6 class="vaccine_name" id="currentStatusStatus" data-currentstatus="<?= $row['positive_status'] ?>"><?= $row['positive_status'] == 1 ? 'Yes' : 'No' ?></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="expanded-table-normal-cell">
                                                                                        <div class="mr-2 mb-4">
                                                                                            <p>Address</p>
                                                                                            <h6 class="address"><?= $row['address'] ?></h6>
                                                                                        </div>
                                                                                        <div class="mr-2">
                                                                                            <p>Addhar No</p>
                                                                                            <h6 class="aadhar_no"><?= $row['aadhar_no'] ?></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="expanded-table-normal-cell">
                                                                                        <div class="mr-2 mb-4">
                                                                                            <a href="javascript.void(0);" class="editStudentsRecord" data-record_id="<?= $row['id'] ?>"><i class="ti-pencil-alt icon " value="update"></i></a>
                                                                                        </div>
                                                                                        <div class="mr-2">
                                                                                            <i class="ti-trash icon delete1" data-dell_id="<?= $row['id'] ?>"></i>
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
                                            <?php }
                                            } ?>
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
<!-- ---------model starts here--------- -->
<?php //include 'forms/studentrejistration.php' 
?>
<div id="MyPopup" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title align-item-center">Update Data</h4>
            </div>
            <div class="modal-body bg-white justify-content-center">
                <?php include 'forms/updateStudents.php' ?>
            </div>
        </div>
    </div>
</div>
<div id="rejister" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title align-item-center">Update Data</h4>
            </div>
            <div class="modal-body bg-white justify-content-center">
                <?php include 'forms/studentrejistration.php' ?>
            </div>
        </div>
    </div>
</div>