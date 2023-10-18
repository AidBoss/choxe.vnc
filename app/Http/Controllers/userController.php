<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    private $users;
    public function __construct()
    {
        $this->users = new Users();
    }
    public function showListUser()
    {
        $title = 'Thông tin User';
        return view('user.form.ttnd', compact('title'));
    }
    
    // CHỨC NĂNG LẤY DỮ LIỆU CỦA TÀI KHOẢN ĐÃ CHỌN SỬA TÀI KHOẢN
    // public function editUsers(Request $request, $id = 0)
    // {
    //     if (!empty($id)) {
    //         $dataDetail = $this->users->getIdUser($id);
    //         if (!empty($dataDetail[0])) {
    //             $request->session()->put('id', $id);
    //             $dataDetail = $dataDetail[0];
    //         } else {
    //             return redirect()->route('showListAcc')->with('fail', 'Người dùng này không tồn tại!');
    //         }
    //     } else {
    //         return redirect()->route('showListAcc')->with('fail', 'Liên kết không tồn tại');
    //     }
    // }
    public function editUsersNmPost(request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('/font/img-avata'), $imageName);
        $query = User::find(Auth::user()->id)->update([
            'name' => $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'image'=> $imageName,
        ]);
        if(!empty($query)){
            return back()->with('success','');
        }else{ 
            return back()->with('error','');
        }
    }
}
