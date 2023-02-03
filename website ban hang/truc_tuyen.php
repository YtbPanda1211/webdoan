<?php

function creatLOG($ip) {
// Creat log dir if not exists
if(!is_dir('log')) mkdir("log", 0777);

// Creat or modify
$f = fopen('log/'.md5($ip).'.x', "w");
fwrite($f, '');
fclose($f);
}

function getTOTAL() {
$total = 0;
$current_time = time();
$timeout = 10*60;//10 min

$list = scandir('log');

foreach($list as $num => $file) {
$file = 'log/'.$file;
if(substr($file, strrpos($file, '.') + 1) == 'x') {
$log_time = filemtime($file);
// Remove timeout
if ($current_time - $log_time > $timeout)
unlink($file);
else $total++;
}
}
return $total;
}

creatLOG($_SERVER['REMOTE_ADDR']);
$truc_tuyen=getTOTAL();
?> 