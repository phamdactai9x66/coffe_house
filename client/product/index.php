<?php
require_once("../../global.php");
require("../../dao/product.php");
require("../../dao/category.php");
require("../../dao/comment.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
extract($_REQUEST);
raise_view($id_product);

$find_product=find_product($id_product);
// echo "<pre>";
// print_r($find_product);
// echo "</pre>";
$image_product= $find_product["image"];
extract($find_product);

$list_cate_id_pd=find_product_equal_id_cate($id_cate);

$list_comment=list_comment($id_product);
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