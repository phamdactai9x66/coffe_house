<?php
    require_once("function_pdo.php");
    function insert_product($name_EN,$name_VN,$image,$quantily,$prict
    ,$discount,$view_pd,$desription,$content,$id_cate){
        $sql="INSERT INTO `product`(`name_EN`, `name_VN`, `image`, `quantily`, `price`, `discount`, `view_pd`, `desription`, `content`, `id_cate`)
        VALUES (?,?,?,?,?,?,?,?,?,?)";
        return execute_pdo($sql,$name_EN,$name_VN,$image,$quantily,$prict
        ,$discount,$view_pd,$desription,$content,$id_cate);
    }
    function update_product($name_EN,$name_VN,$image,$quantily,$prict
    ,$discount,$view_pd,$desription,$content,$id_cate,$id_product){
        $sql="UPDATE `product`
        SET `name_EN`=?,`name_VN`=?,`image`=?,`quantily`=?,`price`=?,`discount`=?,`view_pd`=?,`desription`=?,`content`=?,`id_cate`=?
        WHERE id_product =?";
        return execute_pdo($sql,$name_EN,$name_VN,$image,$quantily,$prict
        ,$discount,$view_pd,$desription,$content,$id_cate,$id_product);
    }
    function delete_product($id_product){
        $sql="DELETE FROM `product` WHERE id_product =?";
        execute_pdo($sql,$id_product);
    }
    function quantily_product(){
        $sql="SELECT COUNT(id_product) FROM `product` WHERE 1";
        return select_value($sql);
    }
    function list_product(){
        $sql="SELECT * FROM product";
        return select_all($sql);
    }
    // echo quantily_product();
    echo "<pre>";
    print_r(list_product());
    echo "</pre>";
// delete_product(2);
    // echo update_product("san pham 1","san pham 1","anh1",4,555,4,3,"asda","asd",1,1);

