<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function viewHome () {
        return view('welcome');
    }

    public function viewBlog () {
        return view('user.blog');
    }
}
