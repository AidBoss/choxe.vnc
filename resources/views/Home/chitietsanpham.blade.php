@include('layout.script')
@extends('/layout/h+f')
@section('body_web')
<title>{{ $title }}</title>
<div class="container_web_detailweb">
   <div class="address_way">
      <nav class="">
         <ul class="list_way">
            <li><a href="#">Chợ xe</a></li>
            <li><a href="#">Toyota</a></li>
            <li><a href="#">Wigo</a></li>
            <li class="is-active">Toyota Wigo 1.2G  4X2 AT 2018</li>
         </ul>
      </nav>
   </div>
</div>
<div class="detail_product">
   <div class="information_car">
         <div class="container_fluid info_cars_row">
            @if (!empty($dataDetail))
            <div class="row">
               <div class="col-sm-9 mb-3 mb-sm-0 cotphai">
                     <!-- slide chứa các hình ảnh của xe -->
                     <div class="slider_car">
                        <div class="slider_top">
                           <div class="img_mid">
                                 <img src="{{asset('font/img-product/'.$dataDetail->anh) }}" alt="" class="img-feature">
                           </div>
                        </div>
                        <!-- danh sách các hình ảnh của xe  -->
                        {{-- <div class="list-img"> --}}
                           {{-- <div><img src="{{asset('font/')}}/img/Oto_1/oto1.jpg" alt=""></div>
                           <div class="active"><img src="{{asset('font/')}}/img/Oto_1/2a.jpg" alt=""></div>
                           <div><img src="{{asset('font/')}}/img/Oto_1/3.jpg" alt=""></div>
                           <div><img src="{{asset('font/')}}/img/Oto_1/4.jpg" alt=""></div>
                           <div><img src="{{asset('font/')}}/img/Oto_1/5.jpg" alt=""></div>
                           <div><img src="{{asset('font/')}}/img/Oto_1/6.jpg" alt=""></div> --}}
                        {{-- </div> --}}
                        <!-- chi tiết mô tả xe -->
                        <div class="info_text_car">
                           <div class="listing_meta">
                                 <span class="location"> <img src="{{asset('font/')}}/img/icons_ctsp/lc (1).png" alt=""> Hà
                                    Nội</span>
                                 <span class="location"><img src="{{asset('font/')}}/img/icons_ctsp/lc (2).png" alt="">
                                    {{$dataDetail->created_at}}</span>
                           </div>
                           <h4 class="mota_title">{{$dataDetail->ten}}</h4>
                           <div class="giaca">
                                 <p>{{$dataDetail->gia}}</p>
                                 <button type="button" class="btn btn-outline-secondary">Lưu Tin <i
                                       class="fa-regular fa-heart"></i></button>
                           </div>

                           <!-- mô tả xe   -->
                           <div class="mota">
                                 <p class="mota_title">Mô tả</p>
                                 <p>
                                    {{$dataDetail->mota}}
                                 </p>
                                 <p class="mota_title">Chi Tiết</p>
                           </div>
                           <table class="table table-striped table-bordered">
                                 <thead>
                                    <tr>
                                       <td><img src="{{asset('font/')}}/img/icons_ctsp/1.png" alt=""> Hãng xe</td>
                                       <td>{{$dataDetail->category_id}}</td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><img src="{{asset('font/')}}/img/icons_ctsp/3.png" alt=""> Năm sản xuất
                                       </td>
                                       <td>{{$dataDetail->namsx}}</td>
                                    </tr>
                                    <tr>
                                       <td><img src="{{asset('font/')}}/img/icons_ctsp/4.png" alt=""> Số km đã
                                             đi</td>
                                       <td>{{$dataDetail->kmdadi}}</td>
                                    </tr>
                                    <tr>
                                       <td><img src="{{asset('font/')}}/img/icons_ctsp/5.png" alt=""> Nhiên liệu
                                       </td>
                                       <td>{{$dataDetail->nhienlieu}}</td>
                                    </tr>
                                    <tr>
                                       <td><img src="{{asset('font/')}}/img/icons_ctsp/6.png" alt=""> Xuất xứ
                                       </td>
                                       <td>{{$dataDetail->xuatxu}}
                                       </td>
                                    </tr>
                                    <tr>
                                       <td><img src="{{asset('font/')}}/img/icons_ctsp/7.png" alt=""> Hộp số
                                       </td>
                                       <td>{{$dataDetail->hopso}}</td>
                                    </tr>
                                    <tr>
                                       <td><img src="{{asset('font/')}}/img/icons_ctsp/8.png" alt=""> Số chỗ
                                       </td>
                                       <td>{{$dataDetail->socho}}</td>
                                    </tr>
                                 </tbody>
                           </table>
                        </div>
                     </div>
               </div>
               <div class=" col-sm-3">
                     <div class="card card-body card_ctsp">
                        <h4 class="card-title">Liên Hệ</h4>
                        <p class="card-text">{{$dataDetail->chuxe}}</p>
                        <p><img src="{{asset('font/')}}/img/phone_14_14.png" alt=""> {{$dataDetail->sochuxe}}</p>
                        <p><img src="{{asset('font/')}}/img/location_12_13.png" alt=""> {{$dataDetail->diachi}}</p>
                        <a href="#" id="bt_right1" class="btn btn-danger"><img src="{{asset('font/')}}/img/phone_white_14_14.png"
                                 alt="">
                                 {{$dataDetail->sochuxe}}</a>
                        <br>
                        <a href="#" id="bt_right2" class="btn  btn-light1"><img src="{{asset('font/')}}/img/audit_16_16.png"
                                 alt="">
                           Car
                           Audit</a>
                     </div>
               </div>
            </div>
            @else
            @endif
         </div>
      </div>
   </div>
@endsection 
