<?php

echo
"
    <header id='portfolio'>
        <a href='#'><img src='/w3images/avatar_g2.jpg' style='width:65px;' class='w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity'></a>
        <span class='w3-button w3-hide-large w3-xxlarge w3-hover-text-grey' onclick='w3_open()'><i class='fa fa-bars'></i></span>
        <div class='w3-container'>
            <h1><b>Maintenance Department</b></h1>
                       
            
            <div class='w3-section w3-bottombar w3-padding-16'>
            <div class='w3-dropdown-hover' style='width: 20%;'>
                <button class='w3-button w3-teal w3-large' style='width: 100%;'>Select</button>
                <div class='w3-dropdown-content w3-bar-block w3-card-4 w3-large' style='width: 100%'>
                  <a href='$base_url/maintenance/load_view/status' class='w3-bar-item w3-button'>Status</a>
                  <a href='$base_url/maintenance/load_view/driver' class='w3-bar-item w3-button'>Driver</a>
                  <a href='$base_url/maintenance/load_view/vehicle' class='w3-bar-item w3-button'>Vehicle</a>
                  <a href='$base_url/maintenance/load_view/job' class='w3-bar-item w3-button'>Job</a>
                  <a href='$base_url/maintenance/load_view/stock' class='w3-bar-item w3-button'>Stock</a>
                  <a href='$base_url/maintenance/load_view/gate' class='w3-bar-item w3-button'>Gatepass</a>
                </div>
            </div>
            </div>
        </div>
    </header>
    
";