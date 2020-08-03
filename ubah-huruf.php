<?php
function ubah_huruf($string){
	$abjad="abcdefghijklmnopqrstuvwxyz";
	$arr_abjad=array();
	for ($i=0; $i < strlen($abjad); $i++) { 
		$arr_abjad[$i]=substr($abjad,$i,1);
	}

	$arr_string=array();
	$new="";

	for ($i=0; $i < strlen($string); $i++) { 
		$arr_string[$i]=substr($string,$i,1);

		for ($j=0; $j < strlen($abjad); $j++) { 
			if($arr_string[$i]==$arr_abjad[$j]){
				$new=$new.$arr_abjad[$j+1];
			}
		}
	}

	return $new;

}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br><br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br><br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br><br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br><br>";
echo ubah_huruf('semangat'); // tfnbohbu
echo "<br><br>";

?>