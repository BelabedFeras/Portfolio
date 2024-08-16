<?php
$dbhost = "ep-gentle-wave-a27x9yzr-pooler.eu-central-1.aws.neon.tech";
$dbuser = "default";
$dbpass = "4vp1LQhwJljI";
$dbname = "verceldb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("faild to connect!");
}
