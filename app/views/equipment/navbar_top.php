<?php

echo
"<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\" style='<!-- height: 100% -->'>
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.php\" style='align-content: center'>CMC Workshop</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav navbar-collapse\">
                <li>&emsp;</li>
                <li><a href='$base_url/home/index'>Home</a></li>
                                
                <li><a href='$base_url/home/load_view/maintenance'>Maintenance</a></li>
                
                <li class='active'><a href='$base_url/home/load_view/equipment'>Equipment</a></li>
                
                <li><a href='$base_url/home/load_view/electrical'>Electrical</a></li>
                
                <li><a href='$base_url/home/load_view/production'>Production</a> </li>
                
                <li><a href='#'>About</a> </li>
                
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span>&ensp;Login</a></li>
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-out\"></span>&ensp;LogOut</a></li>
            </ul>
        </div>
    </div>
</nav>";