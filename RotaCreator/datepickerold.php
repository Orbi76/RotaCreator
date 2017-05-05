<?php
/**
 * Created by PhpStorm.
 * User: Orbi
 * Date: 21/04/2017
 * Time: 08:38
 */

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/RotaCreator/header.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/RotaCreator/class.dbconnection.php";
include_once($path);

include_once("navbar.php");

?>
<div class="bootstrap-iso">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-6">

                <!-- Form code begins -->
                <form method="post" class="form-inline">
                    <div class="form-group"> <!-- Date input -->
                        <div class='input-group date' id='startdate'>
                            <label for="startdate">Start Date</label>
                            <input class="form-control" id="startdate" name="startdate" placeholder="MM/DD/YYY"
                                   type="text"/>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                        </div>
                    </div>

                        <script type="text/javascript">
                            $(function () {
                                $('#startdate').datetimepicker();
                            });
                        </script>


                        <div class="container">
                            <label for="startdate">Start Date</label>
                            <div class="row">

                                <div class='col-sm-2'>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control"/>
                                            <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function () {
                                        $('#datetimepicker1').datetimepicker();
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="form-group"> <!-- Submit button -->
                            <button class="btn btn-primary " name="submitdate" type="submit">Submit</button>
                        </div>
                </form>
                <!-- Form code ends -->

            </div>
        </div>
    </div>
</div>

