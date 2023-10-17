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
                                <h3 class="card-title">List Users</h3>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tên</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Hãng</th>
                                            <th scope="col">Năm sx</th>
                                            <th scope="col">Số chỗ</th>
                                            <th scope="col">Ảnh xe</th>
                                            <th scope="col">Số liên hệ</th>
                                            <th scope="col">Tên liên hệ</th>
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
                                                    <td>{{ $item->anh }}</td>
                                                    <td>{{ $item->sochuxe }}</td>
                                                    <td>{{ $item->chuxe }}</td>
                                                    <td>{{ $item->diachi }}</td>
                                                    <td><a href="{{ route('editUsers', ['id' => $item->id]) }}"><button
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
