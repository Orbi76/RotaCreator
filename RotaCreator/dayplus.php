<?php
/**
 * Created by PhpStorm.
 * User: Orbi
 * Date: 26/04/2017
 * Time: 19:10
 */



$Datema = strtotime(date("d/m/Y")) ;


echo date('d-m-Y', strtotime($Datema. ' + 1 days'));
echo "<br/>";
echo date('d-m-Y', strtotime($Datema. ' + 2 days'));
echo "<br/>";






echo $Datema;
echo "<br/>".$Datema;
echo strtotime ($Datema . ' + 1 days');

echo "<br/>";
$Date = "2010-09-17";
echo date('Y-m-d', strtotime($Date. ' + 1 days'));
echo "<br/>";
echo date('Y-m-d', strtotime($Date. ' + 2 days'));
echo "<br/>";

$holnap = strtotime($Datema.' + 1 days');
echo $holnap;

echo "eyits" . $Datema. ' + 1 days' ;



?>