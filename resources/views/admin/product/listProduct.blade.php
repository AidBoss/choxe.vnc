@extends('admin.form.newFormAdmin')
@section('title')
    {{ $title }}
@endsection
@section('body_new')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">DANH SÁCH NGƯỜI DÙNG</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">List Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">List Product</h3>
                                <div class="card-tools">
                                    <form action="{{route('showListProducts')}}" method="get" class="mb-2">
                                        <div class="row">
                                            <div class="col-8">
                                                <input type="search" class="form-control" name="search" value="{{request()->search}}" placeholder="Nhập Tìm Kiếm....">
                                            </div>
                                            <div class="col-4">
                                                <button type="submit"  class="btn btn-info" name="" id=""> Tìm kiếm</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"><a href="?sortBy=ten&sortType={{$sortType}}" id="loc_table">Tên &#8645;</a></th>
                                            <th scope="col"><a href="?sortBy=gia&sortType={{$sortType}}" id="loc_table">Giá &#8645;</a></th>
                                            <th scope="col">Hãng</th>
                                            <th scope="col"><a href="?sortBy=namsx&sortType={{$sortType}}" id="loc_table">Năm sx &#8645;</a></th>
                                            <th scope="col"><a href="?sortBy=socho&sortType={{$sortType}}" id="loc_table">Số chỗ &#8645;</a></th>
                                            <th scope="col">Ảnh xe</th>
                                            <th scope="col">Số liên hệ</th>
                                            <th scope="col"><a href="?sortBy=chuxe&sortType={{$sortType}}" id="loc_table">Tên liên hệ &#8645;</a></th>
                                            <th scope="col">Địa chỉ</th>
                                            <th scope="col">Sửa</th>
                                            <th scope="col">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($listProducts))
                                            @foreach ($listProducts as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</td>
                                                    <td>{{ $item->ten }}</td>
                                                    <td>{{ $item->gia }}</td>
                                                    <td>{{ $item->hang }}</td>
                                                    <td>{{ $item->namsx }}</td>
                                                    <td>{{ $item->socho }}</td>
                                                    <td style="width: 150px"><img style="object-fit: cover; width: 100%;
                                                    height:50%" src="{{ asset('font/img-product/'.$item->anh) }}" alt="anhxe"></td>
                                                    <td>{{ $item->sochuxe }}</td>
                                                    <td>{{ $item->chuxe }}</td>
                                                    <td>{{ $item->diachi }}</td>
                                                    <td><a href="{{ route('editProducts', ['id' => $item->id]) }}"><button
                                                                type="button" class="btn btn-warning">Edit</button></a>
                                                    </td>
                                                    <td><a onclick="return confirm('Bạn chắc chắn muốn xóa')"
                                                            href="{{ route('deleteProsucts', ['id' => $item->id]) }}"><button
                                                                type="button" class="btn btn-danger">Del</button></a></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <th scope="row"></th>
                                                <td colspan="12">Không Sản Phẩm Nào !</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
