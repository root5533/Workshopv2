<html>
<head>
    <title>Electrical(Building) - Job Confirmation</title>
    <?php require_once 'head.php'; ?>
</head>
<body>
<?php require_once 'navbar_top.php'; ?>

<div class="container-fluid">
    <div class="row-content">
        <div class="col-sm-2 sidebar-offcanvas" id="left-nav" role="navigation">
            <ul class="nav">
                <li class="active"><a href="#">Status</a></li>
                <li><a href="job_request.php">Job Request</a></li>
                <li><a href="job_confirmation.php">Job Confirmation</a></li>
                <li><a href="building_stock.php">Stock Request</a></li>
                <li><a href="close_building_job.php">Close Job Entry</a></li>
            </ul>
        </div>
        <div class="col-sm-8 text-left" id="main-body" style="margin-bottom: 100px">
            <div class="form-horizontal">
                <h2>Job Confirmation</h2>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Building_Name">Building Name</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Buiding_Name" placeholder="Type here">
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Address">Address</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Address" placeholder="Type here">
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Description">Description</div>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="Description" style="height: 120px" placeholder="Type here"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Contact_Number">Contact Number</div>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="Contact_Number" placeholder="07X XXX XXXX">
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Confirmation">Confirmation</div>
                    <div class="col-sm-6">
                        <input type="radio" id="Confirmation" value="Done">Done &nbsp;&nbsp;
                        <input type="radio" id="Confirmation" value="Not Done">Not Done
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2"></div>
                    <div class="col-sm-6">
                        <button type="button">Save</button>&nbsp;&nbsp;
                        <button type="button">Reset</button>
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
                    <span class="pull-right">-></i></i></span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="panel panel-danger" style="margin-top: 20px">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6"><div>VIP Tasks</div></div>
                        <div class="col-sm-6"><div class="pull-right" style="font-size: xx-large">7</div></div>
                    </div>
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right">-></i></span>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 100px;"></div>
        </div>
    </div>
</div>

<?php require_once 'foot.php' ?>
</body>
</html>