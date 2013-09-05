<?php
//Evidence Logger

require_once 'am2a.php';
$filename = 'evidence.log';

$evidence = GetEvidence();
if($evidence){
	//do something, launch a nuclear strike
	file_put_contents($filename,$evidence."\n",FILE_APPEND);
}

EchoBanner();

?>
