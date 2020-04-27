<?php 
function test($name, $name1, $name2){
	$test = shell_exec('a.sh "'.$name.'" "'.$name1.'" "'.$name2.'"');
	return $test;
}
$name = '111';
$name1 = '222';
$name2 = '333';
echo test($name, $name1, $name2);

?>