<?php
//functions
//variable scope
//global variable 
//and static variable

/*
function function_name($param_list)
{
	//todo code
}

function add()
{
	echo 10+10;
}
//calling function add
add();
*/
function calc_tax($amount,$type="grocery")
{
	if($type == "electronics")
	{
		$tax_rate = "3.5";
	}
	elseif($type == "grocery")
	{
		$tax_rate = "2.5";
	}
	$tax_amount = $amount * $tax_rate / 100;
	return ($amount + $tax_amount);

}
$actual_amount = 1000;
$net_amount = calc_tax($actual_amount,"electronics");

echo "Actual amount: ".$actual_amount;
echo "<br>Net amount: ".$net_amount;










?>