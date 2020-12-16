<?php
require_once("../../global.php");
require_once("../../dao/product.php");
require_once("../../dao/category.php");
require_once("../../dao/comment.php");
require_once("../../dao/regular_expression.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
extract($_REQUEST);
// echo $id_product;

raise_view($id_product);

$find_product=find_product($id_product);
if(!empty($find_product)){
    extract($find_product);
    $image_product= $find_product["image"];
//     echo "<pre>";
// print_r($find_product);
// echo "</pre>";

$list_cate_id_pd=find_product_equal_id_cate($id_cate);

$list_comment=list_comment($_GET["id_product"]);
// echo "<pre>";
// print_r($list_comment);
// echo "</pre>";

if($image_product == "img.png" or $image_product == "" ){
    $image_product=$content_url_image_ad.$image_product;
   }else{
       $image_product=$content_url_image_ad.$image_product;
   }
   
$VIEW_NAME="product/detail_product.php";
require("../layout.php");

}else{
    $VIEW_NAME="product/error_product.php";
    require("../layout.php");
    // header("location: ".$client_url."/main_page/");
    // exit();
}






