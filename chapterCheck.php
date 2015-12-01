<?php
/**
 * Created by PhpStorm.
 * User: lschubert
 * Date: 11/30/15
 * Time: 8:26 PM
 */
$name = filter_input(INPUT_POST, "userid");
$password = filter_input(INPUT_POST, "pwd");
//print 'hello';
//print $name;
//print $password;
//$currentTime =  date("Y-m-d@H:i:s");
$myFile = "UserData.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "Username: $name\n";
fwrite($fh, $stringData);
fclose($fh);
?>