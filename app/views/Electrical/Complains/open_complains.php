<!DOCTYPE>

<html>

<?php require_once 'head.php'; ?>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<?php require_once 'side_bar_so.php'; ?>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:300px">

    <?php require_once 'top_bar_so.php'; ?>

    <div class="w3-container w3-padding-large">
        <h2><b>Open Complains</b></h2>
        <?php
        if (isset($data['message'])) {
            echo "<h4 style='color: green;'>" . $data['message'] . "</h4>";
        } ?>
    </div>

    <div class="w3-row-padding">
        <div class="w3-container w3-margin-bottom">
            <div class="w3-container w3-white w3-padding-large">
                <div class="row-content">
                    <h3>Open Complains</h3>
                    <div class="col-sm-8" style="padding-top: 10px;">
                        <form action=<?php echo "$base_url/Electrical/open_complains" ?> method="post">
                            <div class="form-group">
                                <label for="street_lamp_number">Street Lamp Number</label>
                                <input type="text" class="form-control" id="street_lamp_number" placeholder="Type here" name="street_lamp_number"
                                    <?php if (isset($data['street_lamp_number'])) {echo "value='"; print_r($data['street_lamp_number']); echo "'";} ?>>
                                <?php
                                if(isset($error['street_lamp_number_error'])) {
                                    echo "<div class='' style='color: indianred'>" . $error['street_lamp_number_error'] . "</div>";
                                } ?>
                            </div>
                            <div class="form-group">
                                <label for="road">Road</label>
                                <input class="form-control" type="text" id="road" placeholder="Type here" name="road"
                                    <?php if (isset($data['road'])) {echo "value='"; print_r($data['road']); echo "'";} ?>>
                                <?php if(isset($error['road_error'])) {
                                    echo "<div class='' style='color: indianred'>" . $error['road_error'] . "</div>";
                                } ?>
                            </div>
                            <div class="form-group">
                                <label for="complain_date_time">Complain Date & Time</label>
                                <input class="form-control" type="text" id="complain_date_time" placeholder="Type here" name="complain_date_time"
                                    <?php if (isset($data['complain_date_time'])) {echo "value='"; print_r($data['complain_date_time']); echo "'";} ?>>
                                <?php if(isset($error['complain_date_time_error'])) {
                                    echo "<div class='' style='color: indianred'>" . $error['complain_date_time_error'] . "</div>";
                                } ?>
                            </div>
                            <div class="form-group">
                                <label for="assigned_person">Assigned Person</label>
                                <input class="form-control" type="text" id="assigned_person" placeholder="Type here" name="assigned_person"
                                    <?php if (isset($data['assigned_person'])) {echo "value='"; print_r($data['assigned_person']); echo "'";} ?>>
                                <?php if(isset($error['assigned_person_error'])) {
                                    echo "<div class='' style='color: indianred'>" . $error['assigned_person_error'] . "</div>";
                                } ?>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="w3-button w3-teal" name="submit">Submit</button>
                                <button type="reset" class="w3-button w3-teal">Reset Form</button>
                            </div>
                        </form>
                    </div>
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
</script>


</html>