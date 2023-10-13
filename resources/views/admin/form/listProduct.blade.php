@extends('admin.form.had')
@section('body_web')
    <div class="list_product">
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
