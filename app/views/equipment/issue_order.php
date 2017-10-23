<html>

<head>
    <title>Production - Assign Supervisor</title>
    <?php require_once 'head.php'; ?>
</head>
<?php require_once 'navbar_top.php'; ?>

<body>
<div class="container-fluid">
    <div class="row-content">
        <?php require "left_navbar.php"; ?>

        <div class="col-sm-8 text-left" id="main_body" style="margin-bottom: 100px">
            <div class="form-horizontal">
                <h2>Issue Order</h2>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="Department">Department</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Department" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="Job_no">Job No</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Job_no" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="head_name">Head of Department</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="head_name" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="Date">Date</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Date" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="ledger">Ledger Code</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ledger" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="description">Description</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="description" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="quantity">Quantity</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="quantity" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="value">Value</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="value" placeholder="Type here">
                    </div>
                </div>

            <div class="form-group">
                <div class="control-label col-sm-2" for="contact"></div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-info">Reset</button>
                </div>
            </div>
        </div>
    </div>




</body>
</html>