<?php
    $name=$_POST['uname'];
    $pass=$_POST['upass1'];
    $input_hash=md5($pass);
    include_once "shared/connection.php";
    $cmd="select * from admin where username='$name' and password='$input_hash'";
    $sql_result=mysqli_query($conn,$cmd);
    $tot_rows=mysqli_num_rows($sql_result);
    $row=mysqli_fetch_assoc($sql_result);
    session_start();
    $_SESSION['login']=false;
    
    if($tot_rows==1){
        $_SESSION['login']=true;
        $_SESSION['userid']=$row['userid'];
        $_SESSION['username']=$row['username'];
        echo "Login successful";
        header('location:ad_home.php');        
    }
    else{
        echo "Login failed";
        echo mysqli_error($conn);
    }

?>