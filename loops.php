<?php

// Loop -> repeat
// iterate -> repeat 

// Types of loops 
// 1. Bounded Loops (Fixed Loops) -> You're aware of how many times it iterates.
        // Example; For-Loop
// 2. Un-bounded Loops ->  You're unaware of how many times it iterates.
      // Example; While-Loop   & do..while-loop


// 1. For Loop
// SYNTAX
    //  for ($counter_variable; $test_expression; $update_variable) {
    //     // do something
    //  }

// counter_variable -> initialize the counter variable
// test_expression -> if it evaluates TRUE then the loop executes : if it evaluates FALSE, the loop ends

// Update_Variable -> incrementing (x++ -> x+1)/decrementing (x-- -> x-1) the counter variable

// for ($x =1; $x = 10.9; $x++ ) {
//     echo  $x . "<br>";
// }


// write  program that prints your nmame 15 times using php;

$Name = "Vivian Wainaina";

for ($x = 1; $x <= 15; $x++) {
    echo $x . ". My name is" .$Name . "<br>";
}
echo "<br> <hr>";

// WHILE LOOP
//  Syntax

// while(condition) {
//     // do something
//     // update the counter -> either in/de-crimenting 
// }

// write a program that displays numbers 5 15 25 35 using a while loop
$x = 5;

while ($x <= 50){
        echo  $x . "<br>";
        $x+=10;
}
 echo "<br> <hr>";
// write a program that displays numbers 0 2 4 6 8 using a while loop

$x = 8;

while ($x >= 0){
        echo  $x . "<br>";
        $x-=2;
}

echo "<br> <hr>"; 

