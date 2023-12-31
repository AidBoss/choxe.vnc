<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use  App\Http\Requests\ProductRequest;
use App\Models\Category;
class ProductsController extends Controller
{
    private $Products;
    private $Category;
    const _PER_PAGE = 4;
    public function __construct()
    {
        // GỌI HÀM Products
        $this->Products = new Products();
        // GỌI HÀM CATEGORY
        $this->Category = new Category();
    }
    //HIỂN THỊ DANH SÁCH SẢN PHẨM
    public function showListProducts(Request $request)
    {
        $title = 'Danh sách sản phẩm';
        //tìm kiếm bằng search
        $search ='';
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
        $listProducts = $this->Products->getAllProducts($search,$sortArr,self::_PER_PAGE);
        return view('admin.product.listProduct', compact('title', 'listProducts','sortType'));
    }
    //HIỂN THỊ THÊM MỚI SẢN PHẨM
    public function showAddProducts()
    {
        $allCategory = $this->Category->getAllCategory();
        $title = 'Thêm Sản Phẩm Mới';
        return view('admin.product.addProduct', compact('title','allCategory'));
    }
    // THÊM MỚI SẢN PHẨM
    public function addProductsPost(ProductRequest $request)
    {
        
        $imageName = time().'.'.$request->anh->extension();
        $request->anh->move(public_path('/font/img-product'), $imageName);
        $dataInsert = [
            $request->ten,
            $request->category_id,
            $request->gia,
            $request->nhienlieu,
            $imageName,
            $request->mota,
            $request->kmdadi,
            $request->hopso,
            $request->xuatxu,
            $request->namsx,
            $request->socho,
            $request->chuxe,
            $request->sochuxe,
            $request->diachi,
            date('Y-m-d')
        ];
        $this->Products->addProducts($dataInsert);
        return redirect()->route('showAddProducts')->with('success', 'Thêm mới Sản Phẩm thành công');
    }
    // CHỨC NĂNG LẤY DỮ LIỆU CỦA TÀI KHOẢN ĐÃ CHỌN SỬA TÀI KHOẢN
    public function editProducts(Request $request, $id = 0)
    {
        $allCategory = $this->Category->getAllCategory();
        $title = 'Cập nhập sản phẩm';
        if (!empty($id)) {
            $dataDetail = $this->Products->getIdProducts($id);
            if (!empty($dataDetail[0])) {
                $request->session()->put('id', $id);
                $dataDetail = $dataDetail[0];
            } else {
                return redirect()->route('showListProducts')->with('fail', 'Sản phẩm này không tồn tại!');
            }
        } else {
            return redirect()->route('showListProducts')->with('fail', 'Liên kết không tồn tại');
        }
        return view('admin.product.editProduct', compact('title', 'dataDetail','allCategory'));
    }

    // CHỨC NĂNG SỬA TÀI KHOẢN ĐÃ LẤY 

    public function editProductsPost(ProductRequest $request)
    {
        $id = session('id');
        if (empty($id)) {
            return back()->with('fail', 'id không tồn tại!');
        }
        $dataUpdate = [
            $request->ten,
            $request->category_id,
            $request->gia,
            $request->nhienlieu,
            $request->anh,
            $request->mota,
            $request->kmdadi,
            $request->hopso,
            $request->xuatxu,
            $request->namsx,
            $request->socho,
            $request->chuxe,
            $request->sochuxe,
            $request->diachi,
        ];
        $this->Products->updateProducts($dataUpdate, $id);
        return back()->with('success', 'Update Sản Phẩm Thành Công');
    }

    //CHỨC NĂNG XÓA SẢN PHẨM
    public function deleteProsucts($id = 0)
    {
        if (!empty($id)) {
            $dataDetail = $this->Products->getIdProducts($id);
            if (!empty($dataDetail[0])) {
                $delStatus = $this->Products->deleteProducts($id);
                if ($delStatus) {
                    $msg = 'Xóa Sản phẩm Thành Công';
                } else {
                    $msg = 'Xóa Sản Phẩm không thành công. Thử lại lần sau !';
                }
            } else {
                $msg = 'Sản Phẩm này không tồn tại!';
            }
        } else {
            $msg = 'Liên kết không tồn tại';
        }
        return redirect()->route('showListProducts')->with('fail', $msg);
    }
    
}
