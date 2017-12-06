<!DOCTYPE>

<html>
<head>
    <style>
        .container {
            width: 500px;
            margin: 20px;
            background: #fff;
            padding: 20px;
            overflow: hidden;
            float: left;
        }
        .vertical .progress-bar {
            float: left;
            height: 300px;
            width: 40px;
            margin-right: 25px;
        }

        .vertical .progress-track {
            position: relative;
            width: 40px;
            height: 100%;
            background: #ebebeb;
        }

        .vertical .progress-fill {
            position: relative;
            background: #825;
            height: 50%;
            width: 40px;
            color: #fff;
            text-align: center;
            font-family: "Lato","Verdana",sans-serif;
            font-size: 12px;
            line-height: 20px;
        }

        .rounded .progress-track,
        .rounded .progress-fill {
            box-shadow: inset 0 0 5px rgba(0,0,0,.2);
            border-radius: 3px;
        }

        .container table
        {
            padding: 0px;
            margin: 0px 4em 0px 4em;
            width: 80%;
        }

        .container table tr
        {
            padding: 0px;
            margin: 0px 4em 0px 4em;
        }

    </style>
</head>

<?php require_once 'head.php'; ?>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<?php require_once 'side_bar.php'; ?>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:300px">

    <?php require_once 'top_bar.php'; ?>

    <div class="w3-container w3-padding-large">
        <h2><b>Summary Of Stock Details</b></h2>
        <?php
        if (isset($data['message'])) {
            echo "<h4 style='color: green;'>" . $data['message'] . "</h4>";
        } ?>
    </div>

    <div class="container vertical rounded">
        <h2 align="center">Stock Summary</h2><br>
        <table>
            <tr>
                <td>
                    <div class="progress-bar">
                        <div class="progress-track">
                            <div class="progress-fill">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="progress-bar">
                        <div class="progress-track">
                            <div class="progress-fill">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="progress-bar">
                        <div class="progress-track">
                            <div class="progress-fill">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="progress-bar">
                        <div class="progress-track">
                            <div class="progress-fill">
                                <span>20%</span>
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="progress-bar">
                        <div class="progress-track">
                            <div class="progress-fill">
                                <span>34%</span>
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="progress-bar">
                        <div class="progress-track">
                            <div class="progress-fill">
                                <span>82%</span>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <br><span>Item1</span>
                </td>

                <td>
                    <br><span>Item2</span>
                </td>

                <td>
                    <br><span>Item3</span>
                </td>

                <td>
                    <br><span>Item4</span>
                </td>

                <td>
                    <br><span>Item5</span>
                </td>

                <td>
                    <br><span>Item6</span>
                </td>
            </tr>
        </table>
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

<script>
    $('.vertical .progress-fill span').each(function(){
        var percent = $(this).html();
        var pTop = 100 - ( percent.slice(0, percent.length - 1) ) + "%";
        $(this).parent().css({
            'height' : percent,
            'top' : pTop
        });
    });
</script>


</html>