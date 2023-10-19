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
    public function getAllProducts($search = 0,$sortArr = null)
    {
        $products =DB::table('products')
        ->select('products.*','category.hang')
        ->leftJoin('category','products.category_id','=','category.id');

        $orderBy = 'created_at';

        $orderType = 'DESC';

        if(!empty($sortArr) && is_array($sortArr)) {
            if(!empty($sortArr['sortBy']) && !empty($sortArr['sortType'])) {
                $orderBy = trim($sortArr['sortBy']);
                $orderType = trim($sortArr['sortType']);
            }
        }
        $products = $products->orderBy($orderBy,$orderType);
        
        if(!empty($search)){
            $products =  $products->where(function($query) use($search){
                $query->orWhere('ten','like','%'.$search.'%');
                $query->orWhere('category.hang','like','%'.$search.'%');
                $query->orWhere('gia','like','%'.$search.'%');
                $query->orWhere('chuxe','like','%'.$search.'%');
                $query->orWhere('sochuxe','like','%'.$search.'%');
                $query->orWhere('diachi','like','%'.$search.'%');
                $query->orWhere('socho','like','%'.$search.'%');
            });
        }
        
        $products = $products->get();
        return $products; 
    }
    //THÊM MỚI SẢN PHẨM
    public function addProducts($data)
    {
        return DB::insert('INSERT into products (ten,category_id,gia,nhienlieu,anh,mota,
        kmdadi,hopso,xuatxu,namsx,socho,chuxe,sochuxe,diachi,created_at) 
        values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', $data);
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
