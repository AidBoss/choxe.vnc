@extends('admin.form.had')
@section('title')
    {{ $title }}
@endsection
<title>{{ $title }}</title>
@section('body_web')
    <form action="{{ route('editUsersPost') }}" method="post" class="addUsers_form">
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
        <div class="title_addusers">
            Sửa tài khoản !
        </div>
        <div class="contents_addusers">
            <div class="items_contents_addusers">
                <div class="form-outline mb-4">
                    <label class="form-label user-name" id="lb_tkmk" for="form2Example2">
                        Tên tài khoản
                    </label>
                    <input value="{{ old('name') ?? $dataDetail->name }}" type="text" id="ip_tkmk" name="name"
                        class="form-control" required />
                    @error('name')
                        <span class="error">{{ $errors->first('name') }}</span>
                    @enderror
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" id="lb_tkmk" for="form2Example2">
                        Email
                    </label>
                    <input value="{{ old('email') ?? $dataDetail->email }}" type="email" id="ip_tkmk" name="email"
                        class="form-control" required />
                    @error('email')
                        <span class="error">{{ $errors->first('email') }}</span>
                    @enderror
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" id="lb_tkmk" for="form2Example2">
                        Số điện thoại
                    </label>
                    <input value="{{ old('phone') ?? $dataDetail->phone }}" type="text" id="ip_tkmk" name="phone"
                        class="form-control" required />
                    @error('phone')
                        <span class="error">{{ $errors->first('phone') }}</span>
                    @enderror
                </div>
            </div>
            <div class="btn_more_users">
                <button id="btn_mr_us" type="submit" name="sub"
                    class="btn btn-success btn-block mb-4 login-button">Thêm mới
                </button>
                <a id="btn_mr_us" href="{{ route('showListAcc') }}" class="btn btn-warning ">Trở lại
                </a>
            </div>
        </div>
    </form>
@endsection
