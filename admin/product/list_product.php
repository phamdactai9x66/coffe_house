<div class="list_something">
                        <form action="" method="post" class="searching_element">
                            <input type="text" name="" id="searching" placeholder="searching">
                            <select name="" id="">
                                <option value="">moi nhat</option>
                                <option value="">as</option>
                                <option value="">as</option>
                            </select>
                        </form>
                        <table id="table_parent2">
                            <thead>
                                <tr>
                                    
                                    <th>id</th>
                                    <th>name_VN</th>
                                    <th>image</th>
                                    <th>quantily</th>
                                    <th>price</th>
                                    <th>discount</th>
                                    <th>view</th>
                                    <th></th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                    foreach($list_product as $key => $value){
                                        $i+=1;
                                        extract($value);
                                        if($image == "img.png"){
                                            $image=$document_url_admin.$image;
                                           }else{
                                               $image=$document_url_admin.$image;
                                           }
                                         
                                        
                                        echo '
                                        <tr>
                                        <td>'.$i.' </td>
                                        <td class="name_eng">'.$name_VN.'</td>
                                        <td class="name_eng"><img src="'.$image.'" alt=""></td>
                                        <td>'.$quantily.'</td>
                                        <td>'.number_format($price).'VND</td>
                                        <td>'.$discount.'</td>
                                        <td>'.$view_pd.'</td>
                                       
                                        <td style="text-align: center;"><a href="?delete_product&id_product='.$id_product.'" 
                                        class="delete_element">remove</a> <a href="?edit_product&id_product='.$id_product.'" class="edit_element">edit</a></td>
                                    </tr>';
                                  
                                    }
                                ?>
                                    

                                   
                            </tbody>
                            
                        </table>
                        <ul class="paginnation">
            <li><a href="?list_user&current_page=<?=$_SESSION["back"]?>"><i class="fas fa-chevron-left"></i></a></li>
            <?php
            //    echo $_SESSION["tong_trang"];
                   if($_SESSION["tong_trang"] >0){
                       for($i =0 ; $i < $_SESSION["tong_trang"]; $i++){
                           $y=$i+1;
                           echo '<li> <a href="?list_user&current_page='.$i.'">'.$y.'</a> </li>';
                       }
                   }else{
                       echo  "<li>khong co trang nao</li>";
                   }
                  
               ?>
            <li><a href="?list_user&current_page=<?=$_SESSION["next"]?>"><i class="fas fa-chevron-right"></i></a></li>
    </ul>
                    
              
       </ul>
                        <a href="?add_categoty" class="submit">add_new_cate</a>
                    </div> 
                    
                   
               
