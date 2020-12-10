<?php
// var_dump($info_user["image"]);
if(empty($image)){
    if($sex == 1){
       $image="".$content_url_image_ad."undraw_male_avatar_323b%20(1).png";
    }else{
        $image="".$content_url_image_ad."undraw_female_avatar_w3jk%20(2).png";
    }
 }else{
     $image=$content_url_image_ad.$image;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$content_url?>/client/css/update_user.css" class="css">
</head>
<body>
<section class="main-center">

            <form action="<?=$url_clien?>/check_account/update_user.php" method="post" class="list_detail_bill" enctype="multipart/form-data">
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>MY PROFILE</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fullname</td>
                                <td><input class="ip" type="text" id="11" name="fullname" value="<?=$fullname?>" > </td>
                                <td><br>
                                </td>
                                <td></td>
                                <td></td>
                                <td><label for="11"><i class="fas fa-pen"></i></label></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input class="ip" type="email" id="12" name="email" value="<?=$email?>" ></td>
                                <td><br>
                                </td>
                                <td></td>
                                <td></td>
                                <td><label for="12"><i class="fas fa-pen"></i></label></td>
                            </tr>
                            <tr>
                                <td>Adress</td>
                                <td><input class="ip" type="text" id="13" name="address" value="<?=$address?>" ></td>
                                <td> <br>
                                </td>
                                <td></td>
                                <td></td>
                                <td><label for="13"><i class="fas fa-pen"></i></label></td>
                            </tr>
                            <tr>
                                <td>Birthday</td>
                                <td><input type="date" name="date_user" id="14" value="<?=$birth?>"></td>
                                <td>Gender<br>
                                </td>
                                <td><input type="radio" name="gender" id="register_gendermale" value="1" <?=$sex?'checked': ''?>/> <label for="register_gendermale">Male</label></td>
                                <td><input type="radio" name="gender" id="register_genderfemale" value="0" <?=!$sex?'checked': ''?> /><label for="register_genderfemale" id="female">Female</label></td>
                                    <td><label for="14"><i class="fas fa-pen"></i></label></td>
                            </tr>
                           


                        </tbody>
                        <tfoot>
                            <tr style="border: none;">
                                <td colspan="4"><a class="button" href="#popup1" style="color: black;" href="">
                                 <a href="<?=$client_url?>/main_page/?account&change_pass" style="color:black;"> Change Password ?</a></td>
                                <td colspan="4"><input type="submit" value="SUBMIT" name="update"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="buy_now">
                    <table style="width: 100%;border-collapse: collapse;">
                        <tr>
                            <td></td>
                            <td><img src="<?=$image?>" id="image_file"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maximum file size 1 MB<br>
                                Format: .JPEG, .PNG</td>
                            <td></td>
                        </tr>
                    </table>
                    <input type="file" name="upfile">
                    <input type="hidden" name="oldFile" value="<?=$info_user["image"]?>">
                    </div>
            </form>
        </section>
        
        
</body>
</html>