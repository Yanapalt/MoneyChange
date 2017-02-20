<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TESTER</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="header-box">
		<h1>Program Change Type Money</h1>
	
	<?php
		$money=$_POST['money'];   
  		$coin=$_POST['coin'];
 
 
	  switch ($coin) {
	   case 1:
	    $coin_m=0.02;
	    $sum=$money*$coin_m;
	    echo "1 บาทไทย (THB) = ".$coin_m." ปอนด์ (GBP)"."<br><br>";
	    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ปอนด์ (GBP)";
	    break;    
	   case 2:
	    $coin_m=0.03;
	    $sum=$money*$coin_m;
	    echo "1 บาทไทย (THB) = ".$coin_m." ยูโร (EUR)"."<br><br>";
	    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ยูโร (EUR)";
	    break;
	   case 3:
	    $coin_m=0.03;
	    $sum=$money*$coin_m;
	    echo "1 บาทไทย (THB) = ".$coin_m." สหดอลลาร์สหรัฐอเมริกา (USD)"."<br><br>";
	    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." สหดอลลาร์สหรัฐอเมริกา (USD)";
	    break;
	   case 4:
	    $coin_m=33;
	    $sum=$money*$coin_m;
	    echo "1 บาทไทย (THB) = ".$coin_m." เกาหลีวอน (KRW)"."<br><br>";
	    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." เกาหลีวอน (KRW)";
	    break;    
	   case 5:
	    $coin_m=3.58757333;
	    $sum=$money*$coin_m;
	    echo "1 บาทไทย (THB) = ".$coin_m."  เงินเยนของญี่ปุ่น (JPY)"."<br><br>";
	    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)."  เงินเยนของญี่ปุ่น (JPY)";
	    break;    
	  }


	?>
	</div>
</body>
</html>