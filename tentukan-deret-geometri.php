<?php
function tentukan_deret_geometri($arr) {
	$cek="true";

	$geo=false;
	$temp=1;

	while($geo==false&&$temp<4){
		$valid=1;
		for ($i=1; $i < count($arr); $i++) { 
			$hasil=$arr[$i-1]*$temp;
			if($arr[$i]!=$hasil){
				$valid--;
			}
		}
		if($valid==1){
			$geo=true;
		}
		$temp++;
	}

	//echo $valid;
	if($valid<1){
		$cek="false";
	}
	
	return $cek;
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo "<br><br>";

echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo "<br><br>";

echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo "<br><br>";

echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo "<br><br>";

echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
echo "<br><br>";

?>