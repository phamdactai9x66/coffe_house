<?php
    require_once("function_pdo.php");
    function comment_product(){
        $sql="SELECT pd.id_product,pd.name_EN,COUNT(cm.id_comment) as 'sl comment',MIN(cm.date_post), MAX(cm.date_post)
        FROM product pd LEFT JOIN comment cm on pd.id_product = cm.id_product
        GROUP BY  pd.id_product,pd.name_EN";
        return select_all($sql);
    }
    function list_comment($id_kh){
        $sql="SELECT kh.fullname,kh.image,cm.content,cm.date_post
        FROM product pd INNER JOIN comment cm on cm.id_product= pd.id_product
                            INNER join user_kh kh on kh.id_kh = cm.id_kh
        WHERE pd.id_product = ?";
        return select_all($sql,$id_kh);
    }
    // echo "<pre>";
    // print_r(list_comment(2));
    // echo "<pre>";