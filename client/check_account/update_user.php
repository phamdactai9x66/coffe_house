
<?php
require '../../global.php';
require_once '../../dao/user-kh.php';
require_once '../../dao/regular_expression.php';
// check_login();

extract($_REQUEST);
// echo "<pre>";
// print_r($info_user["image"]);
// echo "</pre>";
// echo $id_khachhang;
$error=[];
$test="";
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
if(exist_param("update")){
    $fullname=htmlspecialchars($_POST["fullname"]);
    $email=htmlspecialchars($_POST["email"]);
    $address=htmlspecialchars($_POST["address"]);
    if(!check_name($fullname) or empty($fullname)){
        $error[]="ban nhap khong dung dinh danh name";
    }
    if(!check_gmail($email) or empty($email)){
        $error[]="ban nhap khong dung dinh danh email";
    }
    if(!check_address($address) or empty($address)){
        $error[]="ban nhap khong dung dinh danh address";
    }
    if(!path_file($_FILES["upfile"]["name"])){
        $error[]="file phai la dinh dang jpg,png,gif,tmp";
    }
    if(!size_file($_FILES["upfile"]["size"])){
        $error[]="kich thuoc file < 15mb";
    }
    
    $up_image=save_file("upfile",$document_root.$content_url."/admin/image/");
    // echo strlen($up_image);
            $check_image1= (strlen($up_image) == 0 ) ? $_POST["oldFile"] : $up_image;
            // var_dump($check_image1);
    if(empty($error)){
        try {
        
            //$fullname,$email,$address,$image,$sex,$birth,$id_kh
            update_userinfo($fullname,$email,$address,$check_image1,$gender,$date_user,$_SESSION['user']["id_kh"]);
          
            $_SESSION['user'] = select_user_one($_SESSION['user']["id_kh"]);
            // header("location: http://localhost:8090/text/coffe-house/client/main_page/?account&update_user");
          
            // echo "<pre>";
            // print_r( $_SESSION['user']);
            // echo "</pre>";
            echo "thanh cong";
        } 
        catch (PDOException $check) {
            echo $check->getMessage();
        }
    }else{
        $test=implode("<br />",$error);
    }        
    
   
}
else{
    $_SESSION["user"];
    
}
echo $test;
// header("location: ".$client_url."/main_page/?account&update_user");
$VIEW_NAME="account/update_user.php";
        require '../layout.php';

