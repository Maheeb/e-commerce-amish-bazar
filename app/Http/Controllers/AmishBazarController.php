<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartProduct;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class AmishBazarController extends Controller
{
    //
    public function home_page()
    {
        $cart_items = CartProduct::with('carts','product')->get();
//        dd($cart_items);

        $cart_count = CartProduct::count();

        $total_amount = 0;

        foreach ($cart_items as $item) {

            $total_amount += $item->product_quantity * $item->product->price;


        }
        $products = Product::with('cart_product')->where('active_status', 1)->get();
        return view('frontend.amish_bazar_home',compact('products','cart_count','total_amount','cart_items'));
    }

    public function shop_page()
    {

        $cart_items = CartProduct::with('carts','product')->get();
//        dd($cart_items);

        $cart_count = CartProduct::count();

        $total_amount = 0;

        foreach ($cart_items as $item) {

            $total_amount += $item->product_quantity * $item->product->price;


        }
        $products = Product::with('cart_product')->where('active_status', 1)->get();
        $categories = Category::with('products')->get();

        return view('frontend.amish_bazar_shop',compact('products','cart_items','total_amount','cart_count','categories'));
    }

    public function blog_page()
    {
        return view('frontend.amish_bazar_blog');
    }

    public function category_wise_product(Request $request)
    {
        $category_id = $request->category_id;

        $products = Product::with('categories')->where('category_id', $category_id)->get();

        return response()->json([

            "products" =>$products
        ]);

    }

    public function sngle_product_page($id){
        $cart_items = CartProduct::with('carts','product')->get();
//        dd($cart_items);

        $cart_count = CartProduct::count();

        $total_amount = 0;

        foreach ($cart_items as $item) {

            $total_amount += $item->product_quantity * $item->product->price;


        }

        $product = Product::with('cart_product')->find($id);
        $products = Product::with('cart_product')->where('active_status', 1)->get();

//        dd($product);
        return view('frontend.single_product',compact('product','cart_count','total_amount','cart_items','products'));
    }

}
