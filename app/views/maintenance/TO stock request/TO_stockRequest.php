<!DOCTYPE>

<html>

<?php require_once 'head.php'; ?>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<?php require_once 'side_bar.php'; ?>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:300px">

    <?php require_once 'top_bar.php'; ?>

    <div class="w3-container w3-padding-large">
        <h2><b>Stock Request</b></h2>
        <?php
        if (isset($data['message'])) {
            echo "<h4 style='color: green;'>" . $data['message'] . "</h4>";
        } ?>
    </div>

    <div class="w3-row-padding">
        <div class="w3-container w3-margin-bottom">
            <div class="w3-container w3-white w3-padding-large">
                <div class="row-content">
                    <h3>Material Stock Request Form</h3>
                    <div class="col-sm-8" style="padding-top: 10px;">
                        <form action=<?php echo " " ?> method="post">
                            <div class="form-group">
                                <label for="JobID">Job ID for which the stock is requested</label>
                                <input type="text" class="form-control" id="JobID" placeholder="Type here" name="jobID"
                                    <?php if (isset($data['name'])) {echo "value='"; print_r($data['jobID']); echo "'";} ?>>
                                <?php
                                if(isset($error['name_error'])) {
                                    echo "<div class='' style='color: indianred'>" . $error['name_error'] . "</div>";
                                } ?>
                            </div>
                            <div class="form-group">
                                <label for="TOname">Name of Technical officer</label>
                                <input class="form-control" type="text" id="TOname" placeholder="Type here" name="TOname"
                                    <?php if (isset($data['name'])) {echo "value='"; print_r($data['TOname']); echo "'";} ?>>
                                <?php if(isset($error['TOname_error'])) {
                                    echo "<div class='' style='color: indianred'>" . $error['TOname_error'] . "</div>";
                                } ?>
                            </div>

	                        <div class="form-group">
		                        <label for="dateWanted">Date wanted</label>
		                        <input class="form-control" type="date" id="dateWanted" name="dateWanted"
			                        <?php if (isset($data['name'])) {echo "value='"; print_r($data['dateWanted']); echo "'";} ?>>
		                        <?php if(isset($error['dateWanted_error'])) {
			                        echo "<div class='' style='color: indianred'>" . $error['dateWanted_error'] . "</div>";
		                        } ?>
	                        </div>

	                        <div class="form-group">
                            <table class="w3-table w3-bordered">
	                            <tr>
		                            <th style="text-align:center;">Item</th>
		                            <th style="text-align:center;">Item Description</th>
		                            <th style="text-align:center;">Quantity</th>
		                            <th style="text-align:center;">Remarks</th>
	                            </tr>
	                            <tr>
	                                <td>
		                            <input class="form-control" type="text" id="item" placeholder="Type here" name="item"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['item']); echo "'";} ?>>
		                            <?php if(isset($error['item_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['item_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
		                            <input class="form-control" type="text" id="itemDesc" placeholder="Type here" name="itemDesc" size="50"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['itemDesc']); echo "'";} ?>>
		                            <?php if(isset($error['itemDesc_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['itemDesc_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
		                            <input class="form-control" type="number"  id="quantity" placeholder="00" name="quantity" style="width:60px;"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['quantity']); echo "'";} ?>>
		                            <?php if(isset($error['quantity_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['quantity_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
<!--		                            <input class="form-control" type="text" id="remarks" placeholder="Type here" name="remarks"-->
		                            <textarea cols="40" rows="1" class="form-control" id="remarks" placeholder="Type here" name="remarks" style="height:35px;"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['remarks']); echo "'";} ?>></textarea>
		                            <?php if(isset($error['remarks_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['remarks_error'] . "</div>";
		                            } ?>
	                                </td>
	                            </tr>
	                            <tr>
	                                <td>
		                            <input class="form-control" type="text" id="item" placeholder="Type here" name="item"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['item']); echo "'";} ?>>
		                            <?php if(isset($error['item_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['item_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
		                            <input class="form-control" type="text" id="itemDesc" placeholder="Type here" name="itemDesc" size="50"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['itemDesc']); echo "'";} ?>>
		                            <?php if(isset($error['itemDesc_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['itemDesc_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
		                            <input class="form-control" type="number"  id="quantity" placeholder="00" name="quantity" style="width:60px;"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['quantity']); echo "'";} ?>>
		                            <?php if(isset($error['quantity_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['quantity_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
<!--		                            <input class="form-control" type="text" id="remarks" placeholder="Type here" name="remarks"-->
		                            <textarea cols="40" rows="1" class="form-control" id="remarks" placeholder="Type here" name="remarks" style="height:35px;"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['remarks']); echo "'";} ?>></textarea>
		                            <?php if(isset($error['remarks_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['remarks_error'] . "</div>";
		                            } ?>
	                                </td>
	                            </tr>
	                            <tr>
	                                <td>
		                            <input class="form-control" type="text" id="item" placeholder="Type here" name="item"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['item']); echo "'";} ?>>
		                            <?php if(isset($error['item_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['item_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
		                            <input class="form-control" type="text" id="itemDesc" placeholder="Type here" name="itemDesc" size="50"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['itemDesc']); echo "'";} ?>>
		                            <?php if(isset($error['itemDesc_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['itemDesc_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
		                            <input class="form-control" type="number"  id="quantity" placeholder="00" name="quantity" style="width:60px;"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['quantity']); echo "'";} ?>>
		                            <?php if(isset($error['quantity_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['quantity_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
<!--		                            <input class="form-control" type="text" id="remarks" placeholder="Type here" name="remarks"-->
		                            <textarea cols="40" rows="1" class="form-control" id="remarks" placeholder="Type here" name="remarks" style="height:35px;"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['remarks']); echo "'";} ?>></textarea>
		                            <?php if(isset($error['remarks_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['remarks_error'] . "</div>";
		                            } ?>
	                                </td>
	                            </tr>
	                            <tr>
	                                <td>
		                            <input class="form-control" type="text" id="item" placeholder="Type here" name="item"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['item']); echo "'";} ?>>
		                            <?php if(isset($error['item_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['item_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
		                            <input class="form-control" type="text" id="itemDesc" placeholder="Type here" name="itemDesc" size="50"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['itemDesc']); echo "'";} ?>>
		                            <?php if(isset($error['itemDesc_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['itemDesc_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
		                            <input class="form-control" type="number"  id="quantity" placeholder="00" name="quantity" style="width:60px;"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['quantity']); echo "'";} ?>>
		                            <?php if(isset($error['quantity_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['quantity_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
<!--		                            <input class="form-control" type="text" id="remarks" placeholder="Type here" name="remarks"-->
		                            <textarea cols="40" rows="1" class="form-control" id="remarks" placeholder="Type here" name="remarks" style="height:35px;"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['remarks']); echo "'";} ?>></textarea>
		                            <?php if(isset($error['remarks_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['remarks_error'] . "</div>";
		                            } ?>
	                                </td>
	                            </tr>
	                            <tr>
	                                <td>
		                            <input class="form-control" type="text" id="item" placeholder="Type here" name="item"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['item']); echo "'";} ?>>
		                            <?php if(isset($error['item_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['item_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
		                            <input class="form-control" type="text" id="itemDesc" placeholder="Type here" name="itemDesc" size="50"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['itemDesc']); echo "'";} ?>>
		                            <?php if(isset($error['itemDesc_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['itemDesc_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
		                            <input class="form-control" type="number"  id="quantity" placeholder="00" name="quantity" style="width:60px;"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['quantity']); echo "'";} ?>>
		                            <?php if(isset($error['quantity_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['quantity_error'] . "</div>";
		                            } ?>
	                                </td>

	                                <td>
<!--		                            <input class="form-control" type="text" id="remarks" placeholder="Type here" name="remarks"-->
		                            <textarea cols="40" rows="1" class="form-control" id="remarks" placeholder="Type here" name="remarks" style="height:35px;"
			                            <?php if (isset($data['name'])) {echo "value='"; print_r($data['remarks']); echo "'";} ?>></textarea>
		                            <?php if(isset($error['remarks_error'])) {
			                            echo "<div class='' style='color: indianred'>" . $error['remarks_error'] . "</div>";
		                            } ?>
	                                </td>
	                            </tr>

                            </table>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="w3-button w3-teal" name="submit">Send for Approval</button>
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