<?php

require 'script.php';

echo "<div class='col-sm-2 sidebar-offcanvas' id='left_nav' role='navigation' style='padding: 0px;'>
            <ul class='nav'>
                <li id='left_nav_item_1' onclick='onClickLeftSideNavBarItem(this.id)'><a href='$base_url/maintenance/load_view/status'>Status</a></li>
                <li id='left_nav_item_2' onclick='onClickLeftSideNavBarItem(this.id)'><a href='$base_url/maintenance/load_view/driver_reg'>Driver Registration</a></li>
                <li id='left_nav_item_3' onclick='onClickLeftSideNavBarItem(this.id)'><a href='$base_url/maintenance/load_view/vehicle_reg'>Vehicle Registration</a></li>
                <li id='left_nav_item_4' onclick='onClickLeftSideNavBarItem(this.id)'><a href='$base_url/maintenance/load_view/vehicle_entry'>Vehicle Entry Record</a></li>
                <li id='left_nav_item_5' onclick='onClickLeftSideNavBarItem(this.id)'><a href='$base_url/maintenance/load_view/open_job'>Open Job Entry</a></li>
                <li id='left_nav_item_6' onclick='onClickLeftSideNavBarItem(this.id)'><a href='$base_url/maintenance/load_view/assign_sup'>Assign Supervisor</a></li>
                <li id='left_nav_item_7' onclick='onClickLeftSideNavBarItem(this.id)'><a href='$base_url/maintenance/load_view/stock_req'>Stock Request</a></li>
                <li id='left_nav_item_8' onclick='onClickLeftSideNavBarItem(this.id)'><a href='$base_url/maintenance/load_view/close_job'>Close Job Entry</a></li>
                <li id='left_nav_item_9' onclick='onClickLeftSideNavBarItem(this.id)'><a href='$base_url/maintenance/load_view/issue_gate'>Issue GatePass</a></li>
            </ul>
        </div>";
