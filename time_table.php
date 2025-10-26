<?php
// Multiplication Table
// 2*1 = 2
// 2*2 = 4
// Create a function with two parameter called $number , $limit

function multiplication ($num , $limit ){
    // loop through the limit
    for ($i = 1; $i<=$limit; $i++ ){
       // echo $i . "<br>";
        // multiply each number with the first parameter 
        $ans = $num * $i ;
        echo "$num * $i  = $ans<br>";
    }
}
    multiplication(6,12);

?>