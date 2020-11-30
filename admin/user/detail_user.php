<div class="create_something">
                            <form action="?detail_user&id_user=<?=$id_kh?>" method="post" enctype="multipart/form-data">
                                <div>
                                    <label for="">user_name</label>
                                    <input type="text" name="user" value="<?=$username?>" placeholder="name_cate">
                                </div>

                                <div>
                                    <label for="">pass_word</label>
                                    <input type="password" name="pass_word" value="<?=$pass?>" placeholder="name_cate_EN">
                                </div> 
                                <div>
                                    <label for="">full_name</label>
                                    <input type="text" name="full_name" value="<?=$fullname?>" placeholder="name_cate_EN">
                                </div> 
                                <div>
                                    <label for="">check_match_pass</label>
                                    <input type="password" name="check_match_pass" value="<?=$pass?>" placeholder="name_cate_EN">
                                </div> 
                                <div>
                                    <label for="">email</label>
                                    <input type="email" name="email" value="<?=$email?>" placeholder="name_cate_EN">
                                </div> 
                                <div>
                                    <label for="">address</label>
                                    <input type="text" name="address" value="<?=$address?>" placeholder="name_cate_EN">
                                </div> 
                                <div>
                                    <label for="">birth</label>
                                    <input type="date" name="birth" value="<?=$birth?>" placeholder="name_cate_EN">
                                </div> 
                                
                                <div>
                                    <label for="">Sex</label>
                                   <div class="check_radio">
                                    <label for="11">Name <input type="radio" value="1" name="Sex" id="11" <?=$sex?'checked': ''?>></label>
                                    <label for="22">Nu <input type="radio" value="0" name="Sex" id="22" <?=!$sex?'checked': ''?>></label>
                                   </div>
                                </div> 
                                <div >
                                    <label for="">role</label>
                                   <div class="check_radio">
                                    <label for="33">employee <input type="radio" value="1" name="role" id="33" <?=$role?'checked': ''?> ></label>
                                    <label for="44">user <input type="radio" value="0" name="role" id="44" <?=!$role?'checked': ''?>></label>
                                   </div>
                                </div> 
                                <div >
                                    <label for="">status</label>
                                   <div class="check_radio">
                                    <label for="55">active <input type="radio" value="1" name="status" id="55"  <?=$status?'checked': ''?>></label>
                                    <label for="66">lock<input type="radio" value="0" name="status" id="66" <?=!$status?'checked': ''?> ></label>
                                   </div>
                                </div> 
                                <div >
                                    <label for="">check_admin</label>
                                   <div class="check_radio">
                                    <label for="77">admin<input type="radio" value="1" name="check_admin" id="77"  <?=$check_admin?'checked': ''?>></label>
                                    <label for="88">employee<input type="radio" value="0" name="check_admin" id="88" <?=!$check_admin?'checked': ''?>></label>
                                   </div>
                                </div> 
                                <div class="image_middle">
                                    <label for="">image</label>
                                    <input type="file" name="image" id="" >
                                    <input type="hidden" name="hidden_image" value="<?=$image?>">
                                </div> 
                               <div class="submit_bottom">
                               <input type="submit" value="submit" name="post_add_user">
                                <a href="?list_user" class="submit">list_cart</a>
                               </div>
                                
                            </form>
                    </div>
                 