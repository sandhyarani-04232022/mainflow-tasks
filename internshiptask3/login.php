<?php 
session_start();
include('header.php');?> 
<div class="login-form-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 login-form-col-sec">
                <div class="login-form-inner-sec">     
                    <form action="login-code.php" method="post">
                        <span class="login-form-logo"><i class="fa-solid fa-mountain-sun"></i></span>
                        <span class="login-form-title">Log in</span>
                        <div class="form-group">
                            <input type="text" class="input-l" name="usrname" placeholder="Username" value="">
                            <span class="material-symbols-outlined">person</span>
                        </div>
                        <div class="form-group pwd-sec">
                            <input type="password" class="input-l" id="password" name="passwrd" placeholder="Password" value="">
                            <span class="material-symbols-outlined">lock</span>                         
                            <span class="material-symbols-outlined" id="togglePwd" onclick="toggle(this)">visibility_off</span>
                        </div>   
                       <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="remember-me" value="remember-me">
                            <label class="form-check-label">Remember me</label>
                        </div>
                        <div class="container-login-form-btn">
                            <button type="submit" id="login-btn" class="btn btn-primary login-form-btn" name="login"> Login </button>
					    </div>                       
                        <?php    if(isset($_SESSION['login_error'])){ include('message.php'); }?>     
                        <?php    if(isset($_SESSION['login_err_message'])){ include('message.php'); }?> 
                        <?php    if(isset($_SESSION['pwd_error'])){ include('message.php'); }?>        
                    </form>  
                    <div class="text-center p-t-50"">
                        <a class="txt1" href="#"> Forgot Password? </a>
					</div>                       
                </div>
            </div>
        </div>
    </div>
</div>
<?php
session_unset();

include('footer.php');?>
