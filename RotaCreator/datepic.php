<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/RotaCreator/header.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/RotaCreator/class.dbconnection.php";
include_once($path);

include_once("navbar.php");


if (isset($_POST['submitstartdate'])) {
    $ez = "ezt";
    $date = $_POST['startdate'];
    echo "Hellodate";
    $givenstartdate = $_POST['submitstartdate'];
    echo $givenstartdate;
    echo "<br/>";
    echo $ez;
    echo $date;
 print_r($_POST);
}


?>

<!--
<head>
    <script src="js/bootstrap-datepicker.min.js"></script>
</head>

<body>

</body>
</html>
-->

<div class="container">
    <form method="post" class="form-inline">
        <div class="form-group">
            <div class="input-group">

            <span class="input-group-addon">Give the start date : </span>


            <div class='input-group date' id='startdate'>

                <input type='text' name="startdate" class="form-control" id="startdate"/>
                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
        </div>

</div>

        <script type="text/javascript">
            $(function () {
                $('#startdate').datepicker({
                    format: 'dd/mm/yyyy',
                    language: "hu",
                    weekStart: 1,
                    todayBtn: true,
                    calendarWeeks: true,
                    todayHighlight: true
                });
            });
        </script>

        <!-- Submit button -->
        <button class="btn btn-primary " name="submitstartdate" id="submitstartdate" type="submit">Submit</button>


    </form>
</div>