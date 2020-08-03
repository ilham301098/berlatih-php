<?php
function tentukan_deret_aritmatika($arr) {
	$cek="true";
	for ($i=0; $i < count($arr); $i++) { 
		if($arr[$i]!=$i+1){
			$cek="false";
		}
	}

	if($cek=="false"){
		$temp=2;
		$valid=1;
		for ($i=0; $i < count($arr); $i++) { 
			if($arr[$i]!=$temp){
				$cek="false";
				$valid--;
			}
			$temp=$temp+2;
		}
		if($valid==1){
			$cek="true";
		}
	}
	return $cek;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br><br>";

echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "<br><br>";

echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "<br><br>";

echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "<br><br>";

echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
echo "<br><br>";

?>