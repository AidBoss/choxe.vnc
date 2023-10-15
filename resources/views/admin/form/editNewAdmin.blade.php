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
                        <h4 class="m-0">Thêm người dùng mới</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add New Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-header border-0">
                            </div>
                            <div class="card-body ">
                                <form action="{{ route('editUsersPost') }}" method="post" style="margin: 0 auto;width:50%">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            Dữ liệu nhập không hợp lệ.
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="form-group col-md-12">
                                        <label for="name">Tên Tài Khoản</label>
                                        <input value="{{ old('name') ?? $dataDetail->name }}" name='name' type="text"
                                            class="form-control" id="name">
                                        @error('phone')
                                            <span class="error">{{ $errors->first('name') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="email">Email</label>
                                        <input value="{{ old('email') ?? $dataDetail->email }}" name='email'
                                            type="email" class="form-control" id="email">
                                        @error('email')
                                            <span class="error">{{ $errors->first('email') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="phone">Số điện thoại</label>
                                        <input value="{{ old('phone') ?? $dataDetail->phone }}" name='phone'
                                            type="text" class="form-control" id="phone">
                                        @error('phone')
                                            <span class="error">{{ $errors->first('phone') }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="password">Mật Khẩu</label>
                                        <input value="{{ old('password') ?? $dataDetail->password }}" name='password'
                                            type="text" class="form-control" id="password">
                                        @error('password')
                                            <span class="error">{{ $errors->first('password') }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group text-center">
                                        <button name='sub' type="submit" class="btn btn-success">Thêm
                                            Mới</button>
                                        <a href="{{ route('showListAcc') }}" type="submit" class="btn btn-warning">Trở Lại
                                        </a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
