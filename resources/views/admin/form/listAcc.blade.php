@extends('admin.form.had')
@section('title')
    {{ $title }}
@endsection
<title>{{ $title }}</title>
@section('body_web')
    <div class="box_acc">
        <div class="header_list_acc">
            <h5 class="form_search_user">
                Danh sách người dùng
            </h5>
            <form class="form_user_acc" action="" method="post">
                <input name="in_user_acc" type="text" id="" class="form-control"
                    placeholder="Nhập Tên Tài khoản cần tìm" aria-describedby="helpId">
                <input name="sub" id="bt_user_acc" class="btn btn-success" type="button" value="Search">
            </form>
            <form class="more_users_acc" action="" method="post">
                <label for="" class="lb_more_users_acc">Thêm tài khoản:</label>
                <a href="{{ route('addUsers') }}"><input id="bt_user_acc" class="btn btn-info" type="button"
                        value="More account"></a>
            </form>
        </div>
        <form action="GET" class="form_list">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('fail'))
                <div class="alert alert-success">
                    {{ session('fail') }}
                </div>
            @endif
            <table class="table tb_listAcc">
                <thead>
                    <tr>
                        <th scope=" col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">created_at</th>
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
                                <td>{{ $item->created_at }}</td>
                                <td><a href="{{ route('editUsers', ['id' => $item->id]) }}"><button type="button"
                                            class="btn btn-warning">Edit</button></a></td>
                                <td><a onclick="return confirm('Bạn chắc chắn muốn xóa')"
                                        href="{{ route('deleteUsers', ['id' => $item->id]) }}"><button type="button"
                                            class="btn btn-danger">Del</button></a></td>
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
        </form>
    </div>
@endsection
