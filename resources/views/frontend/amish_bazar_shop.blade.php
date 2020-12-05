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
                    <a class="navbar-brand" href="{{route('home-page.index')}}"><img src="{{asset('frontend/images/logos/logo.png')}}" alt=""></a>
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
                        <div class="col-md-10 col-sm-10 col-10">
                            <div id="item1">
                                <div class="row">
                                    <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                    <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal1">400</span></div>
                                    <div class="col-md-12 col-sm-10 col-10">
                                        <p></p>
                                        <div class="row ">
                                            <div class="col-md-4 col-sm-4 col-4">
                                                <p class="single d-flex align-items-center justify-content-center">৳
                                                    <span id="itemTotal1">200</span>/kg</p>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                                <p id="cartMinus1"
                                                   class="cartMinus d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/minus.png')}}" alt="">
                                                </p>
                                                <p class="items"><span id="itemQuantity1">2</span></p>
                                                <p id="cartPlus1"
                                                   class="cartPlus d-flex justify-content-center align-items-center ">
                                                    <img src="{{asset('frontend/images/icons/plus.png')}}" alt="">
                                                </p>
                                            </div>
                                            <div class="col-md-4 col-sm-2 col-2">
                                                <p id="cartCross1"
                                                   class="cartCross d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/cross.png')}}" alt="">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div id="item2">
                                <div class="row">
                                    <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                    <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal2">400</span></div>
                                    <div class="col-md-12 col-sm-10 col-10">
                                        <p></p>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-4">
                                                <p class="single d-flex align-items-center justify-content-center">৳
                                                    <span id="itemTotal2">200</span>/kg</p>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                                <p id="cartMinus2"
                                                   class="cartMinus d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/minus.png')}}" alt="">
                                                </p>
                                                <p class="items"><span id="itemQuantity2">2</span></p>
                                                <p id="cartPlus2"
                                                   class="cartPlus d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/plus.png')}}" alt="">
                                                </p>
                                            </div>
                                            <div class="col-md-4 col-sm-2 col-2">
                                                <p id="cartCross2"
                                                   class="cartCross d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/cross.png')}}" alt="">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div id="item3">
                                <div class="row">
                                    <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                    <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal3">400</span></div>
                                    <div class="col-md-12 col-sm-10 col-10">
                                        <p></p>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-4">
                                                <p class="single d-flex align-items-center justify-content-center">৳
                                                    <span id="itemTotal3">200</span>/kg</p>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                                <p id="cartMinus3"
                                                   class="cartMinus d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/minus.png')}}" alt="">
                                                </p>
                                                <p class="items"><span id="itemQuantity3">2</span></p>
                                                <p id="cartPlus3"
                                                   class="cartPlus d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/plus.png')}}" alt="">
                                                </p>
                                            </div>
                                            <div class="col-md-4 col-sm-2 col-2">
                                                <p id="cartCross3"
                                                   class="cartCross d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/cross.png')}}" alt="">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div id="item4">
                                <div class="row">
                                    <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                    <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal4">400</span></div>
                                    <div class="col-md-12 col-sm-10 col-10">
                                        <p></p>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-4">
                                                <p class="single d-flex align-items-center justify-content-center">৳
                                                    <span id="itemTotal4">200</span>/kg</p>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                                <p id="cartMinus4"
                                                   class="cartMinus d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/minus.png')}}" alt="">
                                                </p>
                                                <p class="items"><span id="itemQuantity4">2</span></p>
                                                <p id="cartPlus4"
                                                   class="cartPlus d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/plus.png')}}" alt="">
                                                </p>
                                            </div>
                                            <div class="col-md-4 col-sm-2 col-2">
                                                <p id="cartCross4"
                                                   class="cartCross d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('frontend/images/icons/cross.png')}}" alt="">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id='no-items' class="text-center">
                                <h5>No Items in Cart</h5>
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
                                <p>৳ <span id="total">1600</span></p>
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
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product cart">
                    <img src="{{asset('frontend/images/shop-items/amish1.png')}}" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Beef Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 350</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-0" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-0" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-0">0</span> in Cart</p>
                            <button id="product-plus-0" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-0' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="{{asset('frontend/images/shop-items/amish2.png')}}" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Loitta Fish</h6>
                        </a>
                        <small>250 gm</small>
                        <br>
                        <strong>৳ 450</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-1" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-1" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-1">0</span> in Cart</p>
                            <button id="product-plus-1" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-1' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="{{asset('frontend/images/shop-items/amish3.png')}}" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Chicken Raw Meat</h6>
                        </a>
                        <small>250 gm</small>
                        <br>
                        <strong>৳ 350</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-2" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-2" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-2">0</span> in Cart</p>
                            <button id="product-plus-2" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-2' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="{{asset('frontend/images/shop-items/amish4.png')}}" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Lamb Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 750</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-3" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-3" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-3">0</span> in Cart</p>
                            <button id="product-plus-3" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-3' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="{{asset('frontend/images/shop-items/amish5.png')}}" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Prawn Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 850</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-4" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-4" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-4">0</span> in Cart</p>
                            <button id="product-plus-4" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-4' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="{{asset('frontend/images/shop-items/amish6.png')}}" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Sheep Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 550</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-5" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-5" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-5">0</span> in Cart</p>
                            <button id="product-plus-5" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-5' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>

            <div class="col-md-12">
                <div class="pagination-custom text-center">
                    <a href="">
                        <p>1</p>
                    </a>
                    <a class="red" href="">
                        <p>2</p>
                    </a>
                    <a href="">
                        <p>3</p>
                    </a>
                    <a href="">
                        <p>...</p>
                    </a>
                    <a href="">
                        <p>20</p>
                    </a>
                    <a href="">
                        <p>21</p>
                    </a>
                    <a href="">
                        <p>22</p>
                    </a>
                </div>
            </div>
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

@endsection
