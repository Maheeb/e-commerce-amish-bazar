<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartProduct;
use App\Product;
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

        $cart_items = CartProduct::with('carts','product')->get();
//        dd($cart_items);

        $cart_count = Cart::count();

        $total_amount = 0;

        foreach ($cart_items as $item) {

            $total_amount += $item->product_quantity * $item->product->price;


        }
        $products = Product::with('cart_product')->where('active_status', 1)->get();


        return view('frontend.amish_bazar_shop',compact('products','cart_items','total_amount'));
    }

    public function blog_page()
    {
        return view('frontend.amish_bazar_blog');
    }


}
