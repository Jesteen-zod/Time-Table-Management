<?php
    include_once "shared/connection.php";
    include "menu.html";
    echo "<div class='d-flex justify-content-center align-items-center vh-100'>
    <form action='view.php' class='text-center p-5 bg-warning' method=get>    
    <label>Choose day:</label>
    <select name=day>
        <option >Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
        <option>Friday</option>
        <option>All Days</option>
    </select>
    <input type='submit' value='Select' name='submit' class='form-control mt-2 btn btn-success'>

</form>
</div>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: url("bg1.jpg");
        }
    </style>
</head>
<body>
    
</body>
</html>