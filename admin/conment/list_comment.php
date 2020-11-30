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
                                        echo '
                                        <tr>
                                        <td>'.$i.' </td>
                                        <td class="name_eng">'.$name_EN.'</td>
                                        <td>'.$image.'</td>
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
                        <!-- <a href="?add_categoty" class="submit">add_new_cate</a> -->
                    </div>
