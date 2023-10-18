<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    // LẤY RA TẤT CẢ CÁC USER CÓ TRONG MẢNG
    public function getAllUsers($filters=[],$search = 0,$sortArr = null)
    {
        $users =DB::table('users')
        ->select('users.*');
        // ->orderBy('created_at','DESC');

        $orderBy = 'created_at';

        $orderType = 'DESC';

        if(!empty($sortArr) && is_array($sortArr)) {
            if(!empty($sortArr['sortBy']) && !empty($sortArr['sortType'])) {
                $orderBy = trim($sortArr['sortBy']);
                $orderType = trim($sortArr['sortType']);
            }
        }
        $users = $users->orderBy($orderBy,$orderType);
        
        if(!empty($filters)){
            $users = $users->where($filters);
        }
        if(!empty($search)){
            $users = $users->where(function($query) use($search){
                $query->orWhere('name','like','%'.$search.'%');
                $query->orWhere('email','like','%'.$search.'%');
            });
        }
        $users = $users->get();
        return $users;
    }
    // GÁN THÊM MỚI DỮ LIỆU VÀO BẢNG
    public function addUsers($data)
    {
        return DB::insert('INSERT into users (name,email,phone,password,created_at) 
        values (?, ?,?,?,?)', $data);
    }
    // TÌM KIẾM THEO ID TRONG DATABASE
    public function getIdUser($id)
    {
        return DB::select('SELECT * FROM ' . $this->table . ' where id = ?', [$id]);
    }
    // LẤY VÀ GÁN GIÁ TRỊ MỚI PHẦN UPDATE
    public function updateUsers($data, $id)
    {
        $data[] = $id;
        return DB::update('UPDATE ' . $this->table . ' SET name = ?, email = ?,phone = ?,password = ?, updated_at = ? where id = ?', $data);
    }

    // XÓA NGƯỜI DÙNG
    public function deleteUsers($id)
    {
        return DB::table('users')->where('id', $id)->delete();
    }
    // public function updateUserNm($data,$id)
    // {
    //     $data[] = $id;
    //     return DB::update('UPDATE ' . $this->table . ' SET name = ?, email = ?,phone = ?,image = ?, updated_at = ? where id = ?', $data);
    // }
}
