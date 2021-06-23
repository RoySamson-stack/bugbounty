<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Add Bug Hunter</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Bug Hunter</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Hunter Detail:</div>
                <div class="panel-body">
                    <div class="emp-response"></div>
                    <form role="form" id="addEmployee" data-toggle="validator">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Staff</label>
                                <select class="form-control" id="staff_type" required data-error="Select Staff Type">
                                    <option selected disabled>Select Staff Type</option>
                                    <?php
                                    $query = "SELECT * FROM staff_type";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($staff = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $staff['staff_type_id'] . '">' . $staff['staff_type'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Shift</label>
                                <select class="form-control" id="shift" required data-error="Select Shift Type">
                                    <option selected disabled>Select Staff Type</option>
                                    <?php
                                    $query = "SELECT * FROM shift";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($shift = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $shift['shift_id'] . '">' . $shift['shift'] . ' - ' . $shift['shift_timing'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" id="first_name" required data-error="Enter First Name">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" id="last_name">
                            </div>

                          

                            <div class="form-group col-lg-6">
                                <label>ID Card No</label>
                                <input type="text" class="form-control" placeholder="ID Card No" id="id_card_no" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contact Number</label>
                                <input type="number" class="form-control" placeholder="Contact Number" id="contact_no" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>
                                    Hunter room</label>
                                <input type="number" class="form-control" placeholder="Room" id="salary" data-error="Enter Hunter room" required>
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                        <button type="reset" class="btn btn-lg btn-danger">Reset</button>
                    </form>
                </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-sm-12">
            <p class="back-link">BUG BOUNTY BY ROY </a></p>
        </div>
    </div>

</div>    




