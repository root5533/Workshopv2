<?php

echo
    "
<nav class='w3-sidebar w3-collapse w3-white w3-animate-left' style='z-index:3;width:300px;' id='mySidebar'><br>
    <div class='w3-container'>
        <a href='#' onclick='w3_close()' class='w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey' title='close menu'>
            <i class='fa fa-remove'></i>
        </a>
        <img src='" . $base_url . "/images/cmc_logo.png' style='width:45%;margin-left: 70px;' class='w3-round'><br><br>
        <h4><b>CMC WorkShop Management System</b></h4>
    </div>
    <div class='w3-bar-block'>
        <button class='w3-button w3-large w3-block w3-teal' style=''><a href='remain_stocks.php' onclick='w3_close()' class='w3-bar-item w3-button w3-padding w3-large'><i class='fa fa-th-large fa-fw w3-margin-right'></i>Remain Stocks</a></button>
        <button class='w3-button w3-large w3-block' style=''><a href='summary_chart_new.php' onclick='w3_close()' class='w3-bar-item w3-button w3-padding w3-large'><i class='fa fa-th-large fa-fw w3-margin-right'></i>Summary</a></button>
    </div>
    
</nav>

";