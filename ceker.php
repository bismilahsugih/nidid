<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
	$link = $_POST['link'];
	$expl = explode(PHP_EOL, $link);
	$exp = array_filter($expl);
	
	foreach($exp as $epl){
		$dat = 'http://webcache.googleusercontent.com/search?q=cache:';
		$put = $dat . trim($epl);		
		echo $put . " - <a href=\"".$put."\">Klik utk cek</a><br/>
		<script>window.open('".$put."', '_blank');</script>";
	}		
}

?>
