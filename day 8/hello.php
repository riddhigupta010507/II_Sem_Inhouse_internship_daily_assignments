<?php 
$name  = "Yuvika Mehta";
$college = "MIT Pune";
$branch = "B.des";
?>

<h1> Hello, <?= $name ?> </h1> //used echo
<p> <?= $college ?> | <?= $branch ?></p>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type = "text" name="name" placeholder = "Enter your name">
        <input type = "text" name="college" placeholder="enter your college">
        <input type = "text" name="branch" placeholder="enter your branch">
    </form>
</body>
</html>