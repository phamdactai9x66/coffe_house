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
                                    <th> new</th>
                                    <th>old</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                    foreach($list_comment as $key => $value){
                                        $i+=1;
                                        extract($value);
                                      
                                         if($image == "img.png" or $image == "" ){
                                            $image=$content_url_image_ad.$image;
                                           }else{
                                               $image=$content_url_image_ad.$image;
                                           }
                                        echo '
                                        <tr>
                                        <td>'.$i.' </td>
                                        <td class="name_eng">'.$name_EN.'</td>
                                        <td><img src="'.$image.'" alt=""></td>
                                        <td>'.$sl_comment.'</td>
                                        <td>'.$old.'</td>
                                        <td>'.$new.'</td>
                                        <td style="text-align: center;"><a href="?delete_cate&id_pd='.$id_product.'" class="delete_element">xoa</a>
                                         <a href="?edit_cate&id_pd='.$id_product.'" class="edit_element">detail</a></td>
                                    </tr>';
                                    }
                                ?>
                                    

                                   
                            </tbody>
                            
                        </table>
                        <ul class="paginnation">
            <li><a href="?list_product&current_page=<?=$_SESSION["back"]?>"><i class="fas fa-chevron-left"></i></a></li>
            <?php
            //    echo $_SESSION["tong_trang"];
                   if($_SESSION["tong_trang"] >0){
                       for($i =0 ; $i < $_SESSION["tong_trang"]; $i++){
                           $y=$i+1;
                           echo '<li> <a href="?list_product&current_page='.$i.'">'.$y.'</a> </li>';
                       }
                   }else{
                       echo  "<li>khong co trang nao</li>";
                   }
                  
               ?>
            <li><a href="?list_product&current_page=<?=$_SESSION["next"]?>"><i class="fas fa-chevron-right"></i></a></li>
    </ul>
                        <!-- <a href="?add_categoty" class="submit">add_new_cate</a> -->
                    </div>
<img src="" alt="">