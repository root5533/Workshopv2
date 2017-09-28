<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        .navbar-brand,
        .navbar-nav li a{
            line-height: 100px;
            height: 100px;
            padding-top: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        /*.row.content {}*/

        /* Set gray background color and 100% height */
        /*.sidenav {*/
            /*padding-top: 20px;*/
            /*background-color: #f1f1f1;*/

        /*}*/

        /*.col-sm-8 {*/
            /*min-height: 100%;*/
        /*}*/

        /* Set black background color, white text and some padding */
        /*footer {*/
            /*background-color: #555;*/
            /*color: white;*/
            /*padding: 15px;*/
        /*}*/
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom:: 60px;
            font-size: medium;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #f5f5f5;
        }

        .jumbotron {
            /*background: url("images/pic1.jpg") center repeat;*/
        }

        @media screen and (max-width: 48em) {
            .jumbotron h1,h2 {
                font-size: x-large;
                text-align: center;
            }

            body h1 {
                font-size: x-large;
            }
            .navbar-brand,
            .navbar-nav li a{
                line-height: 50px;
                height: 50px;
                padding-top: 0;
            }
        }


        /* On small screens, set height to 'auto' for sidenav and grid */
        /*@media screen and (max-width: 767px) {*/
            /*.sidenav {*/

                /*padding: 15px;*/
            /*}*/
            /*.row.content {}*/
        /*}*/


    </style>
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
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header" style="height: 100%">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CMC Workshop</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-collapse">
                <li>&emsp;</li>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Maintenance</a></li>
                <li><a href="#">Equipment</a></li>
                <li><a href="#">Electrical</a></li>
                <li><a href="#">Production</a> </li>
                <li><a href="#">About</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>&ensp;Login</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&ensp;LogOut</a></li>
            </ul>
        </div>
    </div>
</nav>
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
        <div class="col-sm-8 text-left" id="main_body">
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

<footer class="footer">
    <p style="padding-top: 5px; text-align: center;">Footer Text</p>
</footer>

</body>
</html>
