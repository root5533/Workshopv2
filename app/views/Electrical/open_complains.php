<html>
<head>
    <title>Electrical(Street Lights) - Open Complains</title>
    <?php require_once 'head.php'; ?>
</head>
<body>
<?php require_once 'navbar_top.php'; ?>

<div class="container-fluid">
    <div class="row-content">
        <div class="col-sm-2 sidebar-offcanvas" id="left-nav" role="navigation">
            <ul class="nav">
                <li class="active"><a href="#">Status</a></li>
                <li><a href="open_complains.php">Open Complains</a></li>
                <li><a href="stock_request.php">Stock Request</a></li>
                <li><a href="close_job.php">Close Job Entry</a></li>
            </ul>
        </div>
        <div class="col-sm-8 text-left" id="main-body" style="margin-bottom: 100px">
            <div class="form-horizontal">
                <h2>Open Complains</h2>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Street_Lamp_Number">Street Lamp Number</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Street_Lamp_Number" placeholder="Type here">
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Road">Road</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Road" placeholder="Type here">
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Date_Time">Complain Date & Time</div>
                    <div class="col-sm-6">
                        <input type="datetime" class="form-control" id="Date_Time" placeholder="Type here">
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-2" for="Assigned_person">Assigned Person</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Assigned_person" placeholder="Type here">
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