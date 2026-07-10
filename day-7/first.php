<?php 
echo "Hello World";
print "Hello world";
die;
//phpinfo();

//echo $_SERVER['REMOTE_ADDR'];
//$name ="Rahul";
//echo $name;

$student = ["Rahul"."Harsh"];

//echo $student[0];
//echo $student[1];

//print_r($student);

$student_marks = [12,13];
//print_r($student_marks);

$students = [
    "Rahul" => 12,
    "Harsh" => 34
];

print_r($students);

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo date('l js \of F Y h:i:s A')
?>