<?php 
	$url = file_get_contents('http://filkom.ub.ac.id/module/api/conf/get_berita/in');
	$data = base64_decode($url);
	echo $data;
 ?>