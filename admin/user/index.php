<?php
require_once("../../global.php");
require("../../dao/user-kh.php");
$brand_category="User";
extract($_REQUEST);
$error=[];
$test="";

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
if(exist_param("add_user")){
   if(isset($_POST["post_add_user"])){
       
    $up_image=save_file("image",$document_root.$content_url."/admin/image/");
    $check_image1= (strlen($up_image) < 0 ) ? "null_image" : $up_image;
    
    $user_name=htmlspecialchars($_POST["user"]);
    $pass_word=htmlspecialchars($_POST["pass_word"]);
    $full_name=htmlspecialchars($_POST["full_name"]);
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
    if(empty($error)){
              //$username,$pass,$fullname,$email,$address,$image,$sex,$birth,$role ,$status ,$check_addmin 
             
              insert_user($user_name,$pass_word,$full_name,$email,$address,
              $check_image1,$Sex,$_POST["birth"],$_POST["role"] ,$_POST["status"] ,$_POST["check_admin"]);
              echo "<pre>";
            print_r($_POST);
            echo "</pre>";
              unset($_POST);
              
              echo "thang cong";
    }else{
        $test=implode("<br />",$error);
        echo $test;
      
    }
   }
   //$username,$pass,$fullname,$email,$address,$image,$sex,$birth,$role ,$status ,$check_addmin 

    $VIEW_NAME="user/add_user.php";
}else if(exist_param("delete_cate")){
    try{
        delete_user($id_user);
        $list_cate=list_user();

    }catch(PDOException $check){
        echo $check->getMessage();
    }
    $VIEW_NAME="user/list_user.php";
}else if(exist_param("detail_user")){
    try{
        $list_cate=select_user_one($id_user);
        extract($list_cate);
        // echo "<pre>";
        // print_r($list_cate);
        // echo "</pre>";
        if(isset($post_add_user)){
            $up_image=save_file("image",$document_root.$content_url."/admin/image/");
            $check_image1= (strlen($up_image) < 0 ) ? $hidden_image : $up_image;
            // echo "<pre>";
            //           print_r($_POST);
            //           echo "</pre>";
            
            $user_name=htmlspecialchars($_POST["user"]);
            $pass_word=htmlspecialchars($_POST["pass_word"]);
            $full_name=htmlspecialchars($_POST["full_name"]);
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
            if(empty($error)){
                    $new_password=htmlspecialchars($_POST["check_match_pass"]);
                    
                    if($new_password == $pass_word){
                        update_user($user_name,$pass_word,$full_name,$email,$address,
                        $check_image1,$Sex,$_POST["birth"],$_POST["role"] ,$_POST["status"] ,$_POST["check_admin"] ,$id_user);
                        $list_cate=select_user_one($id_user);
                        echo "thang cong";
                    }else{
                       echo "ban mat khau khong match.";
                    }
                 
                    //   extract($list_cate);
                    //   echo "<pre>";
                    //   print_r($list_cate);
                    //   echo "</pre>";
                    //   unset($_POST);
                      
                     
            }else{
                $test=implode("<br />",$error);
                echo $test;
            }
           }
        
    }catch(PDOException $check){
        echo $check->getMessage();
    }
    $VIEW_NAME="user/detail_user.php";
}
else if(exist_param("list_user")){
    try{
        if(isset($_GET["list_user"])){
           $list_cate=kh_sildeshow();
        //    echo "<pre>";
        //     print_r($list_cate);
        //     echo "</pre>";
        //    extract($list_cate);
         
        }else{
           
            $VIEW_NAME="category/add_categoty.php";
            require("../layout.php");
            return;
        }
    }catch(PDOException $check){
        $check->getMessage();
    }

    $VIEW_NAME="user/list_user.php";
}
else{
    $VIEW_NAME="user/add_user.php";
}
require("../layout.php");
?>
