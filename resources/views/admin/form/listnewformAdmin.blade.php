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
                                    <form action="{{route('showListAcc')}}" method="get" class="mb-2">
                                        <div class="row">
                                            <div class="col-3">
                                                <select class="form-control" id="" name="status">
                                                    <option value="0">Tất cả trạng thái</option>
                                                    <option value="active" {{request()->status=='1'?'selected':false}}
                                                    >Kích hoạt</option>
                                                    <option value="inactive" {{request()->status=='0'?'selected':false}}
                                                        >Chưa kích hoạt</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-control" id="" name="level">
                                                    <option value="0">Tất cả quyền</option>
                                                    <option value="Admin" {{request()->level=='1'?'selected':false}}>Admin</option>
                                                    <option value="Users" {{request()->level=='0'?'selected':false}}>Users</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <input type="search" class="form-control" name="search" value="{{request()->search}}" placeholder="Nhập Tìm Kiếm">
                                            </div>
                                            <div class="col-2">
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
                                            <th scope="col"><a href="?sortBy=name&sortType={{$sortType}}" id="loc_table">Name &#8645;</a></th>
                                            <th scope="col">Phone</th>
                                            <th scope="col"><a href="?sortBy=email&sortType={{$sortType}}" id="loc_table">Email &#8645;</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"><a href="?sortBy=created_at&sortType={{$sortType}}" id="loc_table">Create-at &#8645;</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Del</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($usersList))
                                            @foreach ($usersList as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{!! $item->level == 0
                                                        ? 'users'
                                                        : 'Admin' !!}</td>
                                                    <td>{!! $item->status == 0
                                                        ? '<button class="btn btn-danger">Chưa kích hoạt</button>'
                                                        : '<button class="btn btn-success">Đã kích hoạt</button>' !!}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td><a href="{{ route('editUsers', ['id' => $item->id]) }}"><button
                                                                type="button" class="btn btn-warning">Edit</button></a>
                                                    </td>
                                                    <td><a onclick="return confirm('Bạn chắc chắn muốn xóa')"
                                                            href="{{ route('deleteUsers', ['id' => $item->id]) }}"><button
                                                                type="button" class="btn btn-danger">Del</button></a></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <th scope="row"></th>
                                                <td colspan="7">Không có user nào !</td>
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
