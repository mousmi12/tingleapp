<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.header')
</head>

<body>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('assets/user/images/Tingle2.jpg')}}" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('assets/user/images/Tingle1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/user/images/Tingle3.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <nav class="primary-nav padding-small position-absolute top-0 col-12">
        <div class="container">
            <div class="row d-flex justify-content-end">
                <!-- <div class="col-lg-2 col-md-2">
                <div class="main-logo">
                  <a href="index.html">
                    <img src="{{asset('assets/user/images/main-logo.png')}}" alt="logo">
                  </a>
                </div>
              </div> -->
                <div class="col-lg-6 col-md-">
                    @include('user.menu')
                </div>
            </div>
        </div>
    </nav>

    <section>
        <h1>Our Product Categories</h1>
        <div class="row d-flex justify-content-center align-items-center">
            @foreach($categories as $category)
            <div class="d-flex flex-column justify-content-center align-items-center shadow p-3 mb-5 rounded"
                style="width: 250px;height:300px;background-color: #ff000017;margin: 10px;">
                <div class="d-flex justify-content-center align-items-center" style="width: 200px;height:250px;">
                <a href="{{ route('user.products', $category->id) }}"> <!-- Assuming you have a route to display category details -->
                <img src="{{ asset($category->image) }}" style="width: 200px;height:200px;border-radius: 50% 50%;"
                    alt="{{ $category->name }}">
            </a>
                </div>
                <div class="d-flex justify-content-center">
                  
                        <h4>{{ $category->name }}</h4>
                  
                </div>
            </div>
            @endforeach

        </div>
        
    </section>


    <section id="latest-collection">
        <div class="container">
            <div class="product-collection row">
                <div class="col-lg-7 col-md-12 left-content">
                    <div class="collection-item">
                        <div class="products-thumb">
                            <img src="{{asset('assets/user/images/baby blanket.jpeg')}}" alt="collection item"
                                class="large-image image-rounded img-fluid">
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6 product-entry">
                            <div class="categories"><h3 class="item-title" style="color: white;">Snuggle Delight</h3></div>
                            
                            <p style="color: white;">Wrap your baby in the Snuggle Delight blanket for warm and cozy moments.
                            </p>
                            <div class="btn-wrap">
                                <a href="shop.html" class="d-flex align-items-center">shop collection <i
                                        class="icon icon-arrow-io"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 right-content flex-wrap">
                    <div class="collection-item top-item">
                        <div class="products-thumb">
                            <img src="{{asset('assets/user/images/crochetbag.jpeg')}}" alt="collection item"
                                class="small-image image-rounded">
                        </div>
                        <div class="col-md-6 product-entry">
                            <div class="categories"></div>
                            <h3 class="item-title" style="color: white;">Crochet Bag.</h3>
                            <div class="btn-wrap">
                                <a href="/user/products/2" class="d-flex align-items-center">shop collection <i
                                        class="icon icon-arrow-io"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="collection-item bottom-item">
                        <div class="products-thumb">
                            <img src="{{asset('assets/user/images/cap.jpeg')}}" alt="collection item"
                                class="small-image image-rounded">
                        </div>
                        <div class="col-md-6 product-entry">
                            <div class="categories"><h3 class="item-title" style="color: white;">woolen hat.</h3></div>
                            
                            <div class="btn-wrap">
                                <a href="/user/products/6" class="d-flex align-items-center">shop collection <i
                                        class="icon icon-arrow-io"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="subscribe" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="block-text col-md-6">
                    <div class="section-header">
                        <h2 class="section-title">Get 25% off Discount Coupons</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst amet, metus, sit massa posuere
                        maecenas. At tellus ut nunc amet vel egestas.</p>
                </div>
                <div class="subscribe-content col-md-6">
                    <form id="form" class="d-flex justify-content-between">
                        <input type="text" name="email" placeholder="Enter your email addresss here">
                        <button class="btn btn-dark">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="selling-products" class="product-store bg-light-grey padding-large">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Best selling products</h2>
            </div>
            <ul class="tabs list-unstyled">
                <li data-tab-target="#all" class="active tab">All</li>
                <li data-tab-target="#shoes" class="tab">Shoes</li>
                <li data-tab-target="#tshirts" class="tab">Tshirts</li>
                <li data-tab-target="#pants" class="tab">Pants</li>
                <li data-tab-target="#hoodie" class="tab">Hoodie</li>
                <li data-tab-target="#outer" class="tab">Outer</li>
                <li data-tab-target="#jackets" class="tab">Jackets</li>
                <li data-tab-target="#accessories" class="tab">Accessories</li>
            </ul>
            <div class="tab-content">
                <div id="all" data-tab-content class="active">
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products1.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Half sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products2.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Stylish Grey T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products3.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Silk White Shirt</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products4.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grunge Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products5.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Full sleeve Jeans jacket</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products6.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grey Check Coat</a>
                                </h3>
                                <div class="item-price text-primary">$30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products7.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Long Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products8.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Half Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products13.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Orange white Nike</a>
                                </h3>
                                <div class="item-price text-primary">$55.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products14.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Running Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$65.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products15.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Tennis Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$80.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products16.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Nike Brand Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$65.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shoes" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products13.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Orange white Nike</a>
                                </h3>
                                <div class="item-price text-primary">$55.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products14.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Running Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$65.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products15.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Tennis Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$80.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products16.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Nike Brand Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$65.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tshirts" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products3.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Silk White Shirt</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products8.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">White Half T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products5.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Ghee Half T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products7.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Long Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pants" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products1.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Half sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products4.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grunge Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products7.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Long Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products2.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Stylish Grey Pant</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="hoodie" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products17.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">White Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products4.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Navy Blue Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$45.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products18.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Dark Green Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="outer" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products3.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Silk White Shirt</a>
                                </h3>
                                <div class="item-price text-primary">$ 35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products4.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grunge Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$ 30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products6.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grey Check Coat</a>
                                </h3>
                                <div class="item-price text-primary">$ 30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products7.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Long Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$ 40.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="jackets" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products5.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Full Sleeve Jeans Jacket</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products2.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Stylish Grey Coat</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products6.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grey Check Coat</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accessories" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products19.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Stylish Women Bag</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset('assets/user/images/selling-products20.jpg')}}" alt="Books"
                                    class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Stylish Gadgets</a>
                                </h3>
                                <div class="item-price text-primary">$30.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="testimonials" class="padding-large no-padding-bottom">
        <div class="container">
            <div class="reviews-content">
                <div class="row d-flex flex-wrap">
                    <div class="col-md-2">
                        <div class="review-icon">
                            <i class="icon icon-right-quote"></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="swiper testimonial-swiper overflow-hidden">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-detail">
                                        <p>“With a hook in hand, anything is possible. Crochet stitches dreams into reality.”</p>
                                        <div class="author-detail">
                                            <div class="name">By Unknown</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-detail">
                                        <p>“In a world where you can be anything, be a crocheter. It's where magic and creativity intertwine.”</p>
                                        <div class="author-detail">
                                            <div class="name">By Unknown</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-arrows">
                            <button class="prev-button">
                                <i class="icon icon-arrow-left"></i>
                            </button>
                            <button class="next-button">
                                <i class="icon icon-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- 
    <section id="flash-sales" class="product-store padding-large">

        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Flash sales</h2>
            </div>
            <div class="swiper product-swiper flash-sales overflow-hidden">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-item">
                            <img src="{{asset('assets/user/images/selling-products9.jpg')}}" alt="Books"
                                class="product-image">
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="discount">10% Off</div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Full sleeve cover shirt</a>
                                </h3>
                                <div class="item-price text-primary">
                                    <del class="prev-price">$50.00</del>$40.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <img src="{{asset('assets/user/images/selling-products10.jpg')}}" alt="Books"
                                class="product-image">
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="discount">10% Off</div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Long Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">
                                    <del class="prev-price">$50.00</del>$40.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <img src="{{asset('assets/user/images/selling-products11.jpg')}}" alt="Books"
                                class="product-image">
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="discount">10% Off</div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grey Check Coat</a>
                                </h3>
                                <div class="item-price text-primary">
                                    <del class="prev-price">$55.00</del>$45.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <img src="{{asset('assets/user/images/selling-products12.jpg')}}" alt="Books"
                                class="product-image">
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="discount">10% Off</div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Silk White Shirt</a>
                                </h3>
                                <div class="item-price text-primary">
                                    <del class="prev-price">$45.00</del>$35.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <img src="{{asset('assets/user/images/selling-products8.jpg')}}" alt="Books"
                                class="product-image">
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="discount">10% Off</div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Blue Jeans pant</a>
                                </h3>
                                <div class="item-price text-primary">
                                    <del class="prev-price">$45.00</del>$35.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section> -->



    <!-- <section id="quotation" class="align-center padding-large">
        <div class="inner-content">
            <h2 class="section-title divider">Quote of the day</h2>
            <blockquote>
                <q>It's true, I don't like the whole cutoff-shorts-and-T-shirt look, but I think you can look fantastic
                    in casual clothes.</q>
                <div class="author-name">- Dr. Seuss</div>
            </blockquote>
        </div>
    </section> -->

    <!-- <hr> -->
    <!-- <section id="latest-blog" class="padding-large">
        <div class="container">
            <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
                <h2 class="section-title">our Journal</h2>
                <div class="btn-wrap align-right">
                    <a href="blog.html" class="d-flex align-items-center">Read All Articles <i
                            class="icon icon icon-arrow-io"></i>
                    </a>
                </div>
            </div>
            <div class="row d-flex flex-wrap">
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="single-post.html">
                            <img src="{{asset('assets/user/images/post-img1.jpg')}}" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">22</div>
                            <div class="meta-month">Aug-2021</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="single-post.html">top 10 casual look ideas to dress up your kids</a>
                            </h3>
                            <a href="blog.html" class="blog-categories">Fashion</a>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="single-post.html">
                            <img src="{{asset('assets/user/images/post-img2.jpg')}}" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">25</div>
                            <div class="meta-month">Aug-2021</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="single-post.html">Latest trends of wearing street wears supremely</a>
                            </h3>
                            <a href="blog.html" class="blog-categories">Trending</a>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="single-post.html">
                            <img src="{{asset('assets/user/images/post-img3.jpg')}}" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">28</div>
                            <div class="meta-month">Aug-2021</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="single-post.html">types of comfortable clothes ideas for women</a>
                            </h3>
                            <a href="blog.html" class="blog-categories">Inspiration</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section> -->

    <!-- <section id="brand-collection" class="padding-medium bg-light-grey">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between">
                <img src="{{asset('assets/user/images/brand1.png')}}" alt="phone" class="brand-image">
                <img src="{{asset('assets/user/images/brand2.png')}}" alt="phone" class="brand-image">
                <img src="{{asset('assets/user/images/brand3.png')}}" alt="phone" class="brand-image">
                <img src="{{asset('assets/user/images/brand4.png')}}" alt="phone" class="brand-image">
                <img src="{{asset('assets/user/images/brand5.png')}}" alt="phone" class="brand-image">
            </div>
        </div>
    </section> -->

    <!-- <section id="instagram" class="padding-large">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Follow our instagram</h2>
            </div>
            <p>Our official Instagram account <a href="#">@ultras</a> or <a href="#">#ultras_clothing</a>
            </p>
            <div class="row d-flex flex-wrap justify-content-between">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="{{asset('assets/user/images/insta-image1.jpg')}}" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="{{asset('assets/user/images/insta-image2.jpg')}}" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="{{asset('assets/user/images/insta-image3.jpg')}}" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="{{asset('assets/user/images/insta-image4.jpg')}}" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="{{asset('assets/user/images/insta-image5.jpg')}}" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="{{asset('assets/user/images/insta-image6.jpg')}}" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="shipping-information">
        <hr>
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center justify-content-between">
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box">
                        <i class="icon icon-truck"></i>
                        <h4 class="block-title">
                            <strong>Free shipping</strong> Over $200
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box">
                        <i class="icon icon-return"></i>
                        <h4 class="block-title">
                            <strong>Money back</strong> Return within 7 days
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box">
                        <i class="icon icon-tags1"></i>
                        <h4 class="block-title">
                            <strong>Buy 4 get 5th</strong> 50% off
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box">
                        <i class="icon icon-help_outline"></i>
                        <h4 class="block-title">
                            <strong>Any questions?</strong> experts are ready
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section> -->

    <!-- @include('user.footer') -->
    @include('user.js')

</body>

</html>