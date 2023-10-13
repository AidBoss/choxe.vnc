@extends('admin.form.had')
@section('body_web')
    <div class="box_acc">
        <form action="GET" class="form_list">
            <table class="table tb_listAcc">
                <thead>
                    <tr>
                        <th scope=" col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ank</td>
                        <td>0128676234</td>
                        <td>Ahihi@gmail.com</td>
                        <td>akdev22</td>
                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                        <td><button type="button" class="btn btn-danger">Del</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection
