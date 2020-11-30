<?php
require_once("../../global.php");
require("../../dao/category.php");
$list_cate=list_cate();
extract($_REQUEST);
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

$brand_category="category_product";
$error=[];
$test="";
// var_dump(exist_param("delete"));
//$name_EN,$name_VN
if(exist_param("insert_cate")){
    try{
        if(isset($_GET["insert_cate"])){
           
            $name_vn_cate=htmlspecialchars($name_vn);
            $name_en_cate=htmlspecialchars($name_en);
            if(empty($name_vn)){
                $error[]="chua nhap vao name_vn";
            }
            if(empty($name_en)){
                $error[]="chua nhap vao name_en";
            }
            if(empty($error)){
                 insert_loai_SP($name_en,$name_vn);
                 echo "thanh cong";
            }else{
                $test=implode("<br />",$error);
                echo "<pre>";
                print_r($test);
                echo "</pre>";
            }
          
        }
    }catch(PDOException $check){
        $check->getMessgae();
    }finally{
        unset($_POST);
        $VIEW_NAME="category/add_categoty.php";
    }
}else if(exist_param("edit_cate")){
    try{
        if(isset($_GET["edit_cate"])){

           $check_cate= check_exist_cate($id_cate);
           extract($check_cate);
            if(isset($_POST["edit_cate2"])){
                $name_vn_cate=htmlspecialchars($name_vn);
                 $name_en_cate=htmlspecialchars($name_en);
            if(empty($name_vn)){
                $error[]="chua nhap vao name_vn";
            }
            if(empty($name_en)){
                $error[]="chua nhap vao name_en";
            }
            if(empty($error)){
                edite_loai_SP($name_en,$name_vn,$id_cate);
                 echo "thanh cong";
                 $check_cate= check_exist_cate($id_cate);
                 extract($check_cate);
            }else{
                $test=implode("<br />",$error);
                echo "<pre>";
                print_r($test);
                echo "</pre>";
            }
            }
            $VIEW_NAME="category/edit_cate.php";
        }
    }catch(PDOException $check){
        $check->getMessgae();
    }
}else if(exist_param("list_cate")){
    try{
        if(isset($_GET["list_cate"])){
           $list_cate=list_cate();
        //    echo "<pre>";
        //     print_r($list_cate);
        //     echo "</pre>";
        //    extract($list_cate);
           $VIEW_NAME="category/list_cate.php";
        }else{
           
            $VIEW_NAME="category/add_categoty.php";
            require("../layout.php");
            return;
        }
    }catch(PDOException $check){
        $check->getMessgae();
    }
}else if(exist_param("delete_cate")){
    try{
                delete_loai_SP($id_cate);
                $list_cate=list_cate();
            // delete_loai_SP($id_cate);
         
       
    }catch(PDOException $check){
        $check->getMessgae();
    }
    $VIEW_NAME="category/list_cate.php";
}else{
    $VIEW_NAME="category/add_categoty.php";
}
   
    
 
// echo "<pre>";
// print_r($list_cate);
// echo "</pre>";

require("../layout.php");