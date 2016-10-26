<?php

//Algorytm Euklidesa

function nwd($a, $b){
    
    if ( $b == 0 ) {
        
        return $a;
        
    }else{
        
        return nwd($b, $a % $b); // operator % w php realizuje funkcję modulo
    }

} // (reszta z dzielenia liczb całkowitych)

echo "nwd(122,16) = ".nwd(122,16);
?>