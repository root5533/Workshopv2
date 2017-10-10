<html>

<head>
    <title>Production - Stock Request</title>
    <?php require_once '../head.php'; ?>
</head>
<?php require_once '../navbar_top.php'; ?>

<body>
<div class="container-fluid">
    <div class="row-content">
<?php require "left_pro_navbar.php"; ?>

        <div class="col-sm-8 text-left" id="main_body" style="margin-bottom: 100px">
            <div class="form-horizontal">
                <h2>Stock Request</h2>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="job_number">Job Number</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="job_number" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="item_no">Item Number</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="item_no" placeholder="Type here">
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="item_name">Item Name</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="item_name" placeholder="Type here">
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
    </div>

</div>

</body>
</html>
