<?php

//Algorytm Euklidesa (największy wspólny dzielnik)

function nwd($a, $b){
    
    if ( $b == 0 ) {
        
        return $a;
        
    }else{
        
        return nwd($b, $a % $b); // operator % w php realizuje funkcję modulo
    }

} // (reszta z dzielenia liczb całkowitych)



$time_start = microtime(true);

echo "Algorytm Euklidesa (największy wspólny dzielnik)<br> nwd(122,16) = ".nwd(122,16);

$time_end = microtime(true);
$time = $time_end - $time_start;
$human = date("H:i:s",$time_end-$time_start);
echo "<br>Zadziałał w czasie ".number_format($time, 6)." mikrosekund<br>To jest w czasie: ".$human." h/m/s";
?>