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
    //HIỂN THỊ TRANG danh sach san pham 
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
    //HIỂN THỊ TRANG chi tiet san pham
    public function showDetailhome(Request $request, $id = null)
    {
        if (!empty($id)) {
            $title = 'Chi tiết sản phẩm';
            $dataDetail = $this->Products->getIdProducts($id);
            $allCategory = $this->Category->getAllCategory();
            if (!empty($dataDetail[0])) {
                $request->session()->put('id', $id);
                $dataDetail = $dataDetail[0];
            } else {
                return back()->with('fail', 'sản phẩm này bị lỗi');
            }
        } else {
            return back()->with('fail', 'Liên kết không tồn tại');
        }
        return view('Home.chitietsanpham', compact('title', 'allCategory','dataDetail'));
    }
}
