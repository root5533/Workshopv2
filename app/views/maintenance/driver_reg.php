<html>
<head>
    <title>Maintenance - Driver Registration</title>
    <?php require_once 'head.php'; ?>
</head>
<body>

<?php require_once 'navbar_top.php'; ?>

<div class="container-fluid">
    <div class="row-content">


        <?php require 'left_navbar.php';?>
        <div class="col-sm-8 text-left" id="main_body" style="margin-bottom: 100px">
            <div class="form-horizontal">
                <h2>Driver Details</h2>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="name">Name (with initials)</div>
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
                    <div class="control-label col-sm-2" for="driver_license">Driver License</div>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="driver_license" placeholder="Type here">
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="address">Address</div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="address" placeholder="Type here">
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
                        <button type="button" class="btn btn-info">Reset Form</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 sidenav" id="right_nav">
            <div class="panel panel-primary" style="margin-top: 20px">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6"><div>Pending Tasks</div></div>
                        <div class="col-sm-6"><div class="pull-right" style="font-size: xx-large">19</div></div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right">-></i></span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="panel panel-danger" style="margin-top: 20px">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6"><div>VIP Tasks</div></div>
                        <div class="col-sm-6"><div class="pull-right" style="font-size: xx-large">7</div></div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right">-></i></span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div style="margin-bottom: 100px;"></div>
        </div>
    </div>
</div>

<?php require_once 'foot.php' ?>

</body>
</html>