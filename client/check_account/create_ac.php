<?php
require("../../global.php");
require_once("../../dao/user-kh.php");
require_once '../../dao/regular_expression.php';
extract($_REQUEST);




// echo $IMAGE_DIR;
if(isset($create_ac)){
      $user_name=htmlspecialchars($_POST["username"]);
    $pass_word=htmlspecialchars($_POST["passwrod"]);
    $check_pass_word=htmlspecialchars($_POST["check_match_Password"]);
    $full_name=htmlspecialchars($_POST["fullname"]);
    $email=htmlspecialchars($_POST["email"]);
    $address=htmlspecialchars($_POST["address"]);
    if(empty($user_name)){
        $error["username"]="username khong phu hop";
    }
    if(empty($pass_word)){
        $error["pass_word"]="pass_word khong phu hop";
    }
    if(empty($check_pass_word)){
        $error["check_match_Password"]="check_match_Password khong phu hop";
    }
    if(empty($full_name)){
        $error["full_name"]="full_name khong phu hop";
    }
    if(empty($email)){
        $error["email"]="email khong phu hop";
    }
    if(empty($address)){
        $error["address"]="address khong phu hop";
    }
    if(empty($date)){
        $error["date"]="date khong phu hop";
    }
    if(!empty($_FILES["upload_avatar"]["type"])){
        
        if(!path_file($_FILES["upload_avatar"]["name"])){
            $error["file"]="file khong dung dinh dang anh";
        }else if(!size_file($_FILES["upload_avatar"]["size"])){
            $error["file"]="file qua lon";
        }
    }
    if(empty($error)){
        if(find_username($username) > 0){
            $error["username"]="username da ton tai";
        }else if($pass_word != $check_pass_word){
            $error["pass_word"]="pass_word khong chung hop";
            $error["check_match_Password"]="check_match_Password khong chung hop";
        }else{
            $up_image=save_file("upload_avatar",$document_root.$content_url."/admin/image/");
            $check_image1= (strlen($up_image) < 0 ) ? "null_image" : $up_image;

            insert_user($user_name,$pass_word,$full_name,$email,$address,
            $check_image1,$gender,$date,$_POST["role"] ,$_POST["status"] ,$_POST["check_admin"]);
          //   echo "<pre>";
          // print_r($_POST);
          // echo "</pre>";
          $error["successfuly"]="successfuly";
            unset($_POST);
            
           
            // header("location: ".$client_url."/main_page/?account&login");
           
           
        }
    }
    $VIEW_NAME="account/create_ac.php";
    require '../layout.php';
   
}else{
    header("location: ".$client_url."/main_page/");
}


