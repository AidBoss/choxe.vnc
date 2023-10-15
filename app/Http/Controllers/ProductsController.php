<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //HIỂN THỊ DANH SÁCH SẢN PHẨM
    public function showListProducts()
    {
        $title = 'Danh sách sản phẩm';
        return view('admin.product.listProduct', compact('title'));
    }
}
