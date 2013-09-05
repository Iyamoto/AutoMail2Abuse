<?php
//Apache console log parser
define("DEBUG_EMAIL", "someone@gmail.com");
define("SERVER_IP", "1.1.1.1");
define("WHITELIST_IP", "2.2.2.2");

echo "\n[+] Started\n";
require_once 'am2a.php';
$logdir = '/var/log/apache2/';

$data = ParseApache($logdir);
$i=0;
foreach($data as $ip=>$domains){
	if(defined("WHITELIST_IP")) if ($ip == WHITELIST_IP) continue;
	$email = FindEmail($ip);
	$evidence='';
	foreach($domains as $domain=>$logs){
		foreach($logs as $log){
			$evidence.=$log."\n";
		}
	}
	SendAbuse($email,$ip,$evidence,$domain);
	//where to keep sent emails?
	//filesystem? /tmp/year/month/day/ip.txt << evidences
	$i++;
	//break;
}
echo "[+] Sent $i abuses\n";

?>
