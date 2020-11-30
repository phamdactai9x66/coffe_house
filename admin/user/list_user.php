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
                                    <th>username</th>
                                    <th>image</th>
                                    <th>email</th>
                                    <th>address</th>
                                    <th>sex</th>
                                    <th>birth</th>
                                    <th>role</th>
                                    <th>status</th>
                                    <th>check_admin</th>
                                    <th></th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                    foreach($list_cate as $key => $value){
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
                                         $role=($role == 1) ? "emoloyee" : "user";
                                         $status=($status == 1) ? "active" : "lockd";
                                         $check_admin=($check_admin == 1) ? "admin" : "emoloyee";
                                         $sex=($sex == 1) ? "meal" : "femeal";
                                        echo '
                                        <tr>
                                        <td>'.$i.' </td>
                                        <td class="name_eng">'.$username.'</td>
                                        <td class="name_eng"><img src="'.$image.'" alt=""></td>
                                        <td>'.$email.'</td>
                                        <td>'.$address.'</td>
                                        <td>'.$sex.'</td>
                                        <td>'.$birth.'</td>
                                        <td>'.$role.'</td>
                                        <td>'.$status.'</td>
                                        <td>'.$check_admin.'</td>
                                        <td style="text-align: center;"><a href="?delete_cate&id_user='.$id_kh.'" 
                                        class="delete_element">remove</a> <a href="?detail_user&id_user='.$id_kh.'" class="edit_element">edit</a></td>
                                    </tr>';
                                  
                                    }
                                ?>
                                    

                                   
                            </tbody>
                            
                        </table>
                        <ul class="paginnation">
            <li><a href="?list_user&current_page=<?=$_SESSION["back"]?>"><i class="fas fa-chevron-left"></i></a></li>
            <?php
            //    echo $_SESSION["tong_trang"].'asd';
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
                    
                   
               