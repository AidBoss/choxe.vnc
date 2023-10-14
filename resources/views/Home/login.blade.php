@include('layout.script')
@section('title')
    {{ $title }}
@endsection
<title>{{ $title }}</title>
<div class=login_padding>
    <form action="{{ route('loginPost') }}" method="post" class="login-table">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('fail'))
            <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
        @endif

        @csrf
        <div class="UP">
            <div class="sign-in-page">
                Trang Đăng Nhập
            </div>
        </div>
        @csrf
        <div class="DOWN">
            <div class="uName-pWord">
                <div class="form-outline mb-4">
                    <label class="form-label user-name" id="lb_tkmk" for="form2Example2">
                        Tên tài khoản
                    </label>
                    <input @if (isset($_COOKIE['name'])) value="{{ $_COOKIE['name'] }}" @endif type="text"
                        id="ip_tkmk" name="name" class="form-control" required="" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" id="lb_tkmk" for="form2Example2">
                        Mật khẩu
                    </label>
                    <input @if (isset($_COOKIE['password'])) value="{{ $_COOKIE['password'] }}" @endif type="password"
                        id="ip_tkmk" name="password" required="" class="form-control" required="" />
                </div>
            </div>
            <div class="rPassword-lButton">
                <div class="row mb-4">
                    <div class="col d-flex">
                        <div class="form-check">
                            <input type="checkbox" name="remember"
                                @if (isset($_COOKIE['name'])) value="{{ $_COOKIE['name'] }}" checked="" @endif
                                id="form2Example31" />
                            <label class="form-check-label" for="form2Example31">
                                Lưu mật khẩu
                            </label>
                        </div>
                    </div>
                </div>
                <div class="login-flex">
                    <button type="submit" name="sub" class="btn btn-primary btn-block mb-4 login-button">Đăng Nhập
                    </button>
                </div>
                <div class="col center">
                    <a href="">Quên mật khẩu?</a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <p>Bạn chưa có tài khoản?
                <a id="change_login" href="{{ url('Home/sign') }}">
                    Đăng ký ngay!
                </a>
            </p>
        </div>
    </form>
</div>
