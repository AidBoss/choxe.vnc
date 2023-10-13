<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Choxe</title>

</head>

<body>
    <div class="box">
        <!-- đầu trang phần logo  -->
        <?php
        include '../models/header.php';
        ?>

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
                                    <a class="nav-link active" aria-current="page" href="#">Thông tin tài
                                        khoản</a>
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
                                tài khoản</a></li>
                        <li class="list-group-item" id="users_ttnd"><i style="font-size:22px" style="font-size:22px"
                                class="fa-solid fa-circle-info"></i>ㅤThông
                            tin liên hệ</li>
                        <li class="list-group-item"><a id="link_users" href="qldh.php"><i style="font-size:22px"
                                    class="fa-solid fa-list"></i>ㅤQuản lý tin
                                đăng</a></li>
                        <li class="list-group-item"><a id="link_users" href="qldh.php"><i style="font-size:22px"
                                    class="fa-solid fa-receipt"></i>ㅤQuản lý
                                đơn hàng</a></li>
                        <li class="list-group-item"><a id="link_users" href="qldh.php"><i style="font-size:22px"
                                    class="fa-solid fa-heart"></i>ㅤTin đã lưu
                            </a></li>
                        <li class="list-group-item"><a id="link_users" href="qldh.php"><i style="font-size:22px"
                                    class="fa-solid fa-shop"></i>ㅤĐăng ký
                                salon</a></li>
                        <li class="list-group-item"><a id="link_users" href="change_pass.php"><i style="font-size:22px"
                                    class="fa-solid fa-lock"></i>ㅤĐổi mật khẩu
                            </a></li>
                        <li class="list-group-item disabled"><i style="font-size:22px"
                                class="fa-solid fa-arrow-right-from-bracket"></i>ㅤĐăng
                            xuất</li>
                        <!-- <li class="list-group-item">Vestibulum at eros</li>  -->
                    </ul>
                </div>

                <div class="right_container">
                    <ul class="list-group">

                        <!-- html của thông tin đăng nhập -->
                        <!-- html của thông tin đăng nhập -->
                        <div class="content_info_login" id="ct_login_show">
                            <li class="list-group-item disabled">Thông tin đăng nhập </li>
                            <li class="list-group-item">
                                <div class="ttlh_text">
                                    <p id="ttlh_text">Bạn chưa chọn có thông tin liên hệ nào </p>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="submit" onclick="eventHide()" class="sub-users">Thêm
                                    thông tin liên hệ
                                    +</button>
                            </li>
                        </div>
                        <!-- html của thông tin đăng nhập -->
                        <!-- html của thông tin đăng nhập -->
                        <div class="content_info_login" id="ct_login_hide">
                            <li class="list-group-item disabled">Chỉnh sửa thông tin liên hệ </li>

                            <li class="list-group-item">
                                <div class="form-outline mb-4">
                                    <label class="form-label" id="lb_tkmk" for="form2Example2">Tên liên hệ</label>
                                    <input type="text" id="ip_tkmk" class="form-control" />
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-outline mb-4">
                                    <label class="form-label" id="lb_tkmk" for="form2Example2"> Số điện thoại liên
                                        hệ</label>
                                    <input type="text" id="ip_tkmk" class="form-control" />
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-outline mb-4">
                                    <label class="form-label" id="lb_tkmk" for="form2Example2">Tỉnh/Thành phố</label>
                                    <!-- <input type="text" id="ip_tkmk" class="form-control" /> -->
                                    <select class="form-control" id="ip_tkmk">
                                        <option value="empty">Tỉnh/Thành phố</option>
                                        <option value="HaNoi">Hà Nội</option>
                                        <option value="QuangNinh">Quảng Ninh</option>
                                        <option value="HaiPhong">Hải Phòng</option>
                                        <option value="TpHCCM">Tp Hồ Chí Minh</option>
                                    </select>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-outline mb-4">
                                    <label class="form-label" id="lb_tkmk" for="form2Example2">Quận/huyện</label>
                                    <!-- <input type="text" id="ip_tkmk" class="form-control" /> -->
                                    <select class="form-control" id="ip_tkmk">
                                        <option value="empty">Chọn Quận/huyện</option>
                                    </select>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-outline mb-4">
                                    <label class="form-label" id="lb_tkmk" for="form2Example2">Phường/xã</label>
                                    <!-- <input type="text" id="ip_tkmk" class="form-control" /> -->
                                    <select class="form-control" id="ip_tkmk">
                                        <option value="empty">Chọn Phường/xã</option>
                                    </select>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-outline mb-4">
                                    <label class="form-label" id="lb_tkmk" for="form2Example2"> Địa chỉ</label>
                                    <input type="text" id="ip_tkmk" class="form-control" />
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-outline mb-4">
                                    <input type="checkbox" style="width: 50px; height: 25px;" />
                                    Đặt làm mặc định
                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="submit" id="btu_change_lh" class="sub-users">Cập nhập</button>
                            </li>
                        </div>
                    </ul>
                </div>
            </div> <!-- thẻ đóng của list_select_users -->
        </div> <!-- thẻ đóng của container_web_users -->
        <!-- Phần chân trang web -->
        <?php
        include '../models/footer.php';
        ?>
    </div>
</body>

</html>
