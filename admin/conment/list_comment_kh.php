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
                                    <th>name_EN</th>
                                    <th>image</th>
                                    <th>quantity</th>
                                    <th> comment</th>
                                    <th></th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                    foreach($list_comment_kh as $key => $value){
                                        $i+=1;
                                        extract($value);
                                        if(empty($image)){
                                            if($sex == 1){
                                               $image="http://localhost:8090/text/coffe-house/content/admin/image/undraw_male_avatar_323b%20(1).png";
                                            }else{
                                                $image="http://localhost:8090/text/coffe-house/content/admin/image/undraw_female_avatar_w3jk%20(2).png";
                                            }
                                         }else{
                                             $image=$document_url_admin.$image;
                                         }
                                        echo '
                                        <tr>
                                        <td>'.$i.' </td>
                                        <td class="name_eng">'.$fullname.'</td>
                                        <td><img src="'.$image.'" alt=""></td>
                                        <td>'.$content.'</td>
                                        <td>'.$date_post.'</td>
                                        <td style="text-align: center;">
                                        <a href="?delete_comment&id_product='.$id_comment.'&id_pd='.$id_product.'" class="delete_element">xoa</a></td>
                                    </tr>';
                                    }
                                ?>
                                    

                                   
                            </tbody>
                            
                        </table>
                        <a href="?list_comment" class="submit">back</a>
                    </div>
    
