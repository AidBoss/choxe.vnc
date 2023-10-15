<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    //LẤY DANH SÁCH SẢN PHẨM
    public function getAllProducts()
    {
        $users = DB::select('SELECT * FROM users ORDER BY created_at DESC');
        return $users;
    }

    //THÊM MỚI SẢN PHẨM
    public function addProducts($data)
    {
        return DB::insert('INSERT into products (ten,loai,gia,mota,hang,namsx,kmdadi,
        nhienlieu,xuatxu,kieudang,socho,chuxe,diachi,list_anh,sochuxe) 
        values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', $data);
    }
}
