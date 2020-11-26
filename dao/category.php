<?php
require_once("function_pdo.php");
//them |sua | xoa |fint product equal name|
//count quantily| sap xep:ten,all

function insert_loai_SP($name_EN,$name_VN){
    $sql="INSERT INTO coffe_house2.category(name_EN,name_VN)
    VALUES(?,?)";
    return execute_pdo($sql,$name_EN,$name_VN);
}
function edite_loai_SP($name_EN,$name_VN,$id_theloai){
    $sql="UPDATE category
    SET name_EN=?,name_VN=?
    WHERE id_cate=?";
   return execute_pdo($sql,$name_EN,$name_VN,$id_theloai);
}
function delete_loai_SP($id_theloai){
    $sql="DELETE FROM category
    WHERE id_cate=?";
   return execute_pdo($sql,$id_theloai);
}
function find_product_equal_name($searching,$searching2){
    $sql="SELECT * FROM `category` 
    WHERE name_EN like '%$searching%' or name_VN like '%$searching2%'";
    return select_all($sql);
}
function list_cate(){
    $sql="SELECT `id_cate`, `name_EN`, `name_VN` FROM `category` WHERE 1";
    return select_all($sql);
}
function quantily_cate(){
    $sql="SELECT COUNT(id_cate) FROM `category` WHERE 1";
    return select_value($sql);
}

function check_exist_cate($id_cate){
    $sql="SELECT * FROM `category`
    WHERE id_cate =?";
    return select_one($sql,$id_cate);
}
// echo quantily_cate();
// echo "<pre>";
// print_r(check_exist_cate(17));
// echo "</pre>";
