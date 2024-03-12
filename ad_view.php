<?php
    include_once "shared/connection.php";
    include "ad_menu.html";
    $day=$_GET['day'];
    if($day=='All Days')
    {
        $cmd="select * from time_table order by day";
        $sql_result=mysqli_query($conn,$cmd);
        echo "<table class='table border w-50'>
        <tr>
            <th class='border'>Hour</th>
            <th class='border'>Subject</th>
            <th class='border'>Teacher</th>
            <th class='border'>Day</th>
        </tr>";
        while($row=mysqli_fetch_assoc($sql_result))
        {
            $subject=$row['subject'];
            $tname=$row['teacher'];
            $hour=$row['hour'];
            $curr_day=$row['day'];
        
            echo "<tr>
            <td class='border'>$hour</td>
            <td class='border'>$subject</td>
            <td class='border'>$tname</td>
            <td class='border'>$curr_day</td>
        </tr>";
        }
        echo "</table>";
    }
    else{
        $cmd="select * from time_table where day='$day'";
        $sql_result=mysqli_query($conn,$cmd);
        echo "<h3>$day</h3>";
        echo "<table class='table border w-50'>
            <tr>
                <th class='border'>hour</th>
                <th class='border'>subject</th>
                <th class='border'>teacher</th>
            </tr>";
        while($row=mysqli_fetch_assoc($sql_result))
        {
            $subject=$row['subject'];
            $tname=$row['teacher'];
            $hour=$row['hour'];
            
            echo "<tr>
                <td class='border'>$hour</td>
                <td class='border'>$subject</td>
                <td class='border'>$tname</td>
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
    
</body>
</html>