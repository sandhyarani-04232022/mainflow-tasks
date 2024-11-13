<?php 
session_start();
include('header.php');?>
<div class="signup">
<div class="singup-form-section"></div>
  <div class="signup-form-content-sec">
    <div class="container">
        <div class="row signup-form-">
            <div class="col-md-12 signup-form-col-sec">
                <div class="signup-form-inner-sec">
                    <?php    if(isset($_SESSION['message'])){ include('message.php'); }?>
                    <form action="signup-code.php" method="post">                        
                          <div class="text-center mb-5">
                            <h3>Sign Up</h3>
                          </div>
                        <div class="form-signup-group">                          
                            <!-- <input type="text" class="form-control input-s" id="fname" name="fname" placeholder="Name" value="">  -->
                            <input type="text" class="form-control input-s" id="fname" name="fname" placeholder="Name" value="<?php if(isset($_SESSION["fname"])){ echo $_SESSION["fname"];} ?>" onkeyup="myKeyup(this.id)"> 
                            <?php  if(isset($_SESSION['err_message'])){ include('message.php');} ?>                                                     
                        </div>
                        <div class="form-signup-group">                           
                            <input type="text" class="form-control input-s" id="uname" name="uname" placeholder="Username" value="<?php if(isset($_SESSION["uname"])){ echo $_SESSION["uname"];} ?>" onkeyup="myKeyup(this.id)">   
                            <?php  if(isset( $_SESSION['usernameErr'])){ include('message.php'); }?>  
                            <?php  if(isset($_SESSION['err_message'])){ include('message.php');} ?>                      
                        </div>  
                        <div class="form-signup-group">                            
                            <input type="text" class="form-control input-s" id="email" name="email" placeholder="Email" value="<?php if(isset($_SESSION["email"])){ echo $_SESSION["email"];} ?>" onkeyup="myKeyup(this.id)">  
                            <?php if(isset($_SESSION['emailErr'])){ include('message.php'); }  ?>   
                            <?php if(isset($_SESSION['email_exists_err'])){ include('message.php'); }  ?>
                            <?php if(isset($_SESSION['err_message'])){ include('message.php'); }  ?>                    
                        </div> 
                        <div class="form-signup-group">                          
                            <input type="password" class="form-control input-s" id="pwd" name="pwd" placeholder="Password" value="" onkeyup="myKeyup(this.id)"> 
                            <?php if(isset($_SESSION['err_message'])){ include('message.php'); }?>      
                            <?php if(isset( $_SESSION['pwd_len_err'])){ include('message.php'); }?>     
                            <?php if(isset( $_SESSION['pwd_no_count_err'])){ include('message.php'); }?>
                            <?php if(isset( $_SESSION['pwd_upchar_err'])){ include('message.php'); }?>
                            <?php if(isset( $_SESSION['pwd_lowerchar_err'])){ include('message.php'); }?>                         
                           
                        </div> 
                        <div class="form-signup-group">                           
                            <input type="password" class="form-control input-s" id="cpwd" name="cpwd" placeholder="Confirm Password" value="">                           
                        </div>
                        <div class="form-check-grp">
                            <input class="term-input" type="checkbox" id="check1" name="terms" value="terms" onClick="checkBox(this)">
                            <label class="term">Agree our <a href="">Terms and Conditions</a></label>
                        </div>
                        <div class="register-form-btn">
                            <button type="submit" id="register-btn" class="btn btn-primary register-btn" name="register" disabled> Register </button>
					    </div>    
                        <p class="login-here">Already Registered? <a href="/internshiptask3/login.php">Login</a> here</p>                              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></div>
<?php 
session_unset();

include('footer.php');?>