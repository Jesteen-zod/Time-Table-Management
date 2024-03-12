<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            border: 3px solid red;
            display: inline-flex;
        }
        .c-name{
            font-size: 25px;
            padding: 3px;
            color: black;
        }
        .position{
            top: 50px;
            position: relative;
        }
        body{
            background-image: url("bg1.jpg");
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
    include_once "shared/connection.php";
    include "menu.html";
    echo "
        <div class='w-auto container'>
            <a href='day.php' class='c-name'>CS2</a> 
        </div>";
    $cmd="select ename from event";
    $sql_result=mysqli_query($conn,$cmd);
    echo "<div class='position'>
    <table class='table border w-50'>
    <tr>
    <th class='border'>Events</th>
    </tr>";
    while($row=mysqli_fetch_assoc($sql_result))
    {
        $event=$row['ename'];
        echo "<tr>
        <td class='border'>$event</td>
        </tr>";
    }
    echo "</table>
    </div>";    
?>