<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use  App\Http\Requests\ProductRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class ProductsController extends Controller

{
    private $Products;
    private $Category;
    public function __construct()
    {
        // GỌI HÀM Products
        $this->Products = new Products();
        // GỌI HÀM CATEGORY
        $this->Category = new Category();
    }
    //HIỂN THỊ DANH SÁCH SẢN PHẨM
    public function showListProducts()
    {
        $title = 'Danh sách sản phẩm';
        $listProducts = $this->Products->getAllProducts();
        return view('admin.product.listProduct', compact('title', 'listProducts'));
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
        $dataInsert = [
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
        $this->Products->addProducts($dataInsert);
        return redirect()->route('showAddProducts')->with('success', 'Thêm mới Sản Phẩm thành công');
    }
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
