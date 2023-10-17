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
        $products =DB::table('products')
        ->select('products.*','category.hang')
        ->leftJoin('category','products.category_id','=','category.id')
        ->orderBy('created_at','DESC')
        ->get();
        return $products; 
    }
    //THÊM MỚI SẢN PHẨM
    public function addProducts($data)
    {
        return DB::insert('INSERT into products (ten,category_id,gia,nhienlieu,anh,mota,
        kmdadi,hopso,xuatxu,namsx,socho,chuxe,sochuxe,diachi) 
        values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)', $data);
    }
    // TÌM KIẾM THEO ID TRONG DATABASE
    public function getIdProducts($id)
    {
        
        return DB::select('SELECT * FROM ' . $this->table . ' where id = ?', [$id]);
    }
     // LẤY VÀ GÁN GIÁ TRỊ MỚI PHẦN UPDATE
    public function updateProducts($data, $id)
    {
        $data[] = $id;
        return DB::update('UPDATE ' . $this->table . ' 
            SET ten = ?,
            category_id = ?,
            gia = ?,
            nhienlieu = ?,
            anh = ?,
            mota = ?,
            kmdadi = ?,
            hopso = ?,
            xuatxu = ?,
            namsx = ?,
            socho = ?,
            chuxe = ?,
            sochuxe = ?,
            diachi = ?
            where id = ?', 
            $data );
            
    }
    // XÓA NGƯỜI DÙNG
    public function deleteProducts($id)
    {
        return DB::table('products')->where('id', $id)->delete();
    }
    
}
