<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmishBazarController extends Controller
{
    //
    public function home_page()
    {
        return view('frontend.amish_bazar_home');
    }

    public function shop_page()
    {
        return view('frontend.amish_bazar_shop');
    }

    public function blog_page()
    {
        return view('frontend.amish_bazar_blog');
    }


}
