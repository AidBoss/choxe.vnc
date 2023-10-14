<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class userController extends Controller
{
    public function showListUser()
    {
        $title = 'Thông tin User';
        return view('user.form.ttnd', compact('title'));
    }
}
