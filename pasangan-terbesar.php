<?php
function pasangan_terbesar($angka){
    $arr_number=array();

	for ($i=0; $i < strlen($angka)-1; $i++) { 
        $arr_number[$i]=substr($angka,$i,2);
    }
    return max($arr_number);
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br><br>";

echo pasangan_terbesar(12783456); // 83
echo "<br><br>";

echo pasangan_terbesar(910233); // 91
echo "<br><br>";

echo pasangan_terbesar(71856421); // 85
echo "<br><br>";

echo pasangan_terbesar(79918293); // 99
echo "<br><br>";


?>