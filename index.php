<?php

ini_set('display_errors',1);
require "vendor/autoload.php";

use Emeka\Newsletter\User\GetUserInfo;
$con = new GetUserInfo('news', 'postgres', 'Olanicmi2013');
echo $con->UserData();
echo "<br/>";
echo "<br/>";
echo $con->ProfileData();




