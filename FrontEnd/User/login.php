<?php
    session_start();

    $localhost="127.0.0.1";
    $user="root";
    $pass="";
    $database="crypto_razer";
   
    $con=mysqli_connect($localhost,$user,$pass,$database);
    if(!$con)
    {
        die("Connection Failed :".mysqli_connect_error());
    }
   
    if($_GET['userName'] == NULL || $_GET['password']== NULL )
        {
            echo "<script type='text/javascript'>alert('Please Fill all the Fields');";
            echo  'window.location= "../index.php";';
            echo "</script>"; 
        }

        $_user = stripslashes($_GET['userName']);
        $_user = mysqli_real_escape_string($con,$_user);
        $pass = stripslashes($_GET['password']);
        $query="select *from donor where name='$_user' && password='$pass';";
        $result = mysqli_query($con,$query);
        
        $row=mysqli_fetch_array($result);
        
        if($row!=null)
        {
            $_SESSION['id'] = $row[4];
            $_SESSION['uname'] = $_user;
            header("location:../afterindex.php");
        }
        else
        {
            echo "<script type='text/javascript'>alert('WRONG _user or PASSWORD');";
            echo  'window.location= "../index.html";';
            echo "</script>";
            //header("location:../index.php");
        }
?>