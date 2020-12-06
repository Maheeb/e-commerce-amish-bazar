<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartProduct;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function get_products()
    {
        $products = Product::with('cart_product')->get();

        return response()->json([

            "products" => $products
        ]);
    }

    public function product_add_to_cart_operation(Request $request)

    {

        $product_quantity = (int)$request->product_quantity;

        if ($product_quantity == null) {
            $product_quantity = 1;
        }
        $product_id = (int)$request->product_id;

        $user_ip = request()->ip();

        $input = array();

        $cart = Cart::where('user_ip', request()->ip())->first();
        if (!is_null($cart)) {

            $cart_data = Cart::find($cart->id);
            $cart_data->user_ip = $user_ip;

            $cart_data->save();

            if ($cart_data) {
//                $cart_product = new CartProduct();
                $cart_product_id = CartProduct::where('cart_id', $cart_data->id)->where('product_id', $product_id)->first();

//                dd($cart_product_id);

                if (!is_null($cart_product_id)) {

                    $cart_product = CartProduct::find($cart_product_id->id);

                    $cart_product->cart_id = $cart_data->id;
                    $cart_product->product_id = $product_id;
                    $cart_product->product_quantity = $product_quantity;
                    $cart_product->save();

                    $status = "existing_updated";
                    $cart_product = CartProduct::with('product')->find($cart_product->id);

//            dd($add_to_cart_item);
                    return response()->json([

                    "cart_product" => $cart_product,
                    "status" => $status
                    ]);

                } else {

                    $cart_product = new CartProduct();
                    $cart_product->cart_id = $cart_data->id;
                    $cart_product->product_id = $product_id;
                    $cart_product->product_quantity = $product_quantity;
                    $cart_product->save();


                    $status = "order_created_after_first_order";
//                    $status = "first_order_created";

                    $cart_product = CartProduct::with('product')->find($cart_product->id);


                    return response()->json([

                        "cart_product" => $cart_product,
                        "status" => $status
                    ]);

                }

            }
        } else {

            $input['user_ip'] = $user_ip;
            $cart_id = Cart::create($input);
            if ($cart_id) {
                $cart_product = new CartProduct();

                $cart_product->cart_id = $cart_id->id;
                $cart_product->product_id = $product_id;
                $cart_product->product_quantity = $product_quantity;
                $cart_product->save();

            }
            $status = "first_order_created";
            $cart_product = CartProduct::with('product')->find($cart_product->id);


            return response()->json([

                "status" =>$status,
                "cart_product" => $cart_product
            ]);
        }


    }

    public function get_cart_items()
    {

        $carts = CartProduct::with('product')->get();

        return response()->json([

            "carts" => $carts
        ]);


    }

    public function destroy(Request $request)
    {

//        dd($request->cart_id, $request->cart_product_id);

        $cart_product_id = CartProduct::find($request->cart_product_id);
        $cart_product_id->delete();

        $cart_id_exist = CartProduct::where('cart_id', $request->cart_id)->first();


        if (is_null($cart_id_exist)) {

                $cart = Cart::find($request->cart_id);
                $cart->delete();
        }

//        $cart_product_delete = CartProduct::where('cart_id', $request->cart_id)->first();
//        $cart_product_id = CartProduct::find($cart_product_delete->id);
//        $cart_product_id->delete();
//
//        $cart_id->delete();


    }


}
