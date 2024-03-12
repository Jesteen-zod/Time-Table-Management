<?php
    include_once "shared/connection.php";
    include "ad_menu.html";

    $cmd1="select * from subject";
    $cmd2="select * from teacher";
    $sql_result1=mysqli_query($conn,$cmd1);
    $sql_result2=mysqli_query($conn,$cmd2);
    if(isset($_POST['submit']))
    {
        $hour=mysqli_real_escape_string($conn,$_POST['hour']);
        $day=mysqli_real_escape_string($conn,$_POST['day']);
        $teacher=mysqli_real_escape_string($conn,$_POST['teacher']);
        $subject=mysqli_real_escape_string($conn,$_POST['subject']);

        $cmd5="select sid from subject where sname='$subject'";
        $result4=mysqli_query($conn,$cmd5);
        while($row4=mysqli_fetch_assoc($result4)){
            $sid=$row4['sid'];
        }
        $sql_insert="insert into time_table(day,hour,subject,teacher,sid) values('$day',$hour,'$subject','$teacher','$sid')";
        if(mysqli_query($conn,$sql_insert))
        {
            echo "<script>alert('success')</script>";
        }
        else
        {
            echo `<script>alert("failed")</script>`;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .pos{
            margin-left: 750px;
            margin-top: -200px;
        }
        body{
            background-image: url("bg1.jpg");
        }
    </style>

</head>
<body>
    <div class='d-flex justify-content-center align-items-center vh-100'>
        <form action='add_class.php?sid=$sid' class='text-center p-5 bg-warning' method='post'>
        <h3>Enter Time Table</h3>
        <label>Choose hour:</label>
        <select name='hour'>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
        </select>
        <br>
        <label>Choose day:</label>
        <select name='day'>
            <option>Monday</option>
            <option>Tuesday</option>
            <option>Wednesday</option>
            <option>Thursday</option>
            <option>Friday</option>
        </select>
        <br>
        <label>Choose Subject:</label>
        <select name='subject'>
            <?php
                while($row=mysqli_fetch_array($sql_result1,MYSQLI_ASSOC)):;
            ?>
            <option>
                <?php echo $row['sname']; 
                $sid=$row['sid'];
                ?>
            </option>
            <?php
                endwhile;
            ?>
        </select>
        <br>
        <label>Choose Teacher:</label>
        <select name='teacher'>
            <?php
                while($row=mysqli_fetch_array($sql_result2,MYSQLI_ASSOC)):;
            ?>
            <option>
                <?php echo $row['tname'];
                ?>
            </option>
            <?php
                endwhile;
            ?>
        </select>
        <br>
        <input type='submit' value="Add" name="submit" class='form-control mt-2 btn btn-success'>
        </form>
    </div>
    <a href="ad_home.php">
            <button class="pos">Save</button>
    </a>
</body>
</html>