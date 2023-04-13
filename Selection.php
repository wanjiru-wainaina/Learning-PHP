<?php

// Selection Structures - Decision Statements
// They include: -if statement ( for the conditio to show the statement must be true )
            // SYNTAX
                    // if(condition) {do something}
                    // EXAMPLE:
                    $israining = TRUE;

                    if($israining) {
                        echo"carry an umbrella";
                    }
                    
                    echo "<br>";
                    $AdultAge = 18;
                    $UserAge = 17;

                    if ($UserAge < $AdultAge) {
                        echo "Please stay at home";
                    }
                    
                    echo "<br>";
                    $NormalTemp = 27;
                    $HighTemp = 32;

                    if($HighTemp > $NormalTemp) {
                        echo "Please Cover Your Tomatoes";
                    }


                //  statement  -if else statement (if the condition evaluates as true it will show the if condition, if not it will show the else condition)
                    // SYTNAX
                    echo"<br>";
                    $age5 = 5;
                    $age10 =10;

                    if ($age5 < $age10) {
                        echo " 5 is less than 10";
                    }
                    else{ echo"5 is not less than 10";}
                


                //  -if else if else statement
                    // SYNTAX
                    // if($expression1) {
                    //     // do something if expression is True
                    // }
                    // else if($expression2){
                    //     //  do something if expression1 is FALSE and expression2 is TRUE
                    // }
                    // else if ($expression3){
                    //     // something if expression1 is FALSE and expression2  are both FALSE 
                    // }else{ 
                    //     // do something if expression 1, 2 and 3 are all false
                    // }  
                    echo "<br>";

                    $x = 5;
                    $y =10;

                    if($x < $y) {
                        echo "5 IS LESS THAN 10";
                    }
                    
                  
                    else if ( $x == $y) {
                        echo "5 IS EQUAL TO 10";
                    }
                   

                    else if ($x > $y) {
                        echo " 5 IS GREATER THAN 10";
                    }
                    else {
                      echo"UNKNOWN";;
                    }



                //  -switch statement( works with labels- it tries to match the switch value to the labels)
                // sytnax

            echo "<br>";
               $dayOftheWeek = 3;

               switch($dayOftheWeek) {
                case 1:
                    echo "Today is Sunday";
                    break;
                case 2:
                    echo "Today is Monday"; 
                    break;
                case 3:
                    echo "Today is Tuesday"; 
                    break;
                case 4:
                    echo "Today is Wednesday";    
                    break;
                case 5:
                    echo "Today is Thursday";
                    break;
                case 6:
                    echo "Today is Friday";
                    break;
                case 7:
                    echo "Today is Saturday";
                    break;
                default: 
                    echo "We don't know the day of the week";
               }




















?>