<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$content_url?>/client/css/create_ac.css" class="css">
</head>
<body>
<section id="parent-sevice">
            <div id="flex-service">
                <div class="box1">
                    <div class="text_lg">
                        <h1>Already have an account?</h1>
                        <p>There are advances being made in science and technology<br>
                            everyday, and a good example of this is the</p>
                        <a href="<?=$client_url?>/main_page/?account&login">LOGIN NOW</a>
                    </div>
                </div>
                <div class="box2">
                    <div class="login_form_inner">
                        <h1>Create an Account</h1>
                        <div class="login_form">
                            <form action="<?=$client_url?>/check_account/create_ac.php" method="post" enctype="multipart/form-data">
                                <div class="avatar">
                                    <img src="<?=$content_url_image_ad?>/user.png" alt=""><br>
                                    <input type="file" name="upload_avatar">
                                </div>
                                <p>fullname</p>
                                <input type="text" name="fullname">
                                <p>Username</p>
                                <input type="text" name="username">
                                <p>Password</p>
                                <input type="password" name="passwrod">
                                <p>check_match_Password</p>
                                <input type="password" name="check_match_Password">
                                <p>Your Email</p>
                                <input type="email" name="email">
                                <div class="table">
                                    <div class="birthday">
                                        <p>Birthday</p>
                                        <input type="date" name="date">
                                    </div>
                                   
                                </div>
                                <div class="gender">
                                        <p>Gender</p>
                                       <div class="flex_gender">
                                                    <div>
                                                            <div class="child_123">
                                                            <input type="radio" name="gender" id="register_gendermale" value="1" />
                                                             <label for="register_gendermale">Male</label>
                                                            </div>
                                                    </div>
                                            <div>
                                                    <div class="child_123">
                                                    <input type="radio" name="gender" id="register_genderfemale" value="0" checked />
                                                            <label for="register_genderfemale">Female</label>
                                                    </div>
                                            </div>
                                       </div>
                                    </div>
                                
                                <p>Address</p>
                                <input type="text" name="address">
                        </div>
                        <input type="hidden" name="role"  value="0">
                        <input type="hidden" name="status"  value="1">
                        <input type="hidden" name="check_admin"  value="0">
                        <div class="creat_account">
                            <input type="checkbox" id="123">
                            <label for="123">Keep me logged in</label>
                        </div>
                        <div class="login_bts">
                            <button type="submit" name="create_ac">REGISTER</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>