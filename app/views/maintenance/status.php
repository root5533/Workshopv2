<html>
<head>
    <title>Maintenance - Status</title>
    <?php require_once 'head.php'; ?>
</head>
<body>

<?php require_once 'navbar_top.php'; ?>

<div class="container-fluid">
    <div class="row-content">
        <?php require 'left_navbar.php';?>
        <div class="col-sm-10 text-left" id="main_body" style="margin-bottom: 100px">
            <div class="panel panel-primary" style="margin-top: 20px">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6"><div>Pending Tasks</div></div>
                        <div class="col-sm-6"><div class="pull-right" style="font-size: xx-large">19</div></div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-left"></span>
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
                    <span class="pull-left"></span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="panel panel-warning" style="margin-top: 20px">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6"><div>Assigned Tasks</div></div>
                        <div class="col-sm-6"><div class="pull-right" style="font-size: xx-large">7</div></div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-left"></span>
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