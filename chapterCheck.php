<?php
/**
 * Created by PhpStorm.
 * User: lschubert
 * Date: 11/30/15
 * Time: 8:26 PM
 */
$name = filter_input(INPUT_POST, "userid");
$myFile = "UserData.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "Name: $name\n";
fwrite($fh, $stringData);
fclose($fh);
?>
<html>
<body>
<p>
    submitted
</p>
</body>
</html>
