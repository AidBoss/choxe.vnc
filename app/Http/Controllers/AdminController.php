<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

class AdminController extends Controller
{
    private $users;
    public function __construct()
    {
        $this->users = new Users();
    }

    public function showAdmin(Request $request)
    {
        $title = 'Danh sách người dùng';
        //lọc theo trạng thái 
        $filters =[];
        if(!empty($request->status)){
            $status = $request->status;
            if($status == "active"){
                $status = 1;
            }else{
                $status =0;
            }
            $filters[] = ['users.status','=',$status];
        }   
        // lọc theo quyền được cấp
        if(!empty($request->level)){
            $level = $request->level;
            if($level == "Admin"){
                $level = 1;
            }else{
                $level =0;
            }
            $filters[] = ['users.level','=',$level];
        }
        $search ='';
        //tìm kiếm bằng search
        if(!empty($request->search)){
            $search = $request->search;
        }
        // sắp xếp khi nhấn: 
        $sortType = $request->input('sortType');
        $sortBy = $request->input('sortBy');
        $allowSort = ['ASC','DESC'] ;
            if(!empty($sortBy)&&in_array($sortType,$allowSort)){
                if($sortType == 'DESC'){
                    $sortType = 'ASC';
                }else{
                    $sortType = 'DESC';
                }
            }else{
                $sortType = 'ASC';
            }
        $sortArr = [
            'sortBy'=> $sortBy,
            'sortType'=> $sortType,
        ];
        $usersList = $this->users->getAllUsers($filters,$search,$sortArr);
        return view('admin.form.listnewformAdmin', compact('title', 'usersList','sortType'));
    }

    // HIỂN THỊ FORM CHỨC NĂNG THÊM MỚI TÀI KHOẢN
    public function addUsers()
    {
        $title = 'Thêm người dùng';
        return view('admin.form.addNewAdmin', compact('title'));
    }
    // CHỨC NĂNG THÊM MỚI TÀI KHOẢN
    public function addUsersPost(UserRequest $request)
    {
        $pass = Hash::make($request->password);
        $dataInsert = [
            $request->name,
            $request->email,
            $request->phone,
            $pass,
            date('Y-m-d H:i:s')
        ];
        $this->users->addUsers($dataInsert);
        return redirect()->route('showListAcc')->with('success', 'Thêm mới tài khoản thành công');
    }
    // CHỨC NĂNG LẤY DỮ LIỆU CỦA TÀI KHOẢN ĐÃ CHỌN SỬA TÀI KHOẢN
    public function editUsers(Request $request, $id = 0)
    {
        $title = 'Cập nhập người dùng';
        if (!empty($id)) {
            $dataDetail = $this->users->getIdUser($id);
            if (!empty($dataDetail[0])) {
                $request->session()->put('id', $id);
                $dataDetail = $dataDetail[0];
            } else {
                return redirect()->route('showListAcc')->with('fail', 'Người dùng này không tồn tại!');
            }
        } else {
            return redirect()->route('showListAcc')->with('fail', 'Liên kết không tồn tại');
        }
        return view('admin.form.editNewAdmin', compact('title', 'dataDetail'));
    }

    // CHỨC NĂNG SỬA TÀI KHOẢN ĐÃ LẤY 

    public function editUsersPost(UserRequest $request)
    {
        $id = session('id');
        if (empty($id)) {
            return back()->with('fail', 'id không tồn tại!');
        }
        $pass = Hash::make($request->password);
        $dataUpdate = [
            $request->name,
            $request->email,
            $request->phone,
            $pass,
            date('Y-m-d H:i:s')
        ];
        $this->users->updateUsers($dataUpdate, $id);
        return back()->with('success', 'Update users success');
    }

    // CHỨC NĂNG XÓA TÀI KHOẢN
    public function deleteUsers($id = 0)
    {
        if (!empty($id)) {
            $dataDetail = $this->users->getIdUser($id);
            if (!empty($dataDetail[0])) {
                $delStatus = $this->users->deleteUsers($id);
                if ($delStatus) {
                    $msg = 'Xóa Người Dùng Thành Công';
                } else {
                    $msg = 'Xóa người dùng không thành công. Thử lại lần sau !';
                }
            } else {
                $msg = 'Người dùng này không tồn tại!';
            }
        } else {
            $msg = 'Liên kết không tồn tại';
        }
        return redirect()->route('showListAcc')->with('fail', $msg);
    }

    // HIỂN THỊ FORM CHỨC NĂNG QUẢN LÝ BÀI ĐĂNG
    public function showListNews()
    {
        $title = 'Trang quản lý bài đăng';
        return view('admin.form.ListNews', compact('title'));
    }
    // HIỂN THỊ FORM CHỨC NĂNG THÊM MỚI TÀI KHOẢN
    public function showHome()
    {
        $title = 'Chợ Xe';
        return view('Home.index', compact('title'));
    }
}
