
<div class="list_something">
                        <form action="" method="post" class="searching_element">
                            <input type="text" name="" id="searching" placeholder="searching">
                            
                        </form>
                        <table id="table_parent2">
                            <thead>
                                <tr>
                                    
                                    <th>id</th>
                                    <th>name_VN</th>
                                    <th>image</th>
                                    <th>quantily</th>
                                    <th>prict</th>
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
                                        <td class="name_eng">'.$name_VN.'</td>
                                        <td><img src="'.$image.'" alt=""></td>
                                        <td>'.$quantily.'</td>
                                        <td>'.number_format($prict).'VND</td>
                                       
                                        <td style="text-align: center;"><a href="?delete_bill_part2&id_product_bill='.$id_detail_bill.'&id_bill_1='.$id_bill.'" class="delete_element">remove</a></td>
                                    </tr>';
                                    }
                                ?>
                                    

                                   
                            </tbody>
                            
                        </table>
                        <a href="?add_categoty" class="submit">back</a>
                    </div>