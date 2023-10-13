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
      include("../models/header.php")
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
                        tài khoản</a></li>
                  <li class="list-group-item"><a id="link_users" href="ttlh.php"><i style="font-size:22px"
                           style="font-size:22px" class="fa-solid fa-circle-info"></i>ㅤThông
                        tin liên hệ</li></a>
                  <li onclick="selectItemUsers2()" class="list-group-item"><i style="font-size:22px"
                        class="fa-solid fa-list"></i>ㅤQuản lý tin
                     đăng</li>
                  <li onclick="selectItemUsers()" class="list-group-item"><a id="link_users"><i style="font-size:22px"
                           class="fa-solid fa-receipt"></i>ㅤQuản lý
                        đơn hàng</a></li>
                  <li onclick="selectItemUsers3()" class="list-group-item"><a id="link_users"><i style="font-size:22px"
                           class="fa-solid fa-heart"></i>ㅤTin đã lưu
                     </a></li>
                  <li onclick="selectItemUsers4()" class="list-group-item"><a id="link_users"><i style="font-size:22px"
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
                  <div class="content_info_login" id="select_qltd">
                     <table class="table table-striped" style="margin: -10px 5px;">
                        <thead>
                           <tr>
                              <th scope="col" id="qldh_tb_01">Quản lý tin đăng</th>
                              <th scope="col" style="text-align:end ;"><input type="checkbox">
                                 Hiển thị tin hết hạn</th>
                           </tr>
                        </thead>
                        <tbody>
                           <!-- tab 1 -->
                           <tr>
                              <td id="qldh_tb_01">Bản nháp</td>
                              <td style="text-align:end ;"><a id="qldh_tb_02" href="#">Xem tất cả &#187;</a>
                              </td>
                           </tr>
                           <tr>
                              <td id="qldh_tb_03" colspan="2">Chưa có tin đăng</td>
                           </tr>
                           <!-- tab 2 -->
                           <tr>
                              <td id="qldh_tb_01">Chờ duyệt</td>
                              <td style="text-align:end ;"><a id="qldh_tb_02" href="#">Xem tất cả &#187;</a>
                              </td>
                           </tr>
                           <tr>
                              <td id="qldh_tb_03" colspan="2">Chưa có tin đăng</td>
                           </tr>
                           <!-- tab 3 -->
                           <tr>
                              <td id="qldh_tb_01">Chờ thanh toán</td>
                              <td style="text-align:end ;"><a id="qldh_tb_02" href="#">Xem tất cả &#187;</a>
                              </td>
                           </tr>
                           <tr>
                              <td id="qldh_tb_03" colspan="2">Chưa có tin đăng</td>
                           </tr>
                           <!-- tab 4 -->
                           <tr>
                              <td id="qldh_tb_01">Đang hiển thị</td>
                              <td style="text-align:end ;"><a id="qldh_tb_02" href="#">Xem tất cả &#187;</a>
                              </td>
                           </tr>
                           <tr>
                              <td id="qldh_tb_03" colspan="2">Chưa có tin đăng</td>
                           </tr>
                           <!-- tab 5 -->
                           <tr>
                              <td id="qldh_tb_01">Tin đăng đang chỉnh sửa</td>
                              <td style="text-align:end ;"><a id="qldh_tb_02" href="#">Xem tất cả &#187;</a>
                              </td>
                           </tr>
                           <tr>
                              <td id="qldh_tb_03" colspan="2">Chưa có tin đăng</td>
                           </tr>
                           <!-- tab 6 -->
                           <tr>
                              <td id="qldh_tb_01">Tin chỉnh sửa chờ duyệt</td>
                              <td style="text-align:end ;"><a id="qldh_tb_02" href="#">Xem tất cả &#187;</a>
                              </td>
                           </tr>
                           <tr>
                              <td id="qldh_tb_03" colspan="2">Chưa có tin đăng</td>
                           </tr>
                           <!-- tab 7 -->
                           <tr>
                              <td id="qldh_tb_01">Đã từ chối</td>
                              <td style="text-align:end ;"><a id="qldh_tb_02" href="#">Xem tất cả &#187;</a>
                              </td>
                           </tr>
                           <tr>
                              <td id="qldh_tb_03" colspan="2">Chưa có tin đăng</td>
                           </tr>
                           <!-- tab 8 -->
                           <tr>
                              <td id="qldh_tb_01">Hết hạn</td>
                              <td style="text-align:end ;"><a id="qldh_tb_02" href="#">Xem tất cả &#187;</a>
                              </td>
                           </tr>
                           <tr>
                              <td id="qldh_tb_03" colspan="2">Chưa có tin đăng</td>
                           </tr>
                           <tr>
                              <td style="background-color: #fff; height: 60px;" colspan="2">
                                 <a href="/trangchitiet/đăngtin.php"><button type="submit" class="sub-users"
                                       id="sub-web-users">Đăng tin +
                                    </button></a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>

                  <!-- CODE TRANG QUAN LY DON HANG -->
                  <div class="content_info_login" id="select_qldh">
                     <div class="order-management">
                        <li class="list-group-item disabled">Quản lý đơn hàng</li>
                        <div class="columns">
                           <div class="column is-6 ">
                              <div class="select">
                                 <select>
                                    <option value="option1">Tất cả</option>
                                    <option value="option2">Dịch vụ kiểm tra xe phổ thông</option>
                                    <option value="option3">Hỗ trợ vay ngân hàng</option>
                                    <option value="option4">Dịch vụ làm giấy tờ xe</option>
                                    <option value="option5">Dịch vụ kiểm tra xe phổ thông</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="list-services">
                           <h4>Bạn chưa sử dụng dịch vụ nào</h4>
                        </div>
                     </div>
                  </div>


                  <!-- CODE TRANG TIN DA LUU -->
                  <div class="content_info_login" id="select_tdl">
                     <div class="saved-news">
                        <li class="list-group-item disabled">Tin đã lưu</li>
                        <div class="list-news">
                           <h4>Chưa có tin đăng</h4>
                        </div>
                     </div>
                  </div>

                  <!-- CODE TRANG DANG KY SALON -->
                  <div class="content_info_login" id="select_dksl">
                     <div class="salon-sign-in">
                        <li class="list-group-item disabled">Quản lý salon</li>
                        <div class="small-container">
                           <div class="salon-header"></div>
                           <h1 class="center-text mt-5">Quyền lợi khi đăng ký trở thành salon của Chợ Xe</h1>
                           <div class="list-benefit mt-4">
                              <div class="benefit-item">
                                 Được đăng 6 tin miễn phí 1 tháng (được xem như tin thường)
                              </div>
                              <div class="benefit-item">
                                 Có gian hàng và địa chỉ url riêng. Không giới hạn sản phẩm trên trang cửa
                                 hàng
                                 của mình
                              </div>
                              <div class="benefit-item">
                                 Được hiển thị tên salon ở Trang chủ. Với thứ tự ưu tiên theo:
                                 <ul>
                                    <li>• Những salon mua gói dài hạn ưu tiên trước</li>
                                    <li>• Nếu cùng gói, salon mua trước sẽ hiển thị trước</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </ul>
            </div>
         </div> <!-- thẻ đóng của list_select_users -->
      </div> <!-- thẻ đóng của container_web_users -->
      <!-- Phần chân trang web -->
      <?php
      include("../models/footer.php")
      ?>
   </div>
</body>

</html>