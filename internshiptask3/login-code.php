<?php 
session_start();
include("dbcon.php");

if(isset($_POST['login'])){
    //echo "Login successfull";

        $uname = $_POST['uname'];  
        $pwd = $_POST['pwd'];  
       // echo $uname . " , ". $pwd;exit;

        if(empty($uname) && empty($pwd)){           
            $_SESSION['login_err_message'] = "* Please enter Username & Password";
            header("Location: login.php");               
            exit(0);    
        }
       
        //to prevent from mysqli injection  
        //$uname = stripcslashes($uname);  
        //$pwd = stripcslashes($pwd);  
        $uname = mysqli_real_escape_string($con, $uname);  
        $pwd =   MD5(mysqli_real_escape_string($con, $pwd));  
      //echo $uname . " , ". $pwd;exit;
                  
        $sql = "select *from users where uname = '$uname' and password = '$pwd'";  
        $result = mysqli_query($con, $sql); 
       // print_r($result); 
      //  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       // print_r($row);
        $count = mysqli_num_rows($result);  
       // echo $count;exit;
        if($count == 1){         
            header("location: http://localhost/internshiptask1/");
            exit(0);
        }else{  
            $_SESSION['login_error']= "Your Login Name or Password is invalid";
            header("location: login.php");
            exit(0);
         }     
}else{
    header("Location: login.php");
    exit(0);
}
session_unset();
?>