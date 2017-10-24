<!DOCTYPE>

<html>

<?php require_once 'head.php'; ?>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<?php require_once 'side_bar.php'; ?>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:300px">

    <?php require_once 'top_bar.php'; ?>

    <div class="w3-container w3-padding-large">
        <h2><b>Vehicle</b></h2>
        <?php
        if (isset($data['message'])) {
            echo "<p style='color: green;'>" . $data['message'] . "</p>";
        } ?>
    </div>

    <div class="w3-row-padding">
        <div class="w3-container w3-margin-bottom">
            <div class="w3-container w3-white w3-padding-large">
                <div class="row-content">
                    <div class="w3-bar w3-teal w3-medium">
                        <button class="w3-bar-item w3-button" style="width: 50%;" onclick="openVehicleForm('vehicleReg')">Vehicle Registration</button>
                        <button class="w3-bar-item w3-button" style="width :50%;" onclick="openVehicleForm('vehicleEntry')">Vehicle Entry Log</button>

                    </div>
                </div>
                <div id="vehicleReg" class="w3-container vehicle">
                    <h3>Vehicle Registration</h3>
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>

                <div id="vehicleEntry" class="w3-container vehicle" style="display:none">
                    <h3>Vehicle Entry Log</h3>
                    <form action="#">
                        <div class="form-group">
                            <label for="name">Vehicle Registration Number</label>
                            <input type="text" class="form-control" id="name" placeholder="Type here">
                        </div>
                        <div class="form-group">
                            <button type="button" class="w3-button w3-teal">Submit</button>
                            <button type="button" class="w3-button w3-teal">Reset Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!--    --><?php //require_once 'footer.php'; ?>

</div>
</body>



<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    function openVehicleForm(vehicleForm) {
        var i;
        var x = document.getElementsByClassName("vehicle");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(vehicleForm).style.display = "block";
    }
</script>


</html>