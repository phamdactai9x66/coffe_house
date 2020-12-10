
<?php
require '../../global.php';
require_once '../../dao/user-kh.php';

// check_login();

extract($_REQUEST);
// echo "<pre>";
// print_r($info_user["image"]);
// echo "</pre>";
// echo $id_khachhang;
if(exist_param("update")){
    $up_image=save_file("upfile",$document_root.$content_url."/admin/image/");
    // echo strlen($up_image);
            $check_image1= (strlen($up_image) == 0 ) ? $_POST["oldFile"] : $up_image;
            var_dump($check_image1);
            
    try {
        //$fullname,$email,$address,$image,$sex,$birth,$id_kh
        update_userinfo($fullname,$email,$address,$check_image1,$gender,$date_user,$_SESSION['user']["id_kh"]);
      
        $_SESSION['user'] = select_user_one($_SESSION['user']["id_kh"]);
        // header("location: http://localhost:8090/text/coffe-house/client/main_page/?account&update_user");
      
        // echo "<pre>";
        // print_r( $_SESSION['user']);
        // echo "</pre>";

    } 
    catch (PDOException $check) {
        echo $check->getMessage();
    }
   
}
else{
    $_SESSION["user"];
    
}
header("location: ".$client_url."/main_page/?account&update_user");

