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
                                    <th>name_vn</th>
                                    <th>name_en</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                    foreach($list_cate as $key => $value){
                                        $i+=1;
                                        extract($value);
                                        echo '
                                        <tr>
                                        <td>'.$i.' </td>
                                        <td class="name_eng">'.$name_EN.'</td>
                                        <td>'.$name_VN.'</td>
                                        <td style="text-align: center;"><a href="?delete_cate&id_cate='.$id_cate.'" class="delete_element">xoa</a> <a href="?edit_cate&id_cate='.$id_cate.'" class="edit_element">sua</a></td>
                                    </tr>';
                                    }
                                ?>
                                    

                                   
                            </tbody>
                            
                        </table>
                        <a href="?add_categoty" class="submit">add_new_cate</a>
                    </div>