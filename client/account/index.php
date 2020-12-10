<?php
extract($_REQUEST);
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

if(exist_param("login") ){
    // echo "xin chao";
    $VIEW_NAME="account/login.php";
}else if(exist_param("create_ac") ){
    $VIEW_NAME="account/create_ac.php";
}
else if(exist_param("change_pass") ){
  
    $VIEW_NAME="account/change_pass.php";
}
else if(exist_param("forgot_pass") ){
  
    $VIEW_NAME="account/forgot_pass.php";
}
else if(exist_param("update_user") ){
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";
    $info_user= select_user_one($_SESSION["user"]["id_kh"]);
    extract($info_user);
    // echo "<pre>";
    // print_r($info_user);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $VIEW_NAME="account/update_user.php";
}
require("../layout.php");