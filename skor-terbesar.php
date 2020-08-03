<?php
function skor_terbesar($arr){
	$sorter=array();
    $ret=array();
    reset($arr);
    foreach ($arr as $ii => $va) {
        $sorter[$ii]=$va['nilai'];
    }
    arsort($sorter);
    foreach ($sorter as $ii => $va) {
        $ret[$ii]=$arr[$ii];
    }
    $arr=$ret;
    return $arr;
}

// TEST CASES
$skor = [
[
"nama" => "Bobby",
"kelas" => "Laravel",
"nilai" => 78
],
[
"nama" => "Regi",
"kelas" => "React Native",
"nilai" => 86
],
[
"nama" => "Aghnat",
"kelas" => "Laravel",
"nilai" => 90
],
[
"nama" => "Indra",
"kelas" => "React JS",
"nilai" => 85
],
[
"nama" => "Yoga",
"kelas" => "React Native",
"nilai" => 77
],
];

echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
  ?>