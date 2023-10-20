<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use  App\Http\Requests\ProductRequest;
use App\Models\Category;
class CategoryController extends Controller
{
    private $Products;
    private $Category;
    public const _PER_PAGE = 8;
    public function __construct()
    {
        // GỌI HÀM Products
        $this->Products = new Products();
        // GỌI HÀM CATEGORY
        $this->Category = new Category();
    }
    //HIỂN THỊ TRANG CHI TIẾT SẢN PHẨM 
    public function showDetailProduct(Request $request){
        $title = 'Danh sách sản phẩm';
        $search ='';
        $allCategory = $this->Category->getAllCategory();
        //tìm kiếm bằng search
        if(!empty($request->search)){
            $search = $request->search;
        }
        $listProducts = $this->Products->getAllProducts($search, $allCategory,self::_PER_PAGE);
        return view('Home.detail_products', compact('title', 'listProducts','allCategory'));
    }
    // public function showtdmn(Request $request){
    //     $title = 'Danh sách sản phẩm';
    //     $search ='';
    //     //tìm kiếm bằng search
    //     if(!empty($request->search)){
    //         $search = $request->search;
    //     }
    //     $listProducts = $this->Products->getAllProducts();
    //     return view('layout.tdmn', compact('title', 'listProducts'));
    // }
    // public function showDetailhome(){
    //     return view('Home.chitietsanpham');
    // }
    public function showDetailhome(Request $request, $id = 0)
    {
        if (!empty($id)) {
            $allCategory = $this->Category->getAllCategory();
            $title = 'Cập nhập người dùng';
            if (!empty($dataDetail[0])) {
                $dataDetail = $this->Products->getIdProducts($id);
                $dataDetail = $dataDetail[0];
            } else {
                return redirect()->route('showHome')->with('fail', 'Người dùng này không tồn tại!');
            }
        } else {
            return redirect()->route('showLogin')->with('fail', 'Liên kết không tồn tại');
        }
        return view('Home.chitietsanpham', compact('title', 'dataDetail'));
    }
}
