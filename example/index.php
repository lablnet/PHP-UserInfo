<?php

use Lablnet\UserInfo;

require_once '../vendor/autoload.php';

$info = new UserInfo();

$osName = $info->operatingSystem();
$osVersion = $info->osVersion();
$browserName = $info->browser()['browser'];
$browserVersion = $info->browserVersion();
$ip = $info->ip();

$data = [
    'Operating System Name'    => $osName,
    'Operating System Version' => $osVersion,
    'Browser Name'             => $browserName,
    'Browser Version'          => $browserVersion,
    'Ip address'               => $ip,
];
var_dump($data);
