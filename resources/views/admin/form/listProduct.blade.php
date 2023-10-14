@extends('admin.form.had')
@section('title')
    {{ $title }}
@endsection
<title>{{ $title }}</title>
@section('body_web')
    <div class="list_product">
        <div class="header_list_acc">
            <h5 class="form_search_user">
                Danh sách người dùng
            </h5>
            <form action="" method="post">
                <label for="">Tìm kiếm User : </label>
                <input type="text" name="" id="" class="form-control" placeholder="Nhập Tên"
                    aria-describedby="helpId">
            </form>
            {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>
        <form action="GET" class="form_list">
            <table class="table tb_listAcc">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </form>
    </div>
@endsection
