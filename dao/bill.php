<?php
require_once("function_pdo.php");
    function list_bill(){
        $sql="SELECT bl.id_bill,kh.sex, kh.fullname,kh.image,bl.total_money,bl.time_post
        FROM bill  bl INNER JOIN user_kh kh on kh.id_kh= bl.id_user";
        return select_all($sql);
    }
    function delete_bill($id_bill){
        $sql="DELETE FROM `bill` 
        WHERE id_bill =?";
        execute_pdo($sql,$id_bill);
    }
    function insert_bill($id_user,$total_money,$time){
        $sql="INSERT INTO `bill`( `id_user`, `total_money`, `time_post`)
        VALUES (?,?,?)";
        return execute_pdo($sql,$id_user,$total_money,$time);
    }
    // function count_bill(){
    //     $sql="SELECT COUNT(id_bill) FROM bill";
    //     return select_value($sql);
    // }
    // delete_bill(3);
//    echo "<pre>";
//    print_r( list_bill());
//    echo "</pre>";