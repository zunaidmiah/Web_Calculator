<?php

$output = "";
$num1=0;
$num2=0;
$operator="";
$status=0;
if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operator']))
{
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
    $operator=$_POST['operator'];
    $status=1;
}
// print_r  ($_POST);
// echo $num1, $num2, $operator;
if($operator=="+")
{
    $output="The Sum of {$num1} and {$num2} is : ".($num1+$num2);
}
elseif($operator=="-")
{
    $output="The Sub of {$num1} and {$num2} is : ".($num1-$num2);
}
elseif($operator=="*")
{
    $output="The Multiple of {$num1} and {$num2} is : ".($num1*$num2);
}
elseif($operator=="/")
{
    $output="The Division of {$num1} by {$num2} is : ".($num1/$num2);
}
elseif($operator=="%")
{
    $output="The Modolus of {$num1} by {$num2} is : ".($num1%$num2);
}
else
{
    $output="";
}

