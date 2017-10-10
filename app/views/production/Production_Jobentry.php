
<html>

<head>
    <title>Production - Open Job Entry</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

<?php require_once '../navbar_top.php'; ?>


<div class="container-fluid">
    <div class="row-content">
        <?php require "left_pro_navbar.php"; ?>
             <div class="col-sm-8 text-left" id="main_body" style="margin-bottom: 100px">
            <div class="form-horizontal">
                <h2>Open Job Entry</h2>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="name">Name</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" placeholder="Type here">
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="NIC">NIC</div>
                    <div class="control-label col-sm-6">
                        <input class="form-control" type="text" id="nic" placeholder="Type here">
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="job_description">Job Description</div>
                    <div class="col-sm-6">
                        <textarea class="form-control" rows="5"  id="comment"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="contact">Contact Number</div>
                    <div class="col-sm-6">
                        <input class="form-control" type="number" id="contact" placeholder="07X XXX XXXX">
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



<?php require_once '../foot.php' ?>
</body>
</html>

