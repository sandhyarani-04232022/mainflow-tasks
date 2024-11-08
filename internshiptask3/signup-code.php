<?php 
session_start();
include("dbcon.php");

if(isset($_POST['register'])){
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pwd =  MD5(mysqli_real_escape_string($con, $_POST['pwd']));
    $cpwd =  MD5(mysqli_real_escape_string($con, $_POST['cpwd']));
    if(empty($fname)){
        $_SESSION['err_message'] = "* This field is required";
        header("Location: signup.php");               
        exit(0);    
    }
    if(empty($uname)){
        $_SESSION['err_message'] = "* This field is required";
        header("Location: signup.php");               
        exit(0);    
    }else{
        if(preg_match('/^(?=.{3})(?!.{51})[A-Za-z][A-Za-z0-9]*(?:\.[A-Za-z0-9]+)*$/x',$uname)) { // for english chars + numbers only
            // valid username, alphanumeric & longer than or equals 5 chars
            $_SESSION['usernameErr'] = "* Please enter valid username";   
            header("Location: signup.php");               
            exit(0);         
        }else{
            $check_uname = "SELECT uname FROM users WHERE uname='$uname'";
            $uname_query = mysqli_query($con,  $check_uname );
            if(mysqli_num_rows($uname_query) > 0 ){
                    // Already email exists
                    $_SESSION['usernameErr'] = "Username already exists.";
                    header("Location: signup.php");              
                    exit(0);
            }
        }
    }
    if(empty($email)){
        $_SESSION['err_message'] = "*This field is required";        
        header("Location: signup.php");               
        exit(0);    
    }else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           // $emailErr = "Invalid email format";
            $_SESSION['emailErr'] = "* Invalid email format";   
            header("Location: signup.php");               
            exit(0);
          }
    }
    if(empty($pwd)){
        $_SESSION['err_message'] = "* Please enter your password";
        header("Location: signup.php");               
        exit(0);    
    }
    

    if(!empty($_POST["pwd"]) && ($_POST["pwd"] == $_POST["cpwd"])){


        $pwd = $_POST["pwd"];
        $cpwd = $_POST["cpwd"];


        if (strlen($_POST["pwd"]) <= '8') {           
            $_SESSION['pwd_len_err'] = "Your Password Must Contain At Least 8 Characters!";
            header("Location: signup.php");        
            exit(0);
        }
        elseif(!preg_match("#[0-9]+#",$pwd)) {   
            $_SESSION['pwd_no_count_err'] = "Your Password Must Contain At Least 1 Number!";
            header("Location: signup.php");        
            exit(0);
        }
        elseif(!preg_match("#[A-Z]+#",$pwd)) {        
            $_SESSION['pwd_upchar_count_err'] = "Your Password Must Contain At Least 1 Capital Letter!";
            header("Location: signup.php");        
            exit(0);
        }
        elseif(!preg_match("#[a-z]+#",$pwd)) {
            $_SESSION['pwd_lowerchar_count_err'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
            header("Location: signup.php");        
            exit(0);
        }else{

            $check_email = "SELECT email FROM users WHERE email='$email'";
            $email_query = mysqli_query($con,  $check_email );
            if(mysqli_num_rows($email_query) > 0 ){
                    // Already email exists
                    $_SESSION['message'] = "Already email exists";
                    header("Location: signup.php");              
                    exit(0);
            }else{
                    $user_qurey = "INSERT INTO users (fname,uname,email,password) VALUES ('$fname','$uname','$email','$pwd')";
                    $user_qurey_run = mysqli_query($con, $user_qurey);
                if($user_qurey_run ){                    
                        $_SESSION['message'] = "Registered successfully";                   
                        $_SESSION['message'] .= "<br/><p class='login-here'>Please Login </p>";    
                      
                        header("Location: signup.php");                   
                        exit(0);
                }else{
                    $_SESSION['message'] = "Something went wrong";
                    header("Location: signup.php");               
                    exit(0);
                }
            }
        }       
    }else{
        $_SESSION['message'] = "Password & Confirm password doesn't match";
        header("Location: signup.php");        
        exit(0);
    }    
}else{
    header("Location: signup.php");
    exit(0);
}
session_unset();
?>