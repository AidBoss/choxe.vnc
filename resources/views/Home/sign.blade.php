@include('layout.script')
@section('title')
    {{ $title }}
@endsection
<title>{{ $title }}</title>
<div class=login_padding>
    <form action="{{ route('regiterPost') }}" method="post" class="login-table">
        @csrf
        <div class="UP">
            <div class="sign-in-page">
                Trang Đăng Ký
            </div>
        </div>
        <div class="DOWN">
            <div class="space">
                <div class="form-outline mb-4" id="space_er">
                    <label class="form-label" id="lb_tkmk" for="form2Example2">
                        Tài khoản
                    </label>
                    <input value="{{ old('name') }}" type="text" id="ip_tkmk" name="name"
                        class="form-control2" />
                    @if ($errors->has('name'))
                        <div class="error">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4" id="space_er">
                    <label class="form-label" id="lb_tkmk" for="form2Example2">
                        Số điện thoại
                    </label>
                    <input value="{{ old('phone') }}" type="text" id="ip_tkmk" name="phone"
                        class="form-control2" />
                    @if ($errors->has('phone'))
                        <div class="error">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4" id="space_er">
                    <label class="form-label" id="lb_tkmk" for="form2Example2">
                        Email
                    </label>
                    <input value="{{ old('email') }}" type="email" id="ip_tkmk" name="email"
                        class="form-control2" />
                    @if ($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4" id="space_er">
                    <label class="form-label" id="lb_tkmk" for="form2Example2">
                        Mật khẩu
                    </label>
                    <input value="{{ old('password') }}" type="password" id="ip_tkmk" name="password"
                        class="form-control2" />
                    @if ($errors->has('password'))
                        <div class="error">{{ $errors->first('pass') }}</div>
                    @endif
                </div>
            </div>
    </form>
    <div class="login-flex">
        <button type="submit" name="btnOke" class="btn btn-primary btn-block mb-4 login-button">
            Đăng Ký
        </button>
    </div>
    <div class="text-center">
        <p>Bạn đã có tài khoản?
            <a href="{{ route('showLogin') }}">
                Đăng nhập ngay!
            </a>
        </p>
    </div>
</div>
</div>
