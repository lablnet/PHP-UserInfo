<?php
require_once 'classes/UserInfo.php';
  
$info = new UserInfo;

print_r($info->Info());


//echo "<br>";

//print_r($_SERVER['HTTP_USER_AGENT']);



//for performance improvement
$info->Free();

