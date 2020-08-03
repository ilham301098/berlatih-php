<?php

function papan_catur($angka) {
	$stat=0;
	$start=0;
	for ($i=0; $i < $angka; $i++) { 
		$temp=0;
		$batas=$angka;
		$stat=$start;
		if($stat==1){
			$batas--;
		}

		while($temp!=$batas){
			
			if($stat==0){
				echo '#';
				$stat=1;
				$temp++;
			}else{
				echo '&nbsp;&nbsp;';
				$stat=0;
			}
		}
		if($start==0){
			$start=1;
		}else{
			$start=0;
		}
		echo "<br>";
	}
}

// TEST CASES

echo "<p>".papan_catur(4)."</p>"; 

echo "<br><br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo "<p>".papan_catur(8)."</p>";

echo "<br><br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo "<p>".papan_catur(5)."</p>"; 

echo "<br><br>";
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/