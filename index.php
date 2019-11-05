<!DOCTYPE html>
<html>
<head>
<charset meta="utf-8">
</head>
<body>
<p> Tsoy Dmitry IU4-12B</p>
<h1> Task1</h1>
<?php
	$arr[0]=1;
	$arr[1]=2;
	$arr[2]=3;
	$arr[3]=4;
	$arr[4]=5;
	$arr[5]=6;
	$arr[6]=7;
	$arr[7]=8;
	$arr[8]=9;
	$arr[9]=10;
	$i=1; $j=1;
	for($i=0; $i<10; ++$i)
		for($j=0; $j<10; ++$j)
			echo $arr[i]*arr[j]; echo"<br>";
 ?>
 
 <h1>Task2</h1>
 <?php
<form action=" " method="post">
 <p>число: <input type="text" name="a" /></p>
 <form action="action.php" method="post">
 <p>операция: <input type="text" name="b" /></p>
</form>
	$q=0;
	if ($b == "квадрат")
		$q=$a*$a;
	else if ($b == "куб")
		$q=$a*$a*$a;
	else if($b == "корень")
		$q=sqrt($a);
	echo $q;
 ?>
 
</body>
</html>
