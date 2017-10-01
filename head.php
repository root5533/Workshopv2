<?php

echo
"<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
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
            /*background: url(\"images/pic1.jpg\") center repeat;*/
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


    </style>";