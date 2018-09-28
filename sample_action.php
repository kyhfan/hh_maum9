<?php

//$msg =  $_REQUEST['message']; 
//$msg =  urldecode($_REQUEST['message']); 
//$msg =  nl2br($msg); 
$msg =  nl2br($_REQUEST['message']); 
//$msg =  nl2br($_REQUEST['message']); 
//$msg =  nl2br($msg); 
//$arrasd = explode('<br>', $msg);
//print_r($arrasd);

//$i = 0;
//if(strpos($msg, "<br />") == true || strpos($msg, "<br>") == true || strpos($msg, "\n") == true) {
//	$i++;
//} 
print_r($msg);
//print_r($i);
//print_r(nl2br($_REQUEST['message']));
?>