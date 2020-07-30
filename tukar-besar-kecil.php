<?php
function tukar_besar_kecil($string){
//kode di sini
	$hasil = "";
	for($i = 0; $i < strlen($string); $i++){
		$ord = ord($string[$i]);
		if($ord > 64 && $ord < 91){
			$hasil .= chr($ord + 32);
		} elseif ($ord > 96 && $ord < 123) {
			$hasil .= chr($ord - 32);
		} else {
			$hasil .= $string[$i];
		}
	}
	return $hasil;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>" . tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>" . tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>" . tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>" . tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>