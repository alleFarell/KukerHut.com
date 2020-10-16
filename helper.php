<?php 
	
	define("BASE_URL","http://localhost/kukerhut/");

	function rupiah($nilai = 0){
		$string = "Rp. ".number_format($nilai);
		return $string;
	}
 ?>