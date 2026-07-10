<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href ="https://cdn.jsdeliver.net/npm/bootstrap5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTTQN3/azprG1Arm3qDGP"
</head>
<body>
    <?php include "partial/header.php" ?>
    <section>
        <div class ="container mt-5 col-md-6">
        <h1> Registration Form </h1>
        <form action="process.php" method="POST">
        <div class = "mb-3">
        <label for="name" class="form-label">Name: </label>
        <input type= "text" CLASS="form-control" id="name" placeholder = "Enter your name">
        </div>
        <div class="mb-3">
            <label for="college"
            class="form=control">College:</label>
            <input type="text class="form-control" id="college" name="college placeholder="Enter your college name">
        </div>
        <div class = "mb-3">
            <label for = "branch" class="form-label">Branch:</label>
            <input type ="text" class="form-control" id="branch" name="branch" placeholder="Enter your branch">
            <input type="hidden" name="submitted" value="1">
    </form>
</section>
    
</body>
</html>