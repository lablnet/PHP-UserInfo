<?php

require_once 'Classes/UserInfo.php';

$info = new UserInfo();

$osName = $info->operatingSystem();
$osVersion = $info->osVersion();
$browserName = $info->browser()['browser'];
$browserVersion = $info->browserVersion();
$ip = $info->ip();
$isMobile = $info->isMobile();

$data = [
    'Operating System Name'    => $osName,
    'Operating System Version' => $osVersion,
    'Browser Name'             => $browserName,
    'Browser Version'          => $browserVersion,
    'Ip address'               => $ip,
    'Is Mobile'                => $isMobile,
];
var_dump($data);
