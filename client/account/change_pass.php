<?php

$user_edit=select_user_one($_SESSION["user"]["id_kh"]);
extract($user_edit);
extract($_REQUEST);

$error=[];
$test="";
if(isset($check_change)){
    $check1=htmlspecialchars($check_pass1);
    $check2=htmlspecialchars($check_pass2);
    if(empty($check1)){
        $error[]="you need add new pass1";
    }
    if(empty($check2)){
        $error[]="you need add new pass2";
    }
    if(empty($error)){
        if($check1 == $check2){
            //$username,$pass,$fullname,$email,$address,$image,$sex,$birth,$role ,$status ,$check_addmin,$id_khachhang
            update_user($username,$check1,$fullname,$email,$address,$image,$sex,$birth,$role ,$status ,$check_admin,$id_kh);
            $user_edit=select_user_one($_SESSION["user"]["id_kh"]);
            extract($user_edit);

            echo "thanh cong";
        }else{
           echo "password not match";
        }
    }else{
        $test=implode("<br />",$error);
        echo $test;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$content_url?>/client/css/change_pass.css" class="css">
</head>
<body>
<section class="main-center">
            <div class="list_detail_bill">
                <form action="" method="post">
                    <table>
                        <thead>
                            <tr>
                                <th>CHANGE PASSWORD</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Current Password:</td>
                                <td><input class="ip" type="password" disabled id="11" name="oldPass" value="<?=$pass?>"> </td>
                                <td><br>
                                </td>
                                <td></td>
                                <td></td>
                                <td><label for="11"><i class="fas fa-pen"></i></label></td>
                            </tr>
                            <tr>
                                <td>New Password:</td>
                                <td><input class="ip" type="password" id="22" name="check_pass1"></td>
                                <td><br>
                                </td>
                                <td></td>
                                <td></td>
                                <td><label for="22"><i class="fas fa-pen"></i></label></td>
                            </tr>
                            <tr>
                                <td>Confirm Password:</td>
                                <td><input class="ip" type="password" id="33" name="check_pass2"></td>
                                <td><br>
                                </td>
                                <td></td>
                                <td></td>
                                <td><label for="33"><i class="fas fa-pen"></i></label></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr style="border: none;">
                                <td colspan="4"><a class="button" href="#popup1" style="color: black;"> 
                                <a href="<?=$url_clien?>/main_page/?account&update_user" style="color:black;"> Cancel</a>
                             
                                <td colspan="4"><input type="submit" value="SUBMIT" name="check_change"></td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
        </section>
</body>
</html>