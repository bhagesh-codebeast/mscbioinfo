<html>
<body>
<?php
$str = $_POST['seq'];
$str = strtoupper($str);
$len = strlen($str); 
$a = substr_count($str,"A");  
$t = substr_count($str,"T"); 
$g = substr_count($str,"G"); 
$c = substr_count($str,"C"); 
if ($len < "14") {
    $temp = round((($a+$t) * 2 + ($g+$c) * 4),2);
	echo "The melting temperature of your sequence is:".' '.$temp.' '."°C";
} else {
    $temp = round((64.9 +41*($g+$c-16.4)/($a+$t+$g+$c)),2);
	echo "The melting temperature of your sequence is:".' '.$temp.' '."°C";
}
?>
</body>
</html>