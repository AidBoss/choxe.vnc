<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use  App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    //HIỂN THỊ DANH SÁCH SẢN PHẨM
    public function showListProducts()
    {
        $title = 'Danh sách sản phẩm';
        return view('admin.product.listProduct', compact('title'));
    }
    //HIỂN THỊ THÊM MỚI SẢN PHẨM
    public function showAddProducts()
    {
        $title = 'Thêm Sản Phẩm Mới';
        return view('admin.product.addProduct', compact('title'));
    }
    // THÊM MỚI SẢN PHẨM
    public function addProductsPost(ProductRequest $request)
    {
    }
}
