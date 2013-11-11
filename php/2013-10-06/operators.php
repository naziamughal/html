<?php
/*
$a = 650;
if($a > 0)
{
	if($a < 500)
	{
		echo "a is > 0 but less than 500";
	}
	elseif($a < 600)
	{
		echo "a is > 0 but less than 600";
	}
	else
	{
		echo "a is > 0 but unknown value";	
	}

}
else
{

}

/*
if(1)
{
	echo "i m here in if";
}
else
{
	echo "i m here in else";
}
*/
//operators
//logical operators
//logical AND -> &&
//logical OR -> ||
/*
logical and operator table
T . T = T
T . F = F
F . T = F
F . F = F

$a = 651;
if($a > 0 && $a%2==0) //false
{
	echo "a is > 0 and even no";
}
elseif($a > 0 && $a%2 == 1)
{
	echo "a is > 0 and its an odd no";
}
*/
//logical OR Operator table
//T + T = T
//T + F = T
//F + T = T
//F + F = F
/*
$a = -651;

if($a > 0 || $a%2==0) // true
{
	echo "a is > 0 and even no";
}
elseif($a > 0 || $a%2 == 1)
{
	echo "a is > 0 and its an odd no";
}
*/
//post increament
//pre increament
/*
$a = 5;
echo --$a;
echo "<br>".$a;
if(exp1 || exp2 || exp3 || exp4 || exp5 ||...... exp10)
{

}



$a = -5;
if($a > 0 && $a%2==1 && $a==5 && ++$a)
{
	echo "condition true";
	echo $a;
}
*/
//uniary operator ?
//data structures
//sorting, searching
//code complexity
/*
$a = 10;
if($a%2==0)
{
	echo "even";
}
else
{
	echo "odd";
}
*/
$a = 10;
echo ($a%2==0 && $a > 0) ? "a is even" : "a is odd";



















?>