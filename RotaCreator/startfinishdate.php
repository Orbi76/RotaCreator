<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/RotaCreator/header.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/RotaCreator/class.dbconnection.php";
include_once($path);

include_once("navbar.php");


if (isset($_POST['submitdate'])) {
    $startdate = $_POST['startdate'];

    echo $startdate;
}

if (isset($_POST['submitfinishdate'])) {
    $finishdate = $_POST['finishdate'];

    echo $finishdate;
}
?>

<script type="text/javascript">
    $(function () {
        $('#startdate').datetimepicker({
            //  language: "hu",
           //  weekStart: 1,
            format: 'DD/MM/YYYY',
            calendarWeeks: true,
            //     todayBtn: true
             //  startday: Monday
            //    viewMode: 'months'
            // startDate: '-3d'
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#finishdate').datetimepicker({
            //  language: "hu",
            // weekStart: 1,
            format: 'DD/MM/YYYY',
            calendarWeeks: true,
            //     todayBtn: true
             //   startday: Monday
            //    viewMode: 'months'
            // startDate: '-3d'
        });
    });
</script>

<!-- Form code begins -->
<form method="post" class="form-inline">


    <label for="startdate">Start Date</label>
    <div class="row">
        <div class='col-sm-2'>
            <div class="form-group">
                <div class='input-group date' id='startdate'>
                    <input type='text' name="startdate" class="form-control" id="startdate"/>
                    <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group"> <!-- Submit button -->
        <button class="btn btn-primary " name="submitdate" type="submit">Submit</button>
    </div>

</form>
<form method="post" class="form-inline">


    <label for="finishdate">Finish Date</label>
    <div class="row">
        <div class='col-sm-2'>
            <div class="form-group">
                <div class='input-group date' id='finishdate'>
                    <input type='text' name="finishdate" class="form-control" id="finishdate"/>
                    <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group"> <!-- Submit button -->
        <button class="btn btn-primary " name="submitfinishdate" type="submit">Submit</button>
    </div>

</form>



