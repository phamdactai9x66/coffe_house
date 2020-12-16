<?php
// echo "xin chao";
// echo "<pre>";
// print_r($_SESSION["user"]["id_kh"]);
// echo "</pre>";
if(isset($_SESSION["user"]["id_kh"])){
    

$list_bill=history_cart_user($_SESSION["user"]["id_kh"]);
    if(exist_param("delete_bill")){
        delete_bill($_GET["id_bill_1"]);
        $list_bill=history_cart_user($_SESSION["user"]["id_kh"]);
    }

// echo "<pre>";
// print_r($list_cate);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="" class="css">
    <link rel="stylesheet" href="<?=$content_url?>/client/css/bill_user.css" class="css">
</head>
<body>
<section class="main-center">
                <div class="list_detail_bill">
                       <form action="" method="post">
                            <table>
                                <thead>
                                    <tr>
                                    <th>id</th>
                                    <th>fullname</th>
                                    <th>image</th>
                                    <th>total_money</th>
                                    <th>time_post</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                    foreach($list_bill as $key => $value){
                                        $i+=1;
                                        extract($value);
                                        if(empty($image)){
                                            if($sex == 1){
                                               $image="".$content_url_image_ad."undraw_male_avatar_323b%20(1).png";
                                            }else{
                                                $image="".$content_url_image_ad."undraw_female_avatar_w3jk%20(2).png";
                                            }
                                         }else{
                                             $image=$content_url_image_ad.$image;
                                         }
                                        echo '
                                        <tr>
                                        <td>'.$i.' </td>
                                        <td class="name_eng">'.$fullname.'</td>
                                        <td><img src="'.$image.'" alt=""></td>
                                        <td>'.number_format($total_money).'VND</td>
                                        <td>'.$time_post.'</td>
                                        <td style="text-align: center; ">
                                         <a href="'.$client_url.'/main_page/?account&detaill_bill&id_bill='.$id_bill.'" class="edit_element">detail_bill</a></td>
                                    </tr>';
                                    }
                                ?>
                                   

                                   
                            </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <td  colspan="6"><input type="submit" value="UPDATE CART"></td>
                                    </tr>
                                </tfoot> -->
                        </table>
                       </form>
                      
                </div>
        </section>

                        <!-- <table id="table_parent2">
                            <thead>
                                <tr>
                                    
                                    <th>id</th>
                                    <th>fullname</th>
                                    <th>image</th>
                                    <th>total_money</th>
                                    <th>time_post</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                    foreach($list_bill as $key => $value){
                                        $i+=1;
                                        extract($value);
                                        if(empty($image)){
                                            if($sex == 1){
                                               $image="".$content_url_image_ad."undraw_male_avatar_323b%20(1).png";
                                            }else{
                                                $image="".$content_url_image_ad."undraw_female_avatar_w3jk%20(2).png";
                                            }
                                         }else{
                                             $image=$content_url_image_ad.$image;
                                         }
                                        echo '
                                        <tr>
                                        <td>'.$i.' </td>
                                        <td class="name_eng">'.$fullname.'</td>
                                        <td><img src="'.$image.'" alt=""></td>
                                        <td>'.number_format($total_money).'VND</td>
                                        <td>'.$time_post.'</td>
                                        <td style="text-align: center;"><a href="?delete_bill&id_bill_1='.$id_bill.'" class="delete_element"><i class="fas fa-times"></i></a>
                                         <a href="'.$client_url.'/main_page/?account&detaill_bill&id_bill='.$id_bill.'" class="edit_element">detail_bill</a></td>
                                    </tr>';
                                    }
                                ?>
                                    <img src="" alt="">

                                   
                            </tbody>
                            
                        </table> -->
                      
                    </div>
</body>
</html>
<?php
}else{
    echo "you need login to check history cart";
}
?>
                       