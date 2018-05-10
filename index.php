<?php
require_once 'classes/UserInfo.php';
  
$info = new UserInfo;

print_r($info->Info());

//for performance improvement
$info->Free();

