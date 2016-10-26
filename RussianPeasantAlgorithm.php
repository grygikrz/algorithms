<?php
//Algorytm Rosyjskich chłopów (algorytm mnożenia dużych liczb)

function russian($a,$b){
    $x = $a; 
	$y = $b;
    $z = 0;
		while ($x > 0) {
        if ($x % 2 == 1) 
		$z = $z + $y;
		$y = $y << 1;
        $x = $x >> 1;
		}
    return $z;
}

$time_start = microtime(true);

echo "Wynik: ".russian(20,7)." dla liczb 20,7";

$time_end = microtime(true);
$time = $time_end - $time_start;
$human = date("H:i:s",$time_end-$time_start);
echo "<br>Algorytm zadziałał w czasie ".number_format($time, 6)." mikrosekund<br>To jest w czasie: ".$human." h/m/s";
?>