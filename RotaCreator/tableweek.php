<?php
session_start();
$_SESSION['user_id'] = '1';

include_once 'header.php';
//echo date('Y-m-d', strtotime($row['date']));


include_once 'datepicker.php';
//include_once 'datepic.php';


if(isset($_POST['submitdate'])){
    $ezdat = $_POST['startdate'];

}


if(isset($_GET['chooseee'])) {
    $cho = $_GET['id'];
 //   echo $cho;
    $db_connection = new dbConnection();
    $link = $db_connection->connect();
// Fetch timting from the database
    $query = $link->query("SELECT * FROM employee WHERE employee_number='$cho'");
    $query->setFetchMode(PDO::FETCH_ASSOC);

 /*   //Check the connection
        if ($db_connection->connect_error) {
            die("Connection failed: " . $db_connection->connect_error);
        }
        echo "Connected successfully in GetEmployeeInfo";
*/

    while ($result = $query->fetch()) {
        if (empty($first)){
            $first = $result['first_name'] .' '. $result['last_name'];
        }
        elseif (empty($second)){
            $second = $result['first_name'] .' '. $result['last_name'];
        }

        $third = $result['last_name'].' '. $result['first_name'];
        $fourth = $result['4'];
        $fifth = $result['fifth'];
        $sixth = $result['sixth'];
        $seventh = $result['seventh'];
        $eight = $result['eight'];
    //    print_r: $result;
    }


}



?>

<body>
<div class="col-lg-6"><div class="jumbotron">
<div class="Table">
    <div class="Title">
        <p><? echo "Today is " . date("d/m/Y") . "<br>"; ?></p>
        <p><?php echo $fname;?> Time Table</p>
        <p>The Rota start datum is: <?php echo date('d-M-Y', strtotime($ezdat.' + 0 days'));?></p>

    </div>
   <div class="jumbotron">
    <div class="Heading">
        <div class="Cell">
            <p>Date</p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($ezdat.' + 0 days'));?>  </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($ezdat. ' + 1 days'));?>  </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($ezdat. ' + 2 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($ezdat. ' + 3 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($ezdat. ' + 4 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($ezdat. ' + 5 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($ezdat. ' + 6 days')); ?> </p>
        </div>


    </div><div class="Heading">
        <div class="Cell">
            <p>Name/Day</p>
        </div>
        <div class="Cell">
            <p>  Mon  </p>
        </div>
        <div class="Cell">
            <p>  Tue  </p>
        </div>
        <div class="Cell">
            <p>  Wed  </p>
        </div>
        <div class="Cell">
            <p>  Thr  </p>
        </div>
        <div class="Cell">
            <p>  Fri  </p>
        </div>
        <div class="Cell">
            <p>  Sat  </p>
        </div>
        <div class="Cell">
            <p>  Sun  </p>
        </div>

    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $first;?> (I)</p>
        </div>
        <div class="Cell" id="00">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 1){echo @$cell[$i];}	} ?>itt</p>
        </div>
        <div class="Cell" id="01">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 2){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="02">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 3){echo @$cell[$i];} } ?></p>
        </div>
        <div class="Cell" id="03">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 4){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="04">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 5){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="05">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 6){echo @$cell[$i];}	}  ?></p>
        </div>
        <div class="Cell" id="06">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 7){echo @$cell[$i];}	}  ?></p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $second;?> (II)</p>
        </div>
        <div class="Cell" id="10">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 8){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="11">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 9){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="12">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 10){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="13">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 11){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="14">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 12){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="15">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 13){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="16">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 14){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $third;?> (III)</p>
        </div>
        <div class="Cell" id="20">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 15){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="21">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 16){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="22">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 17){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="23">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 18){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="24">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 19){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="25">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 20){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="26">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 21){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $fourth;?> (IV)</p>
        </div>
        <div class="Cell" id="30">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 22){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="31">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 23){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="32">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 24){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="33">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 25){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="34">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 26){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="35">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 27){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="36">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 28){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $fifth;?> (V)</p>
        </div>
        <div class="Cell" id="40">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 29){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="41">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 30){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="42">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 31){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="43">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 32){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="44">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 33){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="45">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 34){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="46">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 35){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $sixth;?> (VI)</p>
        </div>
        <div class="Cell" id="50">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 36){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="51">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 37){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="52">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 38){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="53">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 39){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="54">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 40){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="55">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 41){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="56">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 42){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $seventh;?> (VII)</p>
        </div>
        <div class="Cell" id="60">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 43){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="61">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 44){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="62">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 45){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="63">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 46){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="64">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 47){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="65">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 48){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="66">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 49){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $eight;?> (VIII)</p>
        </div>
        <div class="Cell" id="70">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 50){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="71">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 51){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="72">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 52){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="73">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 53){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="74">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 54){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="75">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 55){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="76">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 56){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
    </div>
    </div>
</div>
</div>
<div class="col-lg-6">
    <div class="jumbotron">
        <?php
        // echo $_SESSION['user_id'];
        if($_SESSION['user_id']){

            function deleteemp($empnu, $user_id){
                $db_connection = new dbConnection();
                $link = $db_connection->connect();
                $link->query("DELETE FROM  `casino_emp`.`Employee` WHERE  `Employee`.`employee_number` ='$empnu' AND `Employee`.`users_user_ID`='$user_id'");
            }
            if(isset($_GET['delete'])){
                deleteemp($_GET['id'],$_SESSION['user_id']);
                echo 	'<div class="alert alert-success">  
                                <a class="close" data-dismiss="alert">X</a>  
                                <strong>Tada Success! </strong>Successfully Deleted.  
                                </div>';
            }
//////


            function GetEmployeeName($en){
                $db_connection = new dbConnection();
                $link = $db_connection->connect();
                $query = $link->query("SELECT * FROM Employee WHERE employee_number = '$en'");
                $query->setFetchMode(PDO::FETCH_ASSOC);

                while($result = $query->fetch()){
                    $fname = $result['first_name'];
                    $lname= $result['last_name'];
                    $empn= $result['employee_number'];
                    $holhours= $result['holiday_hours'];

                }
                $third = $fname;
                echo $fname;
                echo $lname;
                echo $empn;
                echo $holhours;
                echo $third;

                // print_r($query);
            }

            if(isset($_GET['choose'])) {
                GetEmployeeName($_GET['id']);

               //    print_r($_GET['id']);
                echo $fname;
                echo $_POST['fname'];
                $third=$_GET['id'];
            }

            if(isset($_GET['choosee'])){
                GetEmployeeName($_GET['employee_number']);
                echo $_POST['fname'];

                echo 	'<div class="alert alert-success">  
                                <a class="close" data-dismiss="alert">X</a>  
                                <strong>Tada Success! </strong>Success.  
                                </div>';
            }

            if(isset($_POST['choose']))
            {
                print_r($_POST['choose']);

                $choose_emp = GetEmployeeName($_POST['employee_number']);

                echo $_POST['fname'];
                //    echo $_SESSION['user_id'];



            }



//////



            // This function lists all the timetable created till now.. with options like delete, edit
            function Employeelist($user_id){
                $db_connection = new dbConnection();
                $link = $db_connection->connect();
                $query = $link->query("SELECT * FROM Employee WHERE users_user_ID='$user_id'");
                $query->setFetchMode(PDO::FETCH_ASSOC);


                echo
                    "<h2>List of Employees who Already Added</h2>".
                    "<table class='table'>".
                    "<thead>".
                    "<tr>".
                    "<th>First name</th>".
                    "<th>Last name</th>".
                    "<th>Holiday hours</th>".
                    "<th>Contracted hours</th>".
                    "<th>Position</th>".
                    "<th>Shift</th>".
                    "<th>Option</th>".
                    "</tr>".
                    "</thead>".
                    "<tbody>";

                while($result = $query->fetch()){
                    echo "<tr>"
                        ."<td>".$result['first_name']."</td>"
                        ."<td>".$result['last_name']."</td>"
                        ."<td>".$result['holiday_hours']."</td>"
                        ."<td>".$result['contracted_hourspw']."</td>"
                        ."<td>".$result['Positions_positionID']."</td>"
                        ."<td>".$result['Shifts_shiftID']."</td>"
                        ."<td><a href='tableweek.php?chooseee=true&id=".$result['employee_number']."'>Chooseee</a></td>"
                        ."</tr>".
                        "</tr>";
                }
                echo	"</tbody>".
                    "</table>".
                    "</div>";

            }

            Employeelist($_SESSION['user_id']);
        }
        else{
            echo "You are not logged in yet. Please go back and login again";
        }
        ?>

    </div>
</div>

</body>