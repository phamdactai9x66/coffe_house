<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo "</pre>";
// print_r($_COOKIE);
// echo "</pre>";
// echo $_COOKIE["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="<?=$content_url?>/client/css/login.css" class="css">

</head>
<body>
<section id="parent-sevice">
    <?php
    // if(isset($_COOKIE["username"])){
    //     echo $_COOKIE["username"]."asdasd";
    // }
    ?>
            <div id="flex-service">
                <div class="box1">
                    <div class="text_lg">
                    <h1>New to our Shop?</h1>
                    <p>There are advances being made in science and technology<br> 
                        everyday, and a good example of this is the</p> 
                    <a href="<?=$client_url?>/main_page/?account&create_ac">CREATE AN ACCOUNT</a> </div> 
                </div>
                <div class="box2">
                    <div class="login_form_inner">
                    <h1>Welcome Back !<br>Please Sign in now</h1>
                    <div class="login_form">
                    <!-- <?=$client_url?>/check_account/login.php -->
                    <form action="<?=$client_url?>/check_account/login.php" method="post" >
                    <p>Your username</p>
                    <input type="text" name="username" value="<?php if(isset($_COOKIE["username"])){ echo $_COOKIE["username"];} ?>" >
                    <div class="notifiled_error"><?php if(isset($error["username_kh"] )){echo $error["username_kh"];}?></div>
                    <p>Password</p>
                    <input type="password" name="Password">
                    <div class="notifiled_error"><?php  if(isset($error["Password_kh"] )){echo $error["Password_kh"];}?></div>
                    </div>
                    <div class="creat_account">
                        <input type="checkbox" name="ghi_nho"  id="11" value="1" >
                        <label for="11">Remember me</label>
                        <a href="<?=$client_url?>/main_page/?account&forgot_pass">Forget Password?</a>
                    </div>
                    <div class="login_bts">
                        <button type="submit" name="btn_login">LOGIN</button>
                    </div>
                    </form>
                    </div>                   
                </div>
            </div>
        </section>  
</body>
</html>