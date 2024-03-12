<?php
    include_once "shared/connection.php";
    include "ad_menu.html";
    echo "<div class='d-flex justify-content-center align-items-center vh-100'>
    <form action='ad_view.php' class='text-center p-5 bg-warning' method=get>    
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
    <style>
        body{
            background-image: url("bg1.jpg");
        }
    </style>
</head>
<body>
    
</body>
</html>

