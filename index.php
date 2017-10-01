<!DOCTYPE html>
<html lang="en">
<head>
    <title>CMC Home</title>
    <?php require_once 'head.php'; ?>
</head>
<body>

<!--<script>-->
<!--    $(document).ready(function(){-->
<!--        var height = Math.max(height);-->
<!--        $("#main_body").height($(document).height());-->
<!--        $("#left_nav").height($(document).height());-->
<!--        $("#right_nav").height($(document).height());-->
<!--    });-->
<!--</script>-->

<!--navigation bar start-->
<?php require_once 'navbar_top.php'; ?>
<!--navigation bar end-->

<div class="jumbotron">
    <div class="row">
        <div class="col-md-3">
            <img src="images/cmc_logo.png" class="img-responsive" alt="CMC" width="160" height="250" style="margin: auto">
        </div>
        <div class="col-md-9">
            <h1>Colombo Municipal Council</h1>
            <h2>Workshop Management System</h2>
        </div>
    </div>
</div>

<!--left side navbar start-->
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav" id="left_nav">
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
        </div>
<!--left side navbar end-->

<!--middle body start-->
        <div class="col-sm-8 text-left" id="main_body" style="margin-bottom: 100px">
            <h1>Welcome to CMC Workshop</h1>
            <p id="demo">Right here</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <hr>
            <h3>Test</h3>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <p>Lorem ipsum...</p>
            <div style="padding-bottom: 50px;"></div>

        </div>
<!--middle body end-->

<!--right navbar start-->
        <div class="col-sm-2 sidenav" id="right_nav">
            <!--            <div class="well">-->
            <!--                <p>ADS</p>-->
            <!--            </div>-->
            <!--            <div class="well">-->
            <!--                <p>ADS</p>-->
            <!--            </div>-->
        </div>

    </div>
</div>
<!--right navbar end-->

<?php require_once 'foot.php' ?>

</body>
</html>
