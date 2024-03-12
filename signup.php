<?php
    $name=$_POST['uname'];
    $pass1=$_POST['upass1'];
    $pass2=$_POST['upass2'];
    if($pass1!=$pass2)      //checking pass1 and pass2
    {
        echo "Password missmatch";
        die;
    }
    include_once "shared/connection.php"; 
    $cmd="select * from admin where username='$name'";
    $sql_result=mysqli_query($conn,$cmd);       //getting select query result
    $tot_rows=mysqli_num_rows($sql_result);     //returning no.of rows
    if($tot_rows>0)
    {
        echo"<script>alert('Username already taken, please go back')</script>";  //display username exist
        die;
    }
    $hash=md5($pass1);
    $query="insert into admin(username,password) values ('$name','$hash')";

    $con_stat=mysqli_query($conn,$query);
    if($con_stat){
        echo "Signed up";
        header('location:login.html'); //redirect to login.html
    }
    else{
        echo "Failed to signup";
    }

?>