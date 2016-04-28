<?php
$bp=130;
$hr=74;
$sp=98;
$rr=11;
$ecg=450;
$name="Bharathi";
$age=21;$sex="male";
$pt = shell_exec('java -cp .:libs/1.jar:libs/2.jar:libs/3.jar:libs/4.jar:libs/5.jar:libs/6.jar:libs/7.jar:libs/8.jar:libs/mysql.jar classification.TestData '.$name.' '.$age.' '.$sex.' '.$hr.' '.$rr.' '.$bp.' '.$ecg.' '.$sp.'');
echo $pt;


//javac -cp libs/1.jar:libs/2.jar:libs/3.jar:libs/4.jar:libs/5.jar:libs/6.jar:libs/7.jar:libs/8.jar:libs/mysql.jar classification/*.java geneticalgorithm/*.java com/messagebird/exceptions/*.java com/messagebird/objects/*.java com/messagebird/*.java

?>
