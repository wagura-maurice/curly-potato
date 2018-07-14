<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$database = 'highranks_sms';
$user = 'root';
$pass = 'root';
$host = 'localhost';
$dir = dirname(__FILE__) . '/dumps/dump-'.time().'.sql';

echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";

exec("mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$dir} 2>&1", $output);

var_dump($output);