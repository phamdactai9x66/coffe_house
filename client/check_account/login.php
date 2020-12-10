<?php
require '../../global.php';
require_once '../../dao/user-kh.php';


extract($_REQUEST);


if(exist_param("btn_login")){
    $user = find_username($username);

    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
        if($user){
                if($user['pass'] == $Password){
                    $MESSAGE = "Đăng nhập thành công!";
                    
                    if($_POST["ghi_nho"]){
                        // echo "add cookie";
                        add_cookie("username", $username, 30);
                        // echo "<pre>";
                        // print_r($_COOKIE);
                        // echo "</pre>";
                        // add_cookie("mat_khau", $mat_khau, 30);
                    }
                    else{
                        delete_cookie("username");
                        // delete_cookie("mat_khau");
                    }
                    $_SESSION["user"] = $user;
                    
                    echo "dang nhap dung";
                    header("location: ".$client_url."/main_page/");
                    die();
            
        }else{
            echo "dang nhap sai";
            $VIEW_NAME="account/login.php";
            require '../layout.php';
            die();
        }
    
    }else{
         header("location: ".$client_url."/main_page/?account&login");
        echo "dang nhap sai31231";
        // header("http://localhost:8090/text/coffe-house/client/main_page/?account&login");
            // $VIEW_NAME="account/login.php";
    }
}
else{
    // echo "<>";
    // print_r($_REQUEST);
    // echo "</>";
    
    session_unset();
    
    // $mat_khau=$ma_kh="";
    $ma_kh = get_cookie("username");
    // $mat_khau = get_cookie("mat_khau");

    header("location: ".$client_url."/main_page/main_home.php");

}



