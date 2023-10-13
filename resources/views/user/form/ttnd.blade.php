    @extends('/layout/h+f')
    @section('body_web')
        <div class="container_web_users" style="margin-top:30px;">
            <!------------Địa chỉ dẫn---------->
            <div class="ttnd_nav">
                <div class="navbar-collapse">
                    <ul class="navbar-nav" style=" display: flex;
                        flex-direction: row;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Chợ xe &gt;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Thông tin tài khoản</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="list_select_users">

                <div class="left_container">
                    <ul class="list-group">
                        <li class="list-group-item disabled">Giới thiệu</li>
                        <li class="list-group-item">
                            <p id="name_display">{{ Auth::user()->name }}</p>
                        </li>
                        <li class="list-group-item" id="users_ttnd"><i style="font-size:22px"
                                class=" fa-regular fa-circle-user"></i>ㅤThông
                            tin
                            tài khoản</a></li>
                        <li class="list-group-item"><a id="link_users" href="ttlh.php"><i style="font-size:22px"
                                    style="font-size:22px" class="fa-solid fa-circle-info"></i>ㅤThông
                                tin liên hệ</a></li>
                        <li class="list-group-item"><a id="link_users" href="qldh.php"><i style="font-size:22px"
                                    class="fa-solid fa-list"></i>ㅤQuản lý tin
                                đăng</a></li>
                        <li class="list-group-item"><a id="link_users" href=""><i style="font-size:22px"
                                    class="fa-solid fa-receipt"></i>ㅤQuản lý
                                đơn hàng</a></li>
                        <li class="list-group-item"><a id="link_users" href=""><i style="font-size:22px"
                                    class="fa-solid fa-heart"></i>ㅤTin đã lưu
                            </a></li>
                        <li class="list-group-item"><a id="link_users" href=""><i style="font-size:22px"
                                    class="fa-solid fa-shop"></i>ㅤĐăng ký
                                salon</a></li>
                        <li class="list-group-item"><a id="link_users" href="change_pass.php"><i style="font-size:22px"
                                    class="fa-solid fa-lock"></i>ㅤĐổi mật khẩu
                            </a></li>
                        <li class="list-group-item "><a id="link_users" href="{{ url('user/logout') }}"><i
                                    style="font-size:22px" class="fa-solid fa-arrow-right-from-bracket"></i>ㅤĐăng
                                xuất</a></li>
                        <!-- <li class="list-group-item">Vestibulum at eros</li>  -->
                    </ul>
                </div>

                <div class="right_container">
                    <ul class="list-group">
                        <!-- html của thông tin đăng nhập -->
                        <!-- html của thông tin đăng nhập -->
                        <div class="content_info_login">
                            <li class="list-group-item disabled">Thông tin đăng nhập </li>
                            <li class="list-group-item">
                                <div class="render-avatar">
                                </div>
                                <input type="file" name="txtfile" id="list-group-item-upfile" class="up-file-pic">
                            </li>
                            <li class="list-group-item">
                                <div class="form-outline mb-4">
                                    <label class="form-label" id="lb_tkmk" for="form2Example2">Số
                                        điện
                                        thoại</label>
                                    <input type="text" value="{{ Auth::user()->phone }}" id="ip_tkmk"
                                        class="form-control" />
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-outline mb-4">
                                    <label class="form-label" id="lb_tkmk" for="form2Example2"> Tên tài khoản</label>
                                    <input type="text" value="{{ Auth::user()->name }}" id="ip_tkmk"
                                        class="form-control" />
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-outline mb-4">
                                    <label class="form-label" id="lb_tkmk" for="form2Example2">Email</label>
                                    <input type="text" value="{{ Auth::user()->email }}" id="ip_tkmk"
                                        class="form-control" />
                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="submit" class="sub-users" id="sub-web-users">Cập nhập</button>
                            </li>
                        </div>
                    </ul>
                </div>
            </div> <!-- thẻ đóng của list_select_users -->
        </div> <!-- thẻ đóng của container_web_users -->
    @endsection
