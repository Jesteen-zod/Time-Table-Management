<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
     />

    <style>
        .container2{
            border: 3px solid red;
            width: fit-content;
            padding: 5px;
            display: inline-block;
            margin: 3px;
            align-items: center;
        }
        .c-name{
            font-size: 25px;
            color: black;
            
        }
        .size{
            font-size: 40px;
        }
        .pos{
            right: 0px;
            position: absolute;
            border: red solid;
            margin-top: 5px;
            margin-right: 5px;
        }
        .name{
            font-size: 30px;
            color: brown;
        }
        .position{
            top: 50px;
            position: relative;
        }
        .h_pos{
            position: relative;
            left: 20px;
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
    session_start();
    include_once "shared/connection.php";
    if(!isset($_SESSION['login'])){
        echo "Inavlid Access";
        die;
    }
    if($_SESSION['login']==false){
        echo "Inavlid Access";
        die;
    }
    $username=$_SESSION['username'];
    echo "<div class='d-flex p-2 pos'>
        <span class='material-symbols-outlined size'>person</span>
        <h3 class='name mx-3 text-danger'>$username</h3>
    </div>";
    
    include "ad_menu.html";
    echo "<div class='m-3 container2'>
        <div>
            <a href='ad_day.php' class='c-name'>CS2</a>
        </div>
        <div>
            <a href='delete.php'>
                <button>Delete Time Table</button>
            </a>
            <a href='add_class.php'>
                <button>Add Time Table</button>
            </a>
        </div>
    </div>";
    echo "<div class='position'>";
    $cmd="select ename from event";
    $sql_result=mysqli_query($conn,$cmd);
    echo "<h3 class='h_pos'>Upcoming Events</h3>
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
    <a href='ad_event.php'>
        <button class='mx-3 mb-2'>Add Event</button>
    </a>
    </div>";
?>