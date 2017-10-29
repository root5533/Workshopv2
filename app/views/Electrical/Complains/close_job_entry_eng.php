<!DOCTYPE>

<html>

<?php require_once 'head.php'; ?>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<?php require_once 'side_bar_so.php'; ?>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:300px">

    <?php require_once 'top_bar_eng.php'; ?>

    <div class="w3-container w3-padding-large">
        <h2><b>Close Job Entry</b></h2>
        <?php
        if (isset($data['message'])) {
            echo "<h4 style='color: green;'>" . $data['message'] . "</h4>";
        } ?>
    </div>

    <div class="w3-row-padding">
        <div class="w3-container w3-margin-bottom">
            <div class="w3-container w3-white w3-padding-large">
                <div class="row-content">
                    <h3>Close Job Entry</h3>
                    <div class="col-sm-8" style="padding-top: 10px;">
                        <form action=<?php echo "$base_url/Electrical/close_job_entry_eng" ?> method="post">
                            <div class="form-group">
                                <label for="job_number">Job Number</label>
                                <input type="text" class="form-control" id="job_number" placeholder="Type here" name="job_number"
                                    <?php if (isset($data['job_number'])) {echo "value='"; print_r($data['job_number']); echo "'";} ?>>
                                <?php
                                if(isset($error['job_number_error'])) {
                                    echo "<div class='' style='color: indianred'>" . $error['job_number_error'] . "</div>";
                                } ?>
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <input class="form-control" type="text" id="comment" placeholder="Type here" name="comment"
                                    <?php if (isset($data['comment'])) {echo "value='"; print_r($data['comment']); echo "'";} ?>>
                                <?php if(isset($error['comment_error'])) {
                                    echo "<div class='' style='color: indianred'>" . $error['comment_error'] . "</div>";
                                } ?>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="w3-button w3-teal" name="close_job">Close Job</button>
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