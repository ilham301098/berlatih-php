<?php
function tukar_besar_kecil($string){
	$arr_number=array();
	$result="";

	for ($i=0; $i < strlen($string); $i++) { 
		$arr_huruf[$i]=substr($string,$i,1);
		if (ctype_upper($arr_huruf[$i])) { 
			$result.=strtolower($arr_huruf[$i]);
		} else { 
			$result.=strtoupper($arr_huruf[$i]);
		} 
	}

	return $result;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br><br>";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br><br>";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br><br>";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br><br>";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
echo "<br><br>";

?>