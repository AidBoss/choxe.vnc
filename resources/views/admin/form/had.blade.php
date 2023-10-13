@include('layout.script')
<div class="header">
    <h3>TRANG QUẢN TRỊ VIÊN </h3>
</div>
<div class="box">
    <div class="select_option_admin">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand">ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link " href="{{ route('showListAcc') }}">Quản Lý tài khoản User
                    </a>
                    <a class="nav-item nav-link" href="{{ route('showListProduct') }}">Quản lý danh sách sản
                        phẩm</a>
                    <a class="nav-item nav-link" href="{{ route('showListNews') }}">Quản lý bài đăng</a>
                    <a class="nav-item nav-link" href="">đăng xuất</a>
                </div>
            </div>
        </nav>
    </div>
    @yield('body_web')
    {{-- <div class="footer_ad" style="background-color: aqua">
        adadadadad
    </div> --}}
</div>
