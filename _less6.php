<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
 <?php
$a=10;                                     
$b=3;
echo $a%$b;

$st=pow(2,10);                                  

$arr=[4, 2, 5, 19, 13, 0, 10];                   
$sum=0;
foreach($arr as $elem) {$sum+=$elem*$elem;};
echo sqrt($sum);

$a2=sqrt(587);                                    
$arr1 = ['floor'=>floor($sqrt), 'ceil'=>ceil($sqrt)];

echo mt_rand(1,100);                                  
$a1=10;                                            
$b1=22;
echo abs($a1-$b1);

$a2=30;                                                 
$arr2=[];
for ($i = 1; $i <= $a2; $i++) {
		if ($a2 % $i == 0) {
			$arr2[] = $i;
		}
	}

    $a3 = 20;                                       
	$b3 = 1.5;
	echo floor($a3 / $b3);	
	?>
 </body>
</html>