<?php
header('Content-Type: text/plain; charset=utf-8');
function enc($string){
	$string = htmlentities($string);
	for($i=0;$i<strlen($string);++$i){
		/*
		$n = rand(0,1);
		if($n)
			$finished.='&#x'.sprintf("%X",ord($string{$i})).';';
		else
			$finished.='&#'.ord($string{$i}).';';
		*/
		$n = rand(0,2);
		if ($n == 0)
			$finished.='&#x'.sprintf("%X",ord($string{$i})).';';
		else if ($n == 1)
			$finished.='&#'.ord($string{$i}).';';
		else if ($n == 2)
			$finished.=$string{$i};
	}
	return $finished;
}
$email = $_GET['email'];
echo 'mailto:' . enc($email);
?>