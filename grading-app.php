<?php
// KCAU Grading System
// Create a variable for the student name
$student_name = "Vivian Wainaina";

// Define variables to store the scores of the student
$Maths = 70;
$English = 92;
$Kiswahili = 50;
$Science = 94;
$SST = 85;
$CRE = 60;

// calculate the total score
$total_score = $Maths + $English + $Kiswahili + $Science + $SST + $CRE;
echo "This is your total score:" . $total_score;

echo "<br>";
// compute the average score and store it in a variable
 $average_score = $total_score / 6; 
 echo "Your Total Score is:" . $average_score;

 echo "<br>"; 
//  Use decision statements to check average score, then grade the student

if ($average_score >= 80 $average_score <= 100) {
    echo "Student Name: " . $student_name . "Score: " . $average_score . " Grade A" ;
}
elseif ($average_score >= 70 && $average_score <= 79) {
    echo "Student Name: " . $student_name . "Score: " . $average_score . " Grade B" ;
}
elseif ($average_score >= 60 && $average_score <= 69) {
    echo "Student Name: " . $student_name . "Score: " . $average_score . " Grade C" ;
}
elseif ($average_score >= 50 && $average_score <= 59) {
    echo "Student Name: " . $student_name . "Score: " . $average_score . " Grade B" ;
}
elseif ($average_score >= 0 && $average_score <= 49) {
    echo "Student Name: " . $student_name . "Score: " . $average_score . " Grade B" ;
}
else{
    echo "Please Enter Valid Score"
} 









?>