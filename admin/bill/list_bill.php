<div class="list_something">
                        <form action="" method="post" class="searching_element">
                            <input type="text" name="" id="searching" placeholder="searching">
                            <!-- <select name="" id="">
                                <option value="">moi nhat</option>
                                <option value="">as</option>
                                <option value="">as</option>
                            </select> -->
                        </form>
                        <table id="table_parent2">
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
                                        <td style="text-align: center;"><a href="?delete_bill&id_bill_1='.$id_bill.'" class="delete_element">remove</a>
                                         <a href="?detail_bill&id_bill_1='.$id_bill.'" class="edit_element">detail_bill</a></td>
                                    </tr>';
                                    }
                                ?>
                                    <img src="" alt="">

                                   
                            </tbody>
                            
                        </table>
                        <a href="?add_categoty" class="submit">add_new_cate</a>
                    </div>