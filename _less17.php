<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
   <?php
<form action="" method="GET">
	<input type="text" name="name">
	<input type="submit">
</form>
 <?php

function isNumberInRange($num){
if ($num>0 and $num<10){return true;}else{return false;}
}

function getDigitsSum($num1){
	return array_sum(str_split($num,1));
}

function isEven($num2){
if (($num % 2) == 0){return true;}else{return false;}
}

function getDivisors($num3){
	$arr=[];
	for ($i=1;i<=$num3;$i++){
		if ($num3 % $i == 0){
			$arr[]=$i;
			}
			}
	return $arr;		
}
?>
 </body>
</html>