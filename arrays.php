<?php

// An arry is a data structure / variable  that can store many variables 

// There 3types of aarys ;
echo"<strong>Index Arry </strong> <br>";
    // Index Arrys
        //  Here each element is posistioned ona specific positon called index
        //     $number = array(5, 4, 3, 2, 1);
            $name = array("Dennis", "Alex", "Clea", "Warren", "Lewis", "Vivian");

            var_dump($name);

            echo "<br> <hr>" ;
            // Targeting an arry
            echo $name[5];

            echo "<br> <hr>" ;
        //Add a new element to our name arry
            $name[6] = "Micah"; 
            var_dump($name);
            echo "<br> <hr>" ;

        // //Print an Arry 
        //     print_r($number)  ;
        //Acces elements in an arry 
        // Lets acces the first element

    echo"<strong>Multi-Dimensional Arry </strong> <br>";

    // Multi-dimensianal Arrys
        // This is an arry of Arrys
            $Students = array(
                array("PT", "Vivian Wainaina", "Web Dev"),
                array( "FT", "Wanjiru Wainaina", "DCNSA"),
                array("DL", "Jibril", "Front-End Dev")
            );
            print_r($Students);

            echo "<br> <hr>" ;

            echo $Students[1] [2];

            echo "<br> <hr>" ;

      echo"<strong>Associative Arry </strong> <br>";
    // Associative Arrys
        // This is an arry that has a key-value pair as its element

        $Student = array(
            "First Name" => "Vivian",
            "Last Name" => "Wainaina",
            "Course" => "DCNSA",
            "Semester" => "Trim1 23"
        );

    // Accessing elemnts -> using keys
        echo $Student["First Name"];

        echo "<br> <hr>";

        echo $Student["First Name"] . " ". $Student["Last Name"] . " is in " . $Student["Semester"] . " doing " . $Student["Course"] . ".";



