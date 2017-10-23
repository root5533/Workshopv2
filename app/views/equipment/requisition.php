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
                <h2>Requisition</h2>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="date"> Date</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="date" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="section">Section</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="section" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="estimate">Estimate</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="estimate" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="job_no">Job No </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="job_no" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="description">Description </div>
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