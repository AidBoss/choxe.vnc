   @extends('/layout/h+f')
   @section('body_web')
       <!-- đây là nội dung phần thân  -->
       <div class="container_web_users">
           <!------------Địa chỉ dẫn---------->
           <div class="address_product">
               <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0.5rem 0; width: 100%;">
                   <div class="container-fluid">
                       <div class="collapse navbar-collapse" id="navbarNav">
                           <ul class="navbar-nav">
                               <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="#">Chợ xe &gt;</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="#">Thông tin tài khoản</a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </nav>
           </div>

           <div class="list_select_users">

               <div class="left_container">
                   <ul class="list-group">
                       <li class="list-group-item disabled">Giới thiệu</li>
                       <li class="list-group-item">IMG</li>
                       <li class="list-group-item"><a id="link_users" href="ttnd.php"><i style="font-size:22px"
                                   class=" fa-regular fa-circle-user"></i>ㅤThông
                               tin
                               tài khoản</a></a></li>
                       <li class="list-group-item"><a id="link_users" href="ttlh.php"><i style="font-size:22px"
                                   style="font-size:22px" class="fa-solid fa-circle-info"></i>ㅤThông
                               tin liên hệ</a></li>
                       <li class="list-group-item"><a id="link_users" href="qldh.php"><i style="font-size:22px"
                                   class="fa-solid fa-list"></i>ㅤQuản lý tin
                               đăng</a></li>
                       <li class="list-group-item"><a id="link_users" href="qldh.php"><i style="font-size:22px"
                                   class="fa-solid fa-receipt"></i>ㅤQuản lý
                               đơn hàng</a></li>
                       <li class="list-group-item"><a id="link_users" href=""><i style="font-size:22px"
                                   class="fa-solid fa-heart"></i>ㅤTin đã lưu
                           </a></li>
                       <li class="list-group-item"><a id="link_users" href=""><i style="font-size:22px"
                                   class="fa-solid fa-shop"></i>ㅤĐăng ký
                               salon</a></li>
                       <li class="list-group-item" id="users_ttnd"><a id="users_ttnd" href=""><i
                                   style="font-size:22px" class="fa-solid fa-lock"></i>ㅤĐổi mật khẩu
                           </a></li>
                       <li class="list-group-item disabled"><i style="font-size:22px"
                               class="fa-solid fa-arrow-right-from-bracket"></i>ㅤĐăng
                           xuất</li>

                   </ul>
               </div>

               <div class="right_container">
                   <ul class="list-group">
                       <!-- html của thông tin đăng nhập -->
                       <!-- html của thông tin đăng nhập -->
                       <div class="content_info_login">
                           <div class="change-password">
                               <li class="list-group-item disabled">Đổi mật khẩu</li>
                               <div class="change-password-container">
                                   <form class="select-password">
                                       <div class="field">
                                           <div class="control-field">
                                               <div class="text-input">
                                                   <input type="password" class="input_cpass"
                                                       wire:model.defer="password-old" placeholder="Nhập mật khẩu cũ"
                                                       id="passworda">
                                                   <span class="icon-eye-right">
                                                       <i class="icon-eye" id="showPassword"
                                                           onclick="togglePassword1()"></i>
                                                   </span>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="field">
                                           <div class="control-field">
                                               <div class="text-input">
                                                   <input type="password" class="input_cpass"
                                                       wire:model.defer="password-old" placeholder="Nhập mật khẩu mới"
                                                       id="passwordb">
                                                   <span class="icon-eye-right">
                                                       <i class="icon-eye" id="showPassword"
                                                           onclick="togglePassword2()"></i>
                                                   </span>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="field">
                                           <div class="control-field">
                                               <div class="text-input">
                                                   <input type="password" class="input_cpass"
                                                       wire:model.defer="password-old" placeholder="Nhập lại mật khẩu mới"
                                                       id="passwordc">
                                                   <span class="icon-eye-right">
                                                       <i class="icon-eye" id="showPassword"
                                                           onclick="togglePassword3()"></i>
                                                   </span>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="field">
                                           <div class="field-control">
                                               <button type="button" class="width-full" onclick="changePassword()">Cập
                                                   nhật</button>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                       <!-- phần của đức anh từ quản lý tin đăng lên trên-->
                       <!-- phần của huy từ quản lý đơn hàng xuống-->
                   </ul>
               </div>
           </div> <!-- thẻ đóng của list_select_users -->
       </div> <!-- thẻ đóng của container_web_users -->
       <!-- Phần chân trang web -->
   @endsection
