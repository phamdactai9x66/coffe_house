<?php
require_once("function_pdo.php");
    function list_bill(){
        $sql="SELECT bl.id_bill, kh.fullname,kh.image,bl.total_money,bl.time_post
        FROM bill  bl INNER JOIN user_kh kh on kh.id_kh= bl.id_user";
        return select_all($sql);
    }
    function delete_bill($id_bill){
        $sql="DELETE FROM `bill` 
        WHERE id_bill =?";
        execute_pdo($sql,$id_bill);
    }
    // delete_bill(3);
//    echo "<pre>";
//    print_r( list_bill());
//    echo "</pre>";