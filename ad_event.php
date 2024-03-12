<?php
    include_once "shared/connection.php";
    include "ad_menu.html";
    if(isset($_POST['submit']))
    {
        $name=$_POST['event'];
        $cmd3="insert into event(ename) values('$name')";
        $stat=mysqli_query($conn,$cmd3);
        if($stat)
        {
            echo "<script>alert('Successfully')</script>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";
            echo mysqli_error($conn);
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
<div class="d-flex justify-content-center align-items-center vh-100">
        <form action='ad_event.php' class='text-center p-5 bg-warning' method='post'>
            <h3>Add Event</h3>
            <input type="text" class="form-control mt-2" placeholder="Enter Event" name="event">
            <input type="submit" name="submit" class="form-control mt-2 btn btn-success">
        </form>
    </div>
</body>
</html>