<?php
 
$to="sadi@gmail.com";
$sub="testing2";
$msg="Dear T,\n
How r u?";

$from="From:sadi@gmail.com" ."r\n". "CC:sad1@gmail.com";

if(mail($to,$sub,$msg,$from)){
echo "msg sent"	;
	
}
else{
	
	echo "not sent";
}
?>
