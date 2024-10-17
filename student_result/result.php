<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result </title>
</head>
<body>
<?php

$totalMarks=(20+20+40+20+20);

$averageMarks=$totalMarks/5; 


switch(true){
    case($averageMarks<=100 && $averageMarks >=80);
    echo"Total Marks : $totalMarks";
    echo "<br>";
    echo "<br>";
    echo"Average Marks : $averageMarks ";
    echo "<br>";
    echo "<br>";
    echo "Grade : A+";
    break;
    case($averageMarks<=79 && $averageMarks >=70);
    echo"Total Marks : $totalMarks";
    echo "<br>";
    echo "<br>";
    echo"Average Marks : $averageMarks ";
    echo "<br>";
    echo "<br>";
    
    echo "Grade : A";
    break;
    case($averageMarks<=69 && $averageMarks >=60);
    echo"Total Marks : $totalMarks";
    echo "<br>";
    echo "<br>";
    echo"Average Marks : $averageMarks ";
    echo "<br>";
    echo "<br>";
    echo "Grade : A-";
    break;
    case($averageMarks<=59 && $averageMarks >=50);
    echo"Total Marks : $totalMarks";
    echo "<br>";
    echo "<br>";
    echo"Average Marks : $averageMarks ";
    echo "<br>";
    echo "<br>";
    echo"Grade : B";
    break;
    case($averageMarks<=49 && $averageMarks >=40);
    echo"Total Marks : $totalMarks";
    echo "<br>";
    echo "<br>";
    echo"Average Marks : $averageMarks ";
    echo "<br>";
    echo "<br>";
    echo"Grade : C";
    break;
    case($averageMarks<=39 && $averageMarks >=33);
    echo"Total Marks : $totalMarks";
    echo "<br>";
    echo "<br>";
    echo"Average Marks : $averageMarks ";
    echo "<br>";
    echo "<br>";
    echo" Grade : D";
    break;
    default:
    echo "Grade : F";
    break;
}




?>

<div>


</div>
    
</body>
</html>