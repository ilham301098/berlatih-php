<?php

function palindrome_angka($angka) {
	$cek=true;
	while($cek){
		$angka++;
		if(cekPalindrome($angka)){
			$cek=false;
		}
	}
	return $angka;
}

function cekPalindrome($number){
	$temp = $number;   
	$new = 0;   
	while (floor($temp)) {   
		$d = $temp % 10;   
		$new = $new * 10 + $d;   
		$temp = $temp/10;   
	}   
	if ($new == $number){   
		return 1;   
	} 
	else{ 
		return 0; 
	} 
}

// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>";
echo palindrome_angka(10); // 11
echo "<br>";
echo palindrome_angka(117); // 121
echo "<br>";
echo palindrome_angka(175); // 181
echo "<br>";
echo palindrome_angka(1000); // 1001
echo "<br>";

?>