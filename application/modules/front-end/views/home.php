 <!--slider area start-->
 <section class="slider_section slider_section_four mb-70 mt-30">
     <div class="container">
         <div class="row">
             <div class="col-lg-9 offset-lg-3 col-ld-12">
                 <div class="slider_area owl-carousel">
                     <div class="single_slider d-flex align-items-center" ><iframe width="870" height="410" src="https://www.youtube.com/embed/CpMnEJwk0TU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                         <div class="slider_content slider_c_four">
                            
                         </div>
                     </div>
                     <div class="single_slider d-flex align-items-center" data-bgimg="public/frontend/assets/img/slider/slider6.jpg">
                         <div class="slider_content slider_c_four">
                             <h1>NoteBook Pro</h1>
                             <h2>top selling product 2019</h2>
                             <p>exclusive offer <span> 20% off </span> this week</p>
                             <a class="button" href="shop.html">shopping now</a>
                         </div>
                     </div>
                 </div>
             </div>
             <!--sidebar widget start-->
             <div class="col-lg-3 col-md-12">
                 <aside class="sidebar_widget right_menu_new">
                     <div class="widget_inner">
                         <div class="widget_list widget_categories">
                             <div class="show_sign">
                                 <h2 class="sign_login">Sign/Login</h2>
                                 <ul class="list_sign_login">
                                     <li>
                                         <span>Passport No.</span>
                                         <input type="text" class="form-control">
                                     </li>
                                     <li>
                                         <span>Email Address</span>
                                         <input type="text" class="form-control">
                                     </li>
                                     <li>
                                         <span>Phone number</span>
                                         <input type="text" class="form-control">
                                     </li>
                                     <li>
                                         <span>Username</span>
                                         <input type="text" class="form-control">
                                     </li>
                                     <li>
                                         <span>Password</span>
                                         <input type="text" class="form-control">
                                     </li>
                                     <li>
                                         <button class="btn button_sign" type="submit">Sign</button>
                                     </li>
                                 </ul>
                             </div>
                             <div class="show_login" style="display:none;">
                                 <h2 class="sign_login_change">Sign/Login</h2>
                                 <ul class="list_sign_login">
                                     <li>
                                         <span>Email Address</span>
                                         <input type="text" class="form-control">
                                     </li>

                                     <li>
                                         <span>Username</span>
                                         <input type="text" class="form-control">
                                     </li>
                                     <li>
                                         <span>Password</span>
                                         <input type="text" class="form-control">
                                     </li>
                                     <li>
                                         <button class="btn button_sign" type="submit">Log in</button>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </aside>

                 <!-- <aside class="sidebar_widget right_menu_new show_login"  style="display:none;">
                            <div class="widget_inner">
                                <div class="widget_list widget_categories"> -->
                 <!-- <h2 class="sign_login_change">Sign/Login</h2>
                                    <ul class="list_sign_login">
                                       
                                        <li>
                                            <span>Email Address</span>
                                            <input type="text" class="form-control">
                                        </li>
                                        
                                        <li>
                                            <span>Username</span>
                                            <input type="text" class="form-control">
                                        </li>
                                        <li>
                                            <span>Password</span>
                                            <input type="text" class="form-control">
                                        </li>
                                        <li>
                                            <button class="btn button_sign" type="submit">Log in</button>
                                        </li>
                                    </ul> -->
                 <!-- </div>
                            </div>
                    </aside> -->
             </div>
             <!--sidebar widget end-->
         </div>
     </div>

 </section>
 <!--slider area end-->
 <div class="banner_area mb-40">
     <div class="container">

         <div class="row">

             <div class="col-lg-6 col-md-6">
                 <div class="section_title">
                     <h2>Highest score</h2>
                 </div>
                 <br>
                 <div class="single_banner mb-30">
                     <div class="banner_thumb">
                         <a href="shop.html"><img src="public/frontend/assets/img/bg/banner4.jpg" alt=""></a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6">
                 <div class="section_title">
                     <h2>Poster </h2>
                 </div>
                 <br>
                 <div class="single_banner mb-30">
                     <div class="banner_thumb">
                         <a href="shop.html"><img src="public/frontend/assets/img/bg/banner5.jpg" alt=""></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!--shipping area start-->
 
 <!--shipping area end-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
     $(document).ready(function() {
         $(".sign_login").click(function() {
             $(".show_sign").toggle();
             $(".show_login").slideUp(2000).slideDown(2000).show();
         });
         $(".sign_login_change").click(function() {
             $(".show_login").toggle();
             $(".show_sign").slideUp(2000).slideDown(2000).show();
         });
     });
 </script>