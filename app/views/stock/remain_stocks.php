<!DOCTYPE>

<html>

<?php require_once 'head.php'; ?>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<?php require_once 'side_bar.php'; ?>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:300px">

    <?php require_once 'top_bar.php'; ?>

    <div class="w3-container w3-padding-large">
        <h2><b>Remain Stock Details</b></h2>
        <?php
        if (isset($data['message'])) {
            echo "<h4 style='color: green;'>" . $data['message'] . "</h4>";
        } ?>
    </div>

    <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
            <div class="w3-container w3-white" style="height: 250px">
                <div class="w3-container w3-teal" style="height: 30px; text-align: center">Item Name</div>
                <div class="w3-container w3-white" style="text-align: center">Remain</div>
            </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
            <div class="w3-container w3-white" style="height: 250px">
                <div class="w3-container w3-teal" style="height: 30px; text-align: center">Item Name</div>
                <div class="w3-container w3-white" style="text-align: center">Remain</div>
            </div>
        </div>
        <div class="w3-third w3-container">
            <div class="w3-container w3-white" style="height: 250px">
                <div class="w3-container w3-teal" style="height: 30px; text-align: center">Item Name</div>
                <div class="w3-container w3-white" style="text-align: center">Remain</div>
            </div>
        </div>
    </div>

    <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
            <div class="w3-container w3-white" style="height: 250px">
                <div class="w3-container w3-teal" style="height: 30px; text-align: center">Item Name</div>
                <div class="w3-container w3-white" style="text-align: center">Remain</div>
            </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
            <div class="w3-container w3-white" style="height: 250px">
                <div class="w3-container w3-teal" style="height: 30px; text-align: center">Item Name</div>
                <div class="w3-container w3-white" style="text-align: center">Remain</div>
            </div>
        </div>
        <div class="w3-third w3-container">
            <div class="w3-container w3-white" style="height: 250px">
                <div class="w3-container w3-teal" style="height: 30px; text-align: center">Item Name</div>
                <div class="w3-container w3-white" style="text-align: center">Remain</div>
            </div>
        </div>
    </div>

    <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
            <div class="w3-container w3-white" style="height: 250px">
                <div class="w3-container w3-teal" style="height: 30px; text-align: center">Item Name</div>
                <div class="w3-container w3-white" style="text-align: center">Remain</div>
            </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
            <div class="w3-container w3-white" style="height: 250px">
                <div class="w3-container w3-teal" style="height: 30px; text-align: center">Item Name</div>
                <div class="w3-container w3-white" style="text-align: center">Remain</div>
            </div>
        </div>
        <div class="w3-third w3-container">
            <div class="w3-container w3-white" style="height: 250px">
                <div class="w3-container w3-teal" style="height: 30px; text-align: center">Item Name</div>
                <div class="w3-container w3-white" style="text-align: center">Remain</div>
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
</script>


</html>