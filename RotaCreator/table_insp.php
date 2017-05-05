<?php

include_once 'header.php';
//echo date('Y-m-d', strtotime($row['date']));


include_once 'datepicker.php';
//include_once 'datepick.php';


if(isset($_POST['submitdate'])){

    echo "Hellodate";
   // $startdate =
    echo $startdate = $startdate;
    echo $submitdate;

    $a='2';
    echo $a;





}

//$Datema = strtotime(date("d/m/Y")) ;
//$Datema = 0;

echo date('d-m-Y', strtotime($Datema. ' + 1 days'));
echo "<br/>";
echo date('d-m-Y', strtotime($Datema. ' + 2 days'));
echo "<br/>";


?>

<body>

<div class="Table">
    <div class="Title">
        <p><? echo "Today is " . date("d/m/Y") . "<br>"; ?></p>
        <p><?php echo $uname;?> Time Table</p>
        <p><?php echo $startdate;?> Start datum</p>

    </div>
    <div class="Heading">
        <div class="Cell">
            <p>Date</p>
        </div>
        <div class="Cell">
            <p> <?php echo date("d");?>  </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d-m-Y', strtotime($Datema. ' + 1 days'));?>  </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 2 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 3 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 4 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 5 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 6 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 7 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 8 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 9 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 10 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 11 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 12 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 13 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 14 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 15 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 16 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 17 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 18 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 19 days')); ?> </p>
        </div>
        <div class="Cell">
            <p> <?php echo date('d', strtotime($Datema. ' + 20 days')); ?> </p>
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
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 25){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="41">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 26){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="42">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 27){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="43">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 28){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="44">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 29){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="45">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 30){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $sixth;?> (VI)</p>
        </div>
        <div class="Cell" id="50">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 31){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="51">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 32){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="52">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 33){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="53">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 34){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="54">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 35){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="55">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 36){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $seventh;?> (VII)</p>
        </div>
        <div class="Cell" id="60">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 37){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="61">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 38){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="62">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 39){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="63">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 40){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="64">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 41){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="65">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 42){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><?php echo $eight;?> (VIII)</p>
        </div>
        <div class="Cell" id="70">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 43){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="71">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 44){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="72">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 45){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="73">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 46){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="74">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 47){echo @$cell[$i];}	} ?></p>
        </div>
        <div class="Cell" id="75">
            <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 48){echo @$cell[$i];}	} ?></p>
        </div>
    </div>
</div>
