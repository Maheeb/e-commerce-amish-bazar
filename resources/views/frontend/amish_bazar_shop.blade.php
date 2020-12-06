@extends('frontend_shop_page_layout')
@section('page_level_style')
@endsection
@section('content')
    <header>

        <!-- navbar -->

        <div class="fixed-top">
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container-fluid">
                    <a id="off-btn"><img src="{{asset('frontend/images/icons/menu.png')}}" alt=""></a>
                    <a class="navbar-brand" href="{{route('home-page.index')}}"><img
                            src="{{asset('frontend/images/logos/logo.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('home-page.index')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('shop-page.index')}}">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('blog-page.index')}}">Blog</a>
                            </li>
                            <li class="nav-item single-line d-flex">
                                <a class="nav-link cart-show">
                                    <button data-toggle="modal" data-target="#cart"
                                            class="cart-image yellow-btn d-flex align-items-center justify-content-center">
                                        <img src="{{asset('frontend/images/icons/bcart.png')}}" alt="">
                                    </button>
                                    <div class="red-dot"></div>
                                </a>
                                <a class="nav-link">
                                    <button data-toggle="modal" data-target="#login"
                                            class="people-image yellow-btn d-flex align-items-center justify-content-center">
                                        <img src="{{asset('frontend/images/icons/people.png')}}" alt="">
                                    </button>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

    </header>
    <main>
        <!-- Modal -->

        <!-- modal login -->

        <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="login">
                        <h3 class="text-center">Welcome</h3>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 modal-button text-center">
                                    <form action="">
                                        <input class="form-control" type="email" placeholder="Email Address">
                                        <p></p>
                                        <input class="form-control" type="password" placeholder="Password">
                                        <br>
                                        <button type="button" class="yellow-btn">Log In</button>
                                    </form>
                                    <br>
                                    <br>
                                    <p class="reg">New here ? <a data-toggle="modal" data-target="#registration"
                                                                 data-dismiss="modal">Create an account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal registration -->

        <div class="modal fade" id="registration">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="registration">
                        <h3 class="text-center">Sign Up for Free</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Non
                            nulla arcu habitant
                            sollicitudin.</p>
                        <br>
                        <form action="">
                            <div class="container-fluid">
                                <div class="row modal-button">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="text" placeholder="Username">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="text" placeholder="Address">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="password" placeholder="Password">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="password" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="button" class="yellow-btn">Register</button>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal cart -->

        <div class="modal fade" id="cart">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="cart-items">
                        <br>
                        <h4 class="text-center">My Cart</h4>
                        <p></p>
                        <hr>
                        <p></p>
                        <br>
                        <div class="row modal-button ">
                            <div class="col-md-1 col-sm-1 col-1"></div>
                            <div id="modal_cart_items" class="col-md-10 col-sm-10 col-10 cart_item_class">

                                @foreach($cart_items as $item)


                                    <div class="all_cart_items" id="cart_item_id{{$item->id}}"
                                         data-id="all_items_cart_id{{$item->id}}">
                                        <div class="row">
                                            <div

                                                class="cart-font col-md-8 col-sm-8 col-8">{{$item->product->product_name}}</div>
                                            <div class="col-md-4 col-sm-4 col-4">৳
                                                <span

                                                    id="subTotal{{$item->id}}">{{number_format($item->product->price*$item->product_quantity)}}</span>
                                            </div>
                                            <div class="col-md-12 col-sm-10 col-10 ">
                                                <p></p>
                                                <div class="row ">
                                                    <div class="col-md-4 col-sm-4 col-4">
                                                        <p class="single d-flex align-items-center justify-content-center">
                                                            ৳

                                                            <span
                                                                id="itemTotal1">{{$item->product->price}}</span>/kg
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item"
                                                        data-id="{{$item->product_id}}">
                                                        <p id="cartMinus{{$item->id}}"
                                                           class="cartMinus d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('frontend/images/icons/minus.png') }}"
                                                                 alt="">
                                                        </p>
                                                        <p class="items"><span
                                                                class="cart_quantity"
                                                                id="item_quantity-{{$item->id}}">{{$item->product_quantity}}</span>
                                                        </p>


                                                        <p id="cartPlus{{$item->id}}"
                                                           class="cartPlus d-flex justify-content-center align-items-center ">
                                                            <img src="{{ asset('frontend/images/icons/plus.png') }}"
                                                                 alt="">
                                                        </p>


                                                    </div>
                                                    <div class="col-md-4 col-sm-2 col-2">
                                                        <p id="cartCross{{$item->id}}"
                                                           class="d-flex align-items-center justify-content-center cartCross"
                                                           data-id="{{$item->id}}">
                                                            <img src="{{ asset('frontend/images/icons/cross.png') }}"
                                                                 alt="">
                                                        </p>
                                                        <input type="hidden" data-id="{{$item->cart_id}}"
                                                               id="hidden_cart_id">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>


                                @endforeach

                                <div id='no-items' class="text-center">
                                    {{--                                <h5>No Items in Cart</h5>--}}
                                </div>
                            </div>
                            <div class="col-md-1"></div>

                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="col-md-1 col-sm- col-1"></div>
                            <div class="col-md-10 col-sm-10 col-10">
                                <div class="cart-font d-flex justify-content-between">
                                    <p>Gross Total</p>
                                    <p>৳ <span id="total">{{$total_amount}}</span></p>
                                </div>
                                <br>
                                <div class="text-center">
                                    <button class="yellow-btn">Checkout</button>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <!-- fixed icon -->

        <div class="fix">
            <a data-toggle="modal" data-target="#cart">
                <img src="{{asset('frontend/images/icons/fix.png')}}" alt="">
                <div class="fix-info">
                    <p>50 Items</p>
                    <h6>৳ 45000</h6>
                </div>
            </a>
        </div>

        <!-- all products -->

        <div class="container-fluid shop-products">

            <!-- sidebar -->

            <div id="see-side" class="see-side">
                <!-- <div id="mySidenav" class="sidenav"> -->
                <div id="custom" class="custom">
                    <a href="" class="menu d-flex align-items-center">
                        <p></p>
                        <img src="{{asset('frontend/images/icons/coronavirus.png')}}" alt="">
                        <p>COVID-19 Protections</p>
                    </a>
                    <a href="" class="menu d-flex align-items-center">
                        <p></p>
                        <img src="{{asset('frontend/images/icons/new.png')}}" alt="">
                        <p>New Arrivals</p>
                    </a>
                    <a href="" class="menu d-flex align-items-center">
                        <p></p>
                        <img src="{{asset('frontend/images/icons/sale.png')}}" alt="">
                        <p>Flash Sales</p>
                    </a>

                    <a href="" class="menu d-flex align-items-center">
                        <p></p>
                        <img src="{{asset('frontend/images/icons/chicken.png')}}" alt="">
                        <p>Chicken</p>
                    </a>
                    <a href="" class="menu d-flex align-items-center">
                        <p></p>
                        <img src="{{asset('frontend/images/icons/cow.png')}}" alt="">
                        <p>Cow</p>
                    </a>
                    <a href="" class="menu d-flex align-items-center">
                        <p></p>
                        <img src="{{asset('frontend/images/icons/sheep.png')}}" alt="">
                        <p>Lamb</p>
                    </a>
                    <a href="" class="side-menu-last menu d-flex align-items-center">
                        <p></p>
                        <img src="{{asset('frontend/images/icons/fish.png')}}" alt="">
                        <p>Fish</p>
                    </a>
                    <br>
                    <div id="range" class="range">
                        <h6>Price Range</h6>
                        <input type="range" id="myinput" min="200" max="1000">
                        <br>
                        <small>৳ 200 - 1000</small>
                    </div>
                </div>

            </div>

            <!-- products -->

            <div id="all-products" class="row all-products products">
                @foreach($products as $product)

                    <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">


                        <div class="product_cart" id="{{ $product->id }}" data-id="{{$product->id}}">

                            <img src="{{ asset($product->product_image) }}" alt="">
                            <div class="product-info text-center">
                                <a href="#">
                                    <h6>{{ $product->product_name }}</h6>
                                </a>
                                <small>{{ $product->quantity }}</small>
                                <br>
                                <strong>৳ {{ $product->price }}</strong>

                            </div>

                            <div style="display: none" id="item-plus-minus-{{$product->id}}"
                                 data-id="{{$product->id}}"
                                 class="cart-plus-minus">

                                <div class="plus-minus d-flex test">
                                    <button class="page-minus" id="product-minus-{{$product->id}}">
                                        <strong class="d-flex align-items-center justify-content-center">-</strong>
                                    </button>
                                    <p class="d-flex align-items-center justify-content-center">
                                    <span id="product-item-quantity-{{$product->id}}"
                                          class="product-item-quantity">0</span> in Cart

                                    </p>

                                    <button id="product-plus-{{$product->id}}" class="page-plus">
                                        <strong class="d-flex align-items-center justify-content-center">+</strong>
                                    </button>
                                </div>

                            </div>


                            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                            <button type="button" id='item-zero-{{$product->id}}' data-id="{{ $product->id }}"
                                    class="yellow-btn cart-add">
                                Add to cart
                            </button>


                        </div>
                    </div>





                @endforeach


                {{--            <div class="col-md-12">--}}
                {{--                <div class="pagination-custom text-center">--}}
                {{--                    <a href="">--}}
                {{--                        <p>1</p>--}}
                {{--                    </a>--}}
                {{--                    <a class="red" href="">--}}
                {{--                        <p>2</p>--}}
                {{--                    </a>--}}
                {{--                    <a href="">--}}
                {{--                        <p>3</p>--}}
                {{--                    </a>--}}
                {{--                    <a href="">--}}
                {{--                        <p>...</p>--}}
                {{--                    </a>--}}
                {{--                    <a href="">--}}
                {{--                        <p>20</p>--}}
                {{--                    </a>--}}
                {{--                    <a href="">--}}
                {{--                        <p>21</p>--}}
                {{--                    </a>--}}
                {{--                    <a href="">--}}
                {{--                        <p>22</p>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div>

    </main>
@endsection

@section('page_plugin_script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous"></script>
@endsection

@section('page_level_script')

    <script>

        var config = {
            routes: {

                get_product: "{!! route('products.get') !!}",
                product_add_to_cart_operation: "{!! route('add_to_cart.products') !!}",
                get_cart_items: "{!! route('cart-items.get') !!}",
                cart_items_delete: "{!! route('cart-items.delete') !!}",
                {{--selected_cart: "{!! route('cart.selected') !!}",--}}
                {{--cart_total: "{!! route('cart.total') !!}",--}}
                {{--category_wise_product: "{!! route('category_wise_product.get') !!}",--}}
                {{--slider_price_value: "{!! route('price_wise_product.get') !!}",--}}


            }
        };

        function cartCross() {

            $(".cartCross").off("click").on('click', function (event) {

                var cart_product_id = $(this).data('id');
                var cart_id = $('#hidden_cart_id').data('id');

                console.log(cart_product_id, cart_id);

                $.ajax({
                    url: config.routes.cart_items_delete,
                    type: "get",
                    data: {

                        cart_product_id: cart_product_id,
                        cart_id: cart_id,

                    },

                    success: function (data) {
                        // cartTotal();
                    },
                    error: function (data, errorThrown) {


                    }
                });

                // event.stopImmediatePropagation();
            });
        }


        function test_cart() {
            $('.my_cart_item').off("click").on('click', function (e) {

                var product_id = $(this).data('id');
                // var product_quantity = "";
                var product_quantity = ($(this).find('.cart_quantity').text());
                // var cart_quantity = ($(this).find('.cart_quantity').text());


                // if (cart_quantity == 0) {
                //
                //     product_quantity = ($(this).find('.product-item-quantity').text());
                // } else {
                //     product_quantity = ($(this).find('.cart_quantity').text());
                // }


                console.log(product_id, product_quantity);


                $.ajax({
                    url: config.routes.product_add_to_cart_operation,
                    type: "get",
                    data: {
                        product_id: product_id,
                        product_quantity: product_quantity,
                    },
                    success: function (data) {


                    }

                })


            });
        }

        $(document).ready(function () {


            // cart_test();

            test_cart();
            modal_operation();


            function modal_operation() {

                $.ajax({
                    url: config.routes.get_cart_items,
                    type: "get",


                    success: function (data) {


                        // cartTotal();
                        cartCross();

                        let totalItem = Object.keys(data.carts).length;
                        const noItems = document.getElementById('no-items');

// no items in cart

                        function displayNone() {
                            if (totalItem < 0) {
                                noItems.style.display = 'block';
                            }
                        }

                        $.each(data.carts, function (key, value) {
                            let plus1 = document.getElementById('cartPlus' + value.id);
                            let minus1 = document.getElementById('cartMinus' + value.id);
                            let cross1 = document.getElementById('cartCross' + value.id);
                            let item1 = document.getElementById('item' + value.id);
                            // console.log(minus1)

                            // plus handler

                            plus1.addEventListener('click', function () {
                                const quantity = document.getElementById('item_quantity-' + value.id).innerText;
                                const quantityNumber = parseInt(quantity);
                                const item1Quantity = addQuantity('item_quantity-' + value.id, 1, quantityNumber);
                                const onePrice = singlePrice('subTotal' + value.id, item1Quantity - 1);
                                addPrice('subTotal' + value.id, item1Quantity, onePrice);
                                total('total', onePrice);
                            });


                            minus1.addEventListener('click', function () {
                                const quantity = document.getElementById('item_quantity-' + value.id).innerText;
                                const quantityNumber = parseInt(quantity);
                                // console.log(quantityNumber);
                                if (quantityNumber > 1) {
                                    const item1Quantity = addQuantity('item_quantity-' + value.id, -1, quantityNumber);
                                    const onePrice = singlePrice('subTotal' + value.id, item1Quantity + 1);
                                    addPrice('subTotal' + value.id, item1Quantity, onePrice);
                                    total('total', (-1 * onePrice));
                                }
                            });

                            cross1.addEventListener('click', function () {
                                const subTotal = document.getElementById('subTotal' + value.id).innerText;
                                // console.log(subTotal);
                                const subTotalNumber = parseInt(subTotal);
                                total('total', (-1 * subTotalNumber));
                                totalItem--;
                                displayNone();
                                item1.style.display = 'none';

                            })

                        });
                        // $('.product_cart, .my_cart_item').on('click', function (e) {
                        $('.product_cart').on('click', function (e) {


                            var product_id = $(this).data('id');
                            var product_quantity = ($(this).find('.product-item-quantity').text());
                            // var cart_quantity = ($(this).find('.cart_quantity').text());


                            // if (cart_quantity == 0) {
                            //
                            //     product_quantity = ($(this).find('.product-item-quantity').text());
                            // } else {
                            //     product_quantity = ($(this).find('.cart_quantity').text());
                            // }


                            $.ajax({
                                url: config.routes.product_add_to_cart_operation,
                                type: "get",
                                data: {
                                    product_id: product_id,
                                    product_quantity: product_quantity,
                                },
                                success: function (data) {
                                    if (data.status === "first_order_created") {
                                        // $('#modal_cart_items').empty();
                                        var subTotalPrice = data.cart_product.product.price * data.cart_product.product_quantity;
                                        $('#modal_cart_items').append('<div class="all_cart_items" id="item' + data.cart_product.id + '" data-id="all_items_cart_id' + data.cart_product.id + '"><div class="row"><div class="cart-font col-md-8 col-sm-8 col-8">' + data.cart_product.product.product_name + '</div> <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal' + data.cart_product.id + '"> ' + subTotalPrice + ' </span> </div>    <div class="col-md-12 col-sm-10 col-10 ">   <p></p>     <div class="row ">         <div class="col-md-4 col-sm-4 col-4">  <p class="single d-flex align-items-center justify-content-center">৳ <span id="itemTotal1">' + data.cart_product.product.price + '</span>kg</p></div> <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item" data-id="' + data.cart_product.product_id + '">  <p id="cartMinus' + data.cart_product.id + '" class="cartMinus d-flex align-items-center justify-content-center"> <img src="frontend/images/icons/minus.png" alt=""></p>  <p class="items"><span class="cart_quantity" id="item_quantity-' + data.cart_product.id + '">' + data.cart_product.product_quantity + '</span></p> <p id="cartPlus' + data.cart_product.id + '" class="cartPlus d-flex justify-content-center align-items-center"><img src="frontend/images/icons/plus.png" alt=""></p>     </div>    <div class="col-md-4 col-sm-2 col-2"><p id="cartCross' + data.cart_product.id + '" class="d-flex align-items-center justify-content-center cartCross" data-id="' + data.cart_product.id + '"><img src="frontend/images/icons/cross.png" alt=""></p>  <input type="hidden" data-id="' + data.cart_product.cart_id + '" id="hidden_cart_id">  </div>      </div>               </div>                       </div>       <hr>         </div>');

                                        cartCross();

                                        test_cart();
                                        let plus1 = document.getElementById('cartPlus' + data.cart_product.id);
                                        let minus1 = document.getElementById('cartMinus' + data.cart_product.id);
                                        let cross1 = document.getElementById('cartCross' + data.cart_product.id);
                                        let item1 = document.getElementById('item' + data.cart_product.id);
                                        // console.log(minus1)

                                        // plus handler

                                        plus1.addEventListener('click', function () {
                                            const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                            const quantityNumber = parseInt(quantity);
                                            const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, 1, quantityNumber);
                                            const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity - 1);
                                            addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                            total('total', onePrice);
                                        });


                                        minus1.addEventListener('click', function () {
                                            const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                            const quantityNumber = parseInt(quantity);
                                            // console.log(quantityNumber);
                                            if (quantityNumber > 1) {
                                                const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, -1, quantityNumber);
                                                const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity + 1);
                                                addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                                total('total', (-1 * onePrice));
                                            }
                                        });

                                        cross1.addEventListener('click', function () {
                                            const subTotal = document.getElementById('subTotal' + data.cart_product.id).innerText;
                                            // console.log(subTotal);
                                            const subTotalNumber = parseInt(subTotal);
                                            total('total', (-1 * subTotalNumber));
                                            totalItem--;
                                            displayNone();
                                            item1.style.display = 'none';

                                        })

                                    }
                                    else if (data.status === "order_created_after_first_order") {
                                        // $('#modal_cart_items').empty();
                                        var subTotalPrice = data.cart_product.product.price * data.cart_product.product_quantity;
                                        $('#modal_cart_items').append('<div class="all_cart_items" id="item' + data.cart_product.id + '" data-id="all_items_cart_id' + data.cart_product.id + '"><div class="row"><div class="cart-font col-md-8 col-sm-8 col-8">' + data.cart_product.product.product_name + '</div> <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal' + data.cart_product.id + '"> ' + subTotalPrice + ' </span> </div>    <div class="col-md-12 col-sm-10 col-10 ">   <p></p>     <div class="row ">         <div class="col-md-4 col-sm-4 col-4">  <p class="single d-flex align-items-center justify-content-center">৳ <span id="itemTotal1">' + data.cart_product.product.price + '</span>kg</p></div> <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item" data-id="' + data.cart_product.product_id + '">  <p id="cartMinus' + data.cart_product.id + '" class="cartMinus d-flex align-items-center justify-content-center"> <img src="frontend/images/icons/minus.png" alt=""></p>  <p class="items"><span class="cart_quantity" id="item_quantity-' + data.cart_product.id + '">' + data.cart_product.product_quantity + '</span></p> <p id="cartPlus' + data.cart_product.id + '" class="cartPlus d-flex justify-content-center align-items-center"><img src="frontend/images/icons/plus.png" alt=""></p>     </div>    <div class="col-md-4 col-sm-2 col-2"><p id="cartCross' + data.cart_product.id + '" class="d-flex align-items-center justify-content-center cartCross" data-id="' + data.cart_product.id + '"><img src="frontend/images/icons/cross.png" alt=""></p>  <input type="hidden" data-id="' + data.cart_product.cart_id + '" id="hidden_cart_id">  </div>      </div>               </div>                       </div>       <hr>         </div>');
                                        cartCross();
                                        test_cart();


                                        let plus1 = document.getElementById('cartPlus' + data.cart_product.id);
                                        let minus1 = document.getElementById('cartMinus' + data.cart_product.id);
                                        let cross1 = document.getElementById('cartCross' + data.cart_product.id);
                                        let item1 = document.getElementById('item' + data.cart_product.id);
                                        // console.log(minus1)

                                        // plus handler

                                        plus1.addEventListener('click', function () {
                                            const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                            const quantityNumber = parseInt(quantity);
                                            const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, 1, quantityNumber);
                                            const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity - 1);
                                            addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                            total('total', onePrice);
                                        });


                                        minus1.addEventListener('click', function () {
                                            const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                            const quantityNumber = parseInt(quantity);
                                            // console.log(quantityNumber);
                                            if (quantityNumber > 1) {
                                                const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, -1, quantityNumber);
                                                const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity + 1);
                                                addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                                total('total', (-1 * onePrice));
                                            }
                                        });

                                        cross1.addEventListener('click', function () {
                                            const subTotal = document.getElementById('subTotal' + data.cart_product.id).innerText;
                                            // console.log(subTotal);
                                            const subTotalNumber = parseInt(subTotal);
                                            total('total', (-1 * subTotalNumber));
                                            totalItem--;
                                            displayNone();
                                            item1.style.display = 'none';

                                        })

                                    }
                                    // else {
                                    //
                                    //     var subTotalPrice = data.cart_product.product.price * data.cart_product.product_quantity;
                                    //     $('#cart_item_id' + data.cart_product.id).replaceWith('<div class="all_cart_items" id="cart_item_id' + data.cart_product.id + '" data-id="all_items_cart_id' + data.cart_product.id + '"><div class="row"><div class="cart-font col-md-8 col-sm-8 col-8">' + data.cart_product.product.product_name + '</div> <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal' + data.test.id + '"> ' + subTotalPrice + ' </span> </div>    <div class="col-md-12 col-sm-10 col-10 ">   <p></p>     <div class="row ">         <div class="col-md-4 col-sm-4 col-4">  <p class="single d-flex align-items-center justify-content-center">৳ <span id="itemTotal1">' + data.cart_product.product.price + '</span>kg</p></div> <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item" data-id="' + data.cart_product.product_id + '">  <p id="cartMinus' + data.cart_product.id + '" class="cartMinus d-flex align-items-center justify-content-center"> <img src="frontend/images/icons/minus.png" alt=""></p>  <p class="items"><span class="cart_quantity" id="item_quantity-' + data.cart_product.id + '">' + data.cart_product.product_quantity + '</span></p> <p id="cartPlus' + data.cart_product.id + '" class="cartPlus d-flex justify-content-center align-items-center"><img src="frontend/images/icons/plus.png" alt=""></p>     </div>    <div class="col-md-4 col-sm-2 col-2"><p id="cartCross' + data.cart_product.id + '" class="d-flex align-items-center justify-content-center cartCross" data-id="' + data.cart_product.id + '"><img src="frontend/images/icons/cross.png" alt=""></p>  <input type="hidden" data-id="' + data.cart_product.cart_id + '" id="hidden_cart_id">   </div>      </div>               </div>                       </div>       <hr>         </div>');
                                    //
                                    //     cartCross();
                                    //     test_cart();
                                    //
                                    //
                                    //     let plus1 = document.getElementById('cartPlus' + data.cart_product.id);
                                    //     let minus1 = document.getElementById('cartMinus' + data.cart_product.id);
                                    //     let cross1 = document.getElementById('cartCross' + data.cart_product.id);
                                    //     let item1 = document.getElementById('item' + data.cart_product.id);
                                    //     // console.log(minus1)
                                    //
                                    //     // plus handler
                                    //
                                    //     plus1.addEventListener('click', function () {
                                    //         const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                    //         const quantityNumber = parseInt(quantity);
                                    //         const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, 1, quantityNumber);
                                    //         const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity - 1);
                                    //         addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                    //         total('total', onePrice);
                                    //     });
                                    //
                                    //
                                    //     minus1.addEventListener('click', function () {
                                    //         const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                    //         const quantityNumber = parseInt(quantity);
                                    //         // console.log(quantityNumber);
                                    //         if (quantityNumber > 1) {
                                    //             const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, -1, quantityNumber);
                                    //             const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity + 1);
                                    //             addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                    //             total('total', (-1 * onePrice));
                                    //         }
                                    //     });
                                    //
                                    //     cross1.addEventListener('click', function () {
                                    //         const subTotal = document.getElementById('subTotal' + data.cart_product.id).innerText;
                                    //         // console.log(subTotal);
                                    //         const subTotalNumber = parseInt(subTotal);
                                    //         total('total', (-1 * subTotalNumber));
                                    //         totalItem--;
                                    //         displayNone();
                                    //         item1.style.display = 'none';
                                    //
                                    //     })
                                    //
                                    // }


                                }

                            });


                        });


                    }


                });


            }


            const cartMinus = document.getElementsByClassName('page-minus');
            const cartPlus = document.getElementsByClassName('page-plus');
            const cartItemsAdd = document.getElementsByClassName('cart-add');

            // const cartModalPlus = document.getElementsByClassName('cartPlus');

            // cart add

            $.ajax({
                url: config.routes.get_product,
                type: "get",
                data: {},
                success: function (data) {

                    // console.log(data.products);
                    // cartTotal();
                    $.each(data.products, function (key, value) {

                        cartItemsAdd[key].onclick = function () {
                            let item = cartItemsAdd[key];
                            item.style.display = "none";
                            // console.log(value.id);
                            document.getElementById("item-plus-minus-" + value.id).style.display = "block";
                            const quantity = document.getElementById("product-item-quantity-" + value.id).innerText;
                            const quantityNumber = parseInt(quantity);
                            updatedQuantity(("product-item-quantity-" + value.id), 1, quantityNumber);
                        }
                    });


                    $.each(data.products, function (key, value) {

                        cartPlus[key].onclick = function () {
                            const quantity = document.getElementById("product-item-quantity-" + value.id).innerText;
                            const quantityNumber = parseInt(quantity);
                            updatedQuantity(("product-item-quantity-" + value.id), 1, quantityNumber);
                        }
                    });


                    $.each(data.products, function (key, value) {

                        cartMinus[key].onclick = function () {
                            let item = cartMinus[key];
                            const quantity = document.getElementById("product-item-quantity-" + value.id).innerText;
                            const quantityNumber = parseInt(quantity);
                            if (quantity > 1) {
                                updatedQuantity(("product-item-quantity-" + value.id), -1, quantityNumber);
                            } else {
                                updatedQuantity(("product-item-quantity-" + value.id), -1, quantityNumber);
                                document.getElementById("item-plus-minus-" + value.id).style.display = "none";
                                document.getElementById("item-zero-" + value.id).style.display = "block";
                            }
                        }
                    });


                },
                error: function (data, errorThrown) {


                }
            });


            // updated quantity

            function updatedQuantity(id, number, quantityNumber) {
                const updatedQuantity = quantityNumber + number;
                document.getElementById(id).innerText = updatedQuantity;
            }


            // adding or removing Quantity

            function addQuantity(id, number, quantityNumber) {
                const updatedQuantity = quantityNumber + number;
                document.getElementById(id).innerText = updatedQuantity;
                return updatedQuantity;
            }

            // adding or removing price

            function addPrice(id, quantity, onePrice) {
                const price = document.getElementById(id).innerText;
                // console.log(price)
                const priceNumber = parseFloat(price);
                const updatedPrice = quantity * onePrice;
                document.getElementById(id).innerText = (updatedPrice).toFixed(0);
                return updatedPrice;
            }

            //
            // calculate single price

            function singlePrice(id, quantity) {
                const price = document.getElementById(id).innerText;
                const priceNumber = parseFloat(price);
                const singlePrice = priceNumber / quantity;
                return singlePrice;
            }

            // calculate total price

            function total(id, singlePrice) {
                const total = document.getElementById(id).innerText;
                // const totalNumber = parseFloat(total);
                let totalNumber = parseFloat(total);
                if (totalNumber < 0) {
                    totalNumber = 0;
                }
                document.getElementById(id).innerText = (totalNumber + singlePrice).toFixed(0);
            }


        })


    </script>


@endsection
