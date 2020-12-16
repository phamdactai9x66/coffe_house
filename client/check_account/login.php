<?php
require '../../global.php';
require_once '../../dao/user-kh.php';
require_once '../../dao/regular_expression.php';


extract($_REQUEST);
echo "<pre>";
print_r($_POST);
echo "</pre>";
$error=[];
if(exist_param("btn_login")){
    $username_kh=htmlspecialchars($username);
    $Password_kh=htmlspecialchars($Password);
    if(empty($username_kh)){
        $error["username_kh"]='<i class="fas fa-exclamation"></i> tai khoan khong dc null';
    }
    if(empty($Password_kh)){
        $error["Password_kh"]='<i class="fas fa-exclamation"></i> Mat khau khong dc null';
    }
    if(empty($error)){
     
                //  echo "sai mat khau";
                $user = find_username($username_kh);  
                if($user){
                    if($user['pass'] == $Password_kh and check_PW($Password_kh)){
                      
                        
                        if(isset($_POST["ghi_nho"])){
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
                      
                      

                        header("location: ".$client_url."/main_page/");
                        
                        
                
            }else{
                $error["Password_kh"]='<i class="fas fa-exclamation"></i> Sai mat khau';
               
            }
                }else{
                    $error["username_kh"]=' <i class="fas fa-exclamation"></i> tai khoan ban khong ton tai';
                    $error["Password_kh"]='<i class="fas fa-exclamation"></i> Sai mat khau';
                }    
           
    }
    $VIEW_NAME="account/login.php";
    require '../layout.php';
   
    // $user = find_username($username);

    // // echo "<pre>";
    // // print_r($_REQUEST);
    // // echo "</pre>";
    //     if($user){
        //         if($user['pass'] == $Password and check_PW($Password)){
        //             $MESSAGE = "Đăng nhập thành công!";
                    
        //             if(isset($_POST["ghi_nho"])){
        //                 // echo "add cookie";
        //                 add_cookie("username", $username, 30);
        //                 // echo "<pre>";
        //                 // print_r($_COOKIE);
        //                 // echo "</pre>";
        //                 // add_cookie("mat_khau", $mat_khau, 30);
                        
        //             }
        //             else{
        //                 delete_cookie("username");
        //                 // delete_cookie("mat_khau");
                        
        //             }
        //             $_SESSION["user"] = $user;
                    
        //             echo "dang nhap dung";
        //             header("location: ".$client_url."/main_page/");
                    
                    
            
        // }else{
        //     echo "sai mat khau";
        //     $VIEW_NAME="account/login.php";
        //     require '../layout.php';
           
        // }
    
    // }else{
    //     echo "dang nhap sai";
    //     $VIEW_NAME="account/login.php";
    //     require '../layout.php';
       
    //     // header("http://localhost:8090/text/coffe-house/client/main_page/?account&login");
    //         // $VIEW_NAME="account/login.php";
    // }
}
else{
    // echo "<>";
    // print_r($_REQUEST);
    // echo "</>";
    
    session_unset();
    
    // $mat_khau=$ma_kh="";
    $ma_kh = get_cookie("username");
    
    // echo $ma_kh;
    
    // $mat_khau = get_cookie("mat_khau");

    $VIEW_NAME="account/login.php";
    require '../layout.php';

}



