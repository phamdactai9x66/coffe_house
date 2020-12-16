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
else if(exist_param("history_cart") ){
  
    $VIEW_NAME="account/history_cart.php";
}
else if(exist_param("detaill_bill") ){
  
    $VIEW_NAME="account/detaill_bill.php";
}
else if(exist_param("update_user") ){
  
   
   
    $VIEW_NAME="account/update_user.php";
}
require("../layout.php");