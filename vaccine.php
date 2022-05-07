<style>
    .hide {
        display: none;
    }

    .icon,
    .details-control {
        cursor: pointer;
    }

    i {
        font-size: 20px;
    }

    .update {
        color: lightgray;
    }

    .vaccine-1 a {
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
                            <h1 style="text-decoration: underline;">Total vaccination list </h1>
                        </div>
                        <div class="row justify-content-end ">
                            <button type="button" class="btn btn-primary mr-3 mb-4 nav-link vaccine-1"><a class="vaccinestudent" href="javascript:void(0);">add new</a> </button>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="" Action="function.php" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Name</th>
                                                <th>company Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $inxc = 1;
                                            $query = "SELECT * FROM vaccination WHERE status=1";
                                            $exec = $conn->query($query);
                                            while ($row = $exec->fetch_assoc()) {
                                            ?>
                                                <tr class="delid-<?= $row['id'] ?>">
                                                    <td><?= $inxc++ ?></td>
                                                    <td class="v_name"><?= $row['name'] ?></td>
                                                    <td class="v_company"><?= $row['company'] ?></td>
                                                    <td class="">
                                                        <div class="mr-2 mb-4" style="float: left;">
                                                            <a href="javascript.void(0);" class="editRecord" data-record_id="<?= $row['id'] ?>"><i class="ti-pencil-alt icon  update" value="update"></i></a>
                                                        </div>
                                                        <div class="mr-2">
                                                            <i class="ti-trash icon delete" data-dell_id="<?= $row['id'] ?>"></i>
                                                        </div>
                                                        <div style="clear: both;"></div>
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
        <!-- Modal -->
        <!-- Modal Popup -->
        <div id="MyPopup" class="modal fade" role="dialog">
            <div class="modal-dialog modal-xl">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title align-item-center">Update Data</h4>
                    </div>
                    <div class="modal-body">
                        <?php include 'forms/updateVaccine.php' ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="updateVaccineRecords" class="modal fade" role="dialog">
            <div class="modal-dialog modal-xl">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title align-item-center">Update Data</h4>
                    </div>
                    <div class="modal-body bg-white justify-content-center">
                        <?php include 'forms/updateVaccineRecords.php' ?>
                    </div>
                </div>
            </div>
        </div>