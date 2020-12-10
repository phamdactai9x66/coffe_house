<?php
require_once("../../global.php");
require 'vendor/autoload.php';
// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";


if(exist_param("cart")){
   
    require_once("../../dao/product.php");
    $VIEW_NAME="main_page/cart.php";
}else if(exist_param("account")){
    require_once("../../dao/user-kh.php");
    // echo $document_root.$client_url."/account/";
    $VIEW_NAME="account/index.php";
}
else if(exist_param("contact")){
    // echo $document_root.$client_url."/account/";
    $VIEW_NAME="main_page/contact.php";
}
else{
    require_once("../../dao/product.php");
    require_once("../../dao/category.php");
    $list_cate=list_cate();
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";
    $VIEW_NAME="main_page/home.php";
}
require("../layout.php");