<div class="create_something">
                            <form action="?add_user" method="post" enctype="multipart/form-data">
                                <div>
                                    <label for="">user_name</label>
                                    <input type="text" name="user" id="" placeholder="name_cate">
                                </div>

                                <div>
                                    <label for="">pass_word</label>
                                    <input type="password" name="pass_word" id="" placeholder="name_cate_EN">
                                </div> 
                                <div>
                                    <label for="">full_name</label>
                                    <input type="text" name="full_name" id="" placeholder="name_cate_EN">
                                </div> 
                                <div>
                                    <label for="">email</label>
                                    <input type="email" name="email" id="" placeholder="name_cate_EN">
                                </div> 
                                <div>
                                    <label for="">address</label>
                                    <input type="text" name="address" id="" placeholder="name_cate_EN">
                                </div> 
                                <div>
                                    <label for="">birth</label>
                                    <input type="date" name="birth" id="" placeholder="name_cate_EN">
                                </div> 
                                
                                <div>
                                    <label for="">Sex</label>
                                   <div class="check_radio">
                                    <label for="11">male <input type="radio" value="1" name="Sex" id="11"></label>
                                    <label for="22">female <input type="radio" value="0" name="Sex" id="22" checked></label>
                                   </div>
                                </div> 
                                <div >
                                    <label for="">role</label>
                                   <div class="check_radio">
                                    <label for="33">employee <input type="radio" value="1" name="role" id="33"></label>
                                    <label for="44">user <input type="radio" value="0" name="role" id="44" checked></label>
                                   </div>
                                </div> 
                                <div >
                                    <label for="">status</label>
                                   <div class="check_radio">
                                    <label for="55">active <input type="radio" value="1" name="status" id="55" checked></label>
                                    <label for="66">lock<input type="radio" value="0" name="status" id="66" ></label>
                                   </div>
                                </div> 
                                <div >
                                    <label for="">check_admin</label>
                                   <div class="check_radio">
                                    <label for="77">admin<input type="radio" value="1" name="check_admin" id="77"></label>
                                    <label for="88">employee<input type="radio" value="0" name="check_admin" id="88" checked></label>
                                   </div>
                                </div> 
                                <div class="image_middle">
                                    <label for="">image</label>
                                    <input type="file" name="image" id="" >
                                </div> 
                               <div class="submit_bottom">
                               <input type="submit" value="submit" name="post_add_user">
                                <a href="?list_user" class="submit">list_cart</a>
                               </div>
                                
                            </form>
                    </div>
                 