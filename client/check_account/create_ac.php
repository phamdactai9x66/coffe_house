<?php
require("../../global.php");
require_once("../../dao/user-kh.php");
extract($_REQUEST);

echo "<pre>";
print_r($_POST);
echo "</pre>";

// echo $IMAGE_DIR;
if(isset($create_ac)){
    if($passwrod != $check_match_Password){
        echo "tai khoaon mat khau khong match";
        $VIEW_NAME="account/create_ac.php";
        require '../layout.php';
    }
    else if(find_username($username) > 0){
        echo "ma nay da duoc su dung";
        $VIEW_NAME="account/create_ac.php";
        require '../layout.php';
    }
    else{//$name,$taiKhoan,$matkhau,$image,$vaitro,$kichhoat,$gmail
        $up_image=save_file("upload_avatar",$document_root.$content_url."/admin/image/");
    $check_image1= (strlen($up_image) < 0 ) ? "null_image" : $up_image;
    
    $user_name=htmlspecialchars($_POST["username"]);
    $pass_word=htmlspecialchars($_POST["passwrod"]);
    $full_name=htmlspecialchars($_POST["fullname"]);
    $email=htmlspecialchars($_POST["email"]);
    $address=htmlspecialchars($_POST["address"]);
    if(empty($user_name)){
        $error[]="ban chua nhap vao name";
    }
    if(empty($pass_word)){
        $error[]="ban chua nhap vao pass_word";
    }
    if(empty($full_name)){
        $error[]="ban chua nhap vao full_name";
    }
    if(empty($email)){
        $error[]="ban chua nhap vao email";
    }
    if(empty($address)){
        $error[]="ban chua nhap vao address";
    }
    if(empty($_POST["date"])){
        $error[]="ban chua nhap vao date";
    }
    if(empty($error)){
              //$username,$pass,$fullname,$email,$address,$image,$sex,$birth,$role ,$status ,$check_addmin 
             
              insert_user($user_name,$pass_word,$full_name,$email,$address,
              $check_image1,$gender,$date,$_POST["role"] ,$_POST["status"] ,$_POST["check_admin"]);
            //   echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
              unset($_POST);
              
             
              header("location: http://localhost:8090/text/coffe-house/client/main_page/?account&login");
              echo "thang cong";
    }else{
        $test=implode("<br />",$error);
        echo $test;
        $VIEW_NAME="account/create_ac.php";
        require '../layout.php';
    }
   
    }
}else{
    header("location: http://localhost:8090/text/coffe-house/client/main_page/");
}


