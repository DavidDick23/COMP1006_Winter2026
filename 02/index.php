<?php
//1. Set Up & Start 
declare (strict_types=1);

//2. Code Commenting 

// <- inline

/* 
    Multi 
*/

//3. Variables, Data Tyoes, Concatenation, Conditional Statements & Echo
$firstName = "Dave";
$lastName = "Dick";

//Concatenation Example:
echo "<p> Hello there, my name is " . $firstName . " " . $lastName . "</p>";

//4. Loosely Typed Language Demo
// $num1 = 1;
// $num2 = "10";

// function AddLoosely($num1, $num2)
// {
//     return $num1 + $num2;
// }

// echo "<p>" . add($num1, $num2) . "</p>";

//5. Strict Types & Types Hints
$num1 = 1;
$num2 = 10;

function add(int $num1, int $num2) : int
{
    return $num1 + $num2;
}

echo "<p>" . add($num1, $num2) . "</p>";

//6. OOP with PHP 