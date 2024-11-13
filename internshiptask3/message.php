<?php
  if(isset($_SESSION['message'])){?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hey !</strong> <?=$_SESSION['message']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

 <?php  }elseif(isset($_SESSION['err_message'])){?>

        <div class="error-msg">
        <?=$_SESSION['err_message']?>
        </div>

 <?php  } elseif(isset($_SESSION['emailErr'])){?>

        <div class="error-msg">
            <?=$_SESSION['emailErr']?>
        </div>

<?php }elseif(isset($_SESSION['usernameErr'])){?>

    <div class="error-msg">
        <?=$_SESSION['usernameErr']?>
    </div>

<?php }elseif(isset($_SESSION['login_error'])){?>

    <div class="alert alert-danger" role="alert">
    <?=$_SESSION['login_error']?>
    </div>

<?php }elseif(isset($_SESSION['login_err_message'])){?>

<div class="alert alert-danger" role="alert">
<?=$_SESSION['login_err_message']?>
</div>

<?php } elseif(isset($_SESSION['pwd_error'])){?>

<div class="alert alert-danger" role="alert">
<?=$_SESSION['pwd_error']?>
</div>
<?php }elseif(isset($_SESSION['pwd_len_err'])){?>
    <div class="alert alert-danger" role="alert">
    <?=$_SESSION['pwd_len_err']?>
    </div>
    
<?php } elseif(isset($_SESSION['pwd_no_count_err'])){?>
    <div class="alert alert-danger" role="alert">
    <?=$_SESSION['pwd_no_count_err']?>
    </div>
    
<?php } elseif(isset($_SESSION['pwd_upchar_err'])){?>
    <div class="alert alert-danger" role="alert">
    <?=$_SESSION['pwd_upchar_err']?>
    </div>
    
<?php }elseif(isset($_SESSION['pwd_lowerchar_err'])){?>
    <div class="alert alert-danger" role="alert">
        <?=$_SESSION['pwd_lowerchar_err']?>
    </div>
    
<?php }else{
    
}
?>

