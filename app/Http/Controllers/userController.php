<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function showListUser()
    {
        return view('user.form.ttnd');
    }
}
