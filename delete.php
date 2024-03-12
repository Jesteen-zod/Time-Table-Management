<?php
    include_once "shared/connection.php";
    include "ad_menu.html";
    if(isset($_POST['submit']))
    {
        $day=$_POST['day'];
        $cmd="delete from time_table where day='$day'"; 
        $sql_stat=mysqli_query($conn,$cmd);
        if($sql_stat)
        {
            echo "<script>alert('Successfully deleted')</script>";
        }
        else{
            echo "<script>alert('Failed')</script>";
        }
    }
    
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
    <div class='d-flex justify-content-center align-items-center vh-100'>
        <form action='delete.php' class='text-center p-5 bg-warning' method=POST>    
        <label>Choose day:</label>
        <select name=day>
            <option >Monday</option>
            <option>Tuesday</option>
            <option>Wednesday</option>
            <option>Thursday</option>
            <option>Friday</option>
        </select>
        <input type='submit' value='Select' name='submit' class='form-control mt-2 btn btn-success'>

        </form>
    </div>
</body>
</html>