<?php 
	$url = file_get_contents('http://filkom.ub.ac.id/module/api/conf/get_berita/in');
	$data = base64_decode($url);
	// $pos = 0;
	// $arrayPos = array();
	// $arrayClose = array();
	// while(strpos($data,'<img', $pos) !== false && $pos < strlen($data)){
	// 	$posNow = strpos($data,'<img', ++$pos);
	// 	if ($posNow !== false){
	// 		// echo $posNow."-";
	// 		$pos = $posNow;
	// 		array_push($arrayPos, $pos);
	// 	}
	// }
	// foreach ($arrayPos as $arrayImg) {
	// 	$posNow = strpos($data,'>', ++$arrayImg);
	// 	if ($posNow !== false){
	// 		array_push($arrayClose, $posNow);
	// 	}
	// }
	// for ($i=0; $i < count($arrayPos) ; $i++) { 
	// 	// echo substr($data, $arrayPos[$i], $arrayClose[$i] - $arrayPos[$i]);
	// 	echo "string"."-";
	// }
	// print_r($arrayPos);
	// print_r($arrayClose);
	echo $data;	
 ?>