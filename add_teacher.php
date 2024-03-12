<?php
    include_once "shared/connection.php";
    include "ad_menu.html";
    if(isset($_POST['submit']))
    {
        $tname=$_POST['name'];
        $phone=$_POST['phone'];
        $subject=$_POST['subject'];
        
        $cmd="insert into teacher(tname,subject,phone) values('$tname','$subject',$phone)";
        $stat=mysqli_query($conn,$cmd);
        if($stat){
            echo "<script>alert('success')</script>";
        }
        else{
            echo "<script>alert('failed')</script>";
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
    <div class="justify-content-center d-flex align-items-center vh-100">
        <form action="add_teacher.php" method="post" class="bg-warning p-5 text-center">
            <h1 class="display-4">Add Teacher</h1>
            <input type="text" placeholder="Enter teacher name" class="form-control" name="name" required>
            <input type="text" placeholder="Enter phone no" class="form-control" name="phone" required>
            <input type="text" placeholder="Enter subject" class="form-control" name="subject" required>
            
            <input type="submit" value="Add" class="bg-success btn text-white mt-3 " name="submit">
        </form>
    </div>
</body>
</html>