<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\BlockUserMiddleware;

class PageController extends Controller
{
    public function home()
    {
        return "Welcome to home page";
    }

    public function about()
    {
        return view('about');
    }

    public function user($id)
    {
        return "User id is : $id";
    }

    public function profile()
    {
        return "Profile";
    }
    public function dashboard()
    {
        return "Welcome to dash board";
    }
    
    }


