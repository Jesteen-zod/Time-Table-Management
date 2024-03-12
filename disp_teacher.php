<?php
    include_once "shared/connection.php";
    include "ad_menu.html";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $cmd="select * from teacher where tname='$name'";
        $result=mysqli_query($conn,$cmd);
        echo "<h3>Details</h3>";
        echo "<table class='table border w-50'>
            <tr>
                <th class='border'>ID</th>
                <th class='border'>name</th>
                <th class='border'>subject</th>
                <th class='border'>phone no</th>
            </tr>";
        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row['t_id'];
            $name=$row['tname'];
            $subject=$row['subject'];
            $phone=$row['phone'];
            echo "<tr>
                <td class='border'>$id</td>
                <td class='border'>$name</td>
                <td class='border'>$subject</td>
                <td class='border'>$phone</td>
            </tr>";  
        }
        echo "</table>";
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
        <form action="disp_teacher.php" method="post" class="bg-warning p-5 text-center">
            <h1 class="display-4">Enter Details</h1>
            <input type="text" placeholder="Enter name" class="form-control" name="name" required>
        
            <input type="submit" value="Submit" name="submit" class="bg-success btn text-white mt-3">
        </form>
    </div>
</body>
</html>