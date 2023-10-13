<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function showHome()
    {
        return view('Home.index');
    }
    public function showAdmin()
    {
        return view('admin.form.listAcc');
    }
    public function showlistProduct()
    {
        return view('admin.form.listProduct');
    }
    public function showListNews()
    {
        return view('admin.form.ListNews');
    }
}
