<?php
//variable scope

/*
function test()
{
	$a = 10; //local variable
	echo "a = ".$a; //
}

test();
echo "a = ".$a;

$a = 10;
function test()
{
	global $a;
	echo "a = ".$a; //
	$a = 20;
}

function test2()
{
	global $a;
	echo "<br>in test2 : ".$a;
}
test();
echo "after: ".$a;
test2();
*/
$my_value = 1;
function testing($number)
{
	static $my_value = 1;
	$my_value = $my_value * $number;
	echo $my_value."<br>";
}
for($loop=1;$loop<=10;$loop++)
{
	testing($loop);	
}
global $my_value;
echo "<br>outside : ".$my_value;




















?>