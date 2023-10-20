@include('layout.script')
@extends('/layout/h+f')
@section('title')
    {{ $title }}
@endsection
@section('body_web')
<title>{{ $title }}</title>
<div class="new_content">
    <form action="{{route('showDetailProduct')}}" method="get" class="mb-2">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2"> 
                {{-- <select name="category_id" id="inputState" class="form-control">
                    <option selected value="0">Tìm theo hãng</option>
                        @if(!empty($allCategory))
                            @foreach($allCategory as $item)
                                <option value="{{$item->id}}">{{$item->hang}}</option>
                            @endforeach
                        @endif
                </select> --}}
            </div>
            <div class="col-2">
                {{-- <select name="nhienlieu" id="inputState" class="form-control">
                    <option selected>Loại Nhiên liệu</option>
                    <option value="Xăng">Xăng</option>
                    <option value="Điện">Điện</option>
                    <option value="Dầu">dầu</option>
                    <option value="Hybrid">hybrid</option>
                </select> --}}
            </div>
            
            <div class="col-3">
                <input type="search" class="form-control" name="search" value="{{request()->search}}" placeholder="Nhập Tìm Kiếm....">
            </div>
            <div class="col-2">
                <button type="submit"  class="btn btn-info" name="" id=""> Tìm kiếm</button>
            </div>
        </div>
    </form>
    <form action="{{ route('showDetailProduct') }}" method="get">
        <div class="row">
            @if (!empty($listProducts))
                @foreach ($listProducts as $key => $item)
                    <div class="col-xs-3" style=" margin: 10px 5px ">
                        <div class="card" style="width: 17rem;">
                            <a target="_blank" id="cart_content_h" href="{{ route('showDetailhome',$item->id) }}">
                                <img class="card-img-top" s src="{{ asset('font/img-product/'.$item->anh) }}" alt="anhxe"></a>
                            <div class="card-body">
                                <a target="_blank"  id="cart_content_h" href="#">   
                                    <h3 class="card-title">{{$item->ten}}</h3>
                                </a>
                                <p id="card_content_txt" class="card-text">{{$item->namsx}} • {{$item->hopso}} • {{$item->kmdadi}} km</p>
                                <h5 id="card_content_price" class="">{{$item->gia}}</h5>
                                <p id="card_content_txt" class="card-text">{{$item->diachi}} • {{$item->created_at}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <tr>
                    <th scope="row"></th>
                    <td colspan="12">Không Sản Phẩm Nào !</td>
                </tr>
            @endif
        </div>
    </form> 
    <div class="page_select">
        {{$listProducts->links()}}
    </div>
</div>
@endsection 
