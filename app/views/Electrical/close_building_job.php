<html>
<head>
    <title>Electrical(Building) - Close Job Entry</title>
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
                <h2>Close Job Entry</h2>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Job Number">Job Number</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Job Number" placeholder="Type here">
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Comment">Comment</div>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="Comment" placeholder="Type here" style="height: 120px"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2"></div>
                    <div class="col-sm-6">
                        <button type="button">Close Job</button>&nbsp;&nbsp;
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
