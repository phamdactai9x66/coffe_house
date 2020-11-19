<?php
require_once("function_pdo.php");
//list_detail_bill, delete
function list_detail_bill($id_bill){
    $sql="SELECT dl.id_detail_bill, pt.image,pt.name_VN,dl.quantily,dl.prict
    FROM detail_bill dl INNER JOIN product pt on pt.id_product = dl.id_product
    WHERE id_bill = ?";
    return select_all($sql,$id_bill);
}
function delete_detail_bill($id_detail_bill){
    $sql="DELETE FROM `detail_bill`
     WHERE id_detail_bill = ?";
    execute_pdo($sql,$id_detail_bill);
}
// delete_detail_bill(3);
// echo "<pre>";
// print_r(list_detail_bill(1));
// echo '</pre>';