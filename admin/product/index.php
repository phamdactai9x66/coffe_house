<?php
require_once("../../global.php");
require_once("../../dao/product.php");
require_once("../../dao/category.php");
$brand_category="product";
extract($_REQUEST);

$error=[];
$test="";
if(exist_param("insert_product")){
    if(isset($_POST["post_add_user"])){
        $image1=save_file("image",$document_root.$content_url."/admin/image/");
        $image_up= (strlen($image1) < 0) ? "img.png" : $image1;
        try{
            $name_EN=htmlspecialchars($_POST["name_EN"]);
            $name_VN=htmlspecialchars($_POST["name_VN"]);
            $quantily=htmlspecialchars($_POST["quantily"]);
            $prict=htmlspecialchars($_POST["prict"]);
            $discount=htmlspecialchars($_POST["discount"]);
           
            if(empty($name_EN)){
                $error[]="ban an phai phan vao name_EN";
            }
            if(empty($name_VN)){
                $error[]="ban an phai phan vao name_VN";
            }
            if(empty($quantily)){
                $error[]="ban an phai phan vao quantily";
            }
            if(empty($prict)){
                $error[]="ban an phai phan vao prict";
            }
           
            if(empty($error)){
            insert_product($name_EN,$name_VN,$image_up,$quantily,$prict,$discount,$desription,$content,$id_cate);
            unset($_POST);
            echo "thanh cong";
            }else{
                $test=implode("<br />",$error);
                echo $test;
            }
            $list_cate=list_cate();
        }catch(PDOException $check){
            echo $check->getMessage();
        }
    }
   
    $VIEW_NAME="product/add_product.php";
}else if(exist_param("list_product")){
   try{
    $list_product=hang_hoa_sildeshow();
   }catch(PDOException $check){
       echo $check->getMessage();
   }
    // echo "<pre>";
    // print_r($list_product);
    // echo "</pre>";
    $VIEW_NAME="product/list_product.php";
}else if(exist_param("edit_product")){
    $list_product=find_product($id_product);
    $list_cate=list_cate();
    extract($list_product);
    $VIEW_NAME="product/edit_product.php";
}
else if(exist_param("update_product")){

    if(isset($post_add_user)){
        $test_image=save_file("image",$document_root.$content_url."/admin/image/");
        // echo $test_image;
        $image_up2=(strlen($test_image) > 0) ? $test_image : $image_up;
     
        try{
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            //$name_EN,$name_VN,$image,$quantily,$prict,$discount,$view_pd,$desription,$content,$id_cate,$id_product
            update_product($name_EN,$name_VN,$image_up2,$quantily,$prict,$discount,$view,$desription,$content,$id_cate,$_GET["id_product"]);
            $list_product=find_product($_GET["id_product"]);
            $list_cate=list_cate();
            extract($list_product);
                //  echo "<pre>";
                // print_r($list_product);
                // echo "</pre>";
        }catch(PDOException $check){
            echo $check->getMessage();
        }
    echo "thang cong";
    }
   
    
   
    $VIEW_NAME="product/edit_product.php";

}
else if(exist_param("delete_product")){
    try{
        delete_product($id_product);
            $list_product=hang_hoa_sildeshow();
      
    }catch(PDOException $check){
        echo $check->getMessage();
    }
    $VIEW_NAME="product/list_product.php";
}
else if(exist_param("add_categoty")){
    $list_cate=list_cate();
    // echo "<pre>";
    // print_r($list_cate);
    // echo "</pre>";
    $VIEW_NAME="product/add_product.php";
}
else{
    $list_product=hang_hoa_sildeshow();
    $VIEW_NAME="product/list_product.php";
}



require("../layout.php");
