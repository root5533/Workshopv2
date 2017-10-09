<html>

<head>
    <title>Production - Assign Supervisor</title>
    <?php require_once '../head.php'; ?>
</head>
<?php require_once '../navbar_top.php'; ?>

<body>
<div class="container-fluid">
    <div class="row-content">
<?php require "left_pro_navbar.php"; ?>

        <div class="col-sm-8 text-left" id="main_body" style="margin-bottom: 100px">
            <div class="form-horizontal">
                <h2>Close Job Entry</h2>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="job_number">Job Number</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="job_number" placeholder="Type here">

                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="comment">Comment</div>
                    <div class="col-sm-6">
                        <textarea class="form-control" rows="5"  id="comment"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-sm-2" for="contact"></div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-info">Close</button>
                        <button type="button" class="btn btn-info">Reset</button>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>

</body>
</html>