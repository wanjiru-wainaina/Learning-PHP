<?php

// PHP Functions 
//  A function is basially a mini-program

// Parameters -> values passed to a function declaration 
// Arguments -> values passed to a function call 
// Return Value -> value returned by a fuction call

// Local Variable -> a variable accessed only inside a block (function or loop)

// Global Variable -> a variable that is accesed globaly throughout your code or program

// Functions are important cause they allow one to mage their programs easily , they also help us avoid repeatation and its also re-usable.

// Syntax
// function function_name ( ){
    // statement(s) 
// }

function greetUser() {
    echo "Hello Vivian,";
}

// Call the function -> siply type the name of the function followed by a pair of parenthess ()
greetUser();

echo "<br> <hr>";

// For equaions we dont put quotes on the echo.
function Addition() {
    echo 7+10;

}
 Addition();
 echo "<br> <hr>";

//  Naming Convetions -> 
                        // CamelCase
                        // PascalCase
                        // SnakeCase

 function Division($Num1, $Num2) {
    echo"The quotient is:" . ($Num1 / $Num2);
 }

 Division(27, 9);

 echo "<br> <hr>";

 function Multipliaction ($Num1, $Num2) {
    $Product = $Num1 * $Num2;
    return $Product;
 }

echo Multipliaction (27, 9);

echo "<br> <hr>";
// function that displays elemnts of an array

function DisplayArray(){
    $numbers = [1, 2, 3, 4, 5, 6, 7];
    foreach($numbers as $number){
    echo $number . "<br>" ;
}
}
DisplayArray( );






