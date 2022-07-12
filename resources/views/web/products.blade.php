@extends('web.layouts.main')
@section('content')


<!-- breadcrumb start -->
<div class="breadcrumb-main b-g-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>category</h2>
                        <ul>
                            <li><a href="{{route('index')}}">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-pt-space ratio_asos b-g-light">
    <div class="collection-wrapper">
        <div class="collection-content">
            <div class="page-main-content">
                <div class="custom-container">
                    <div class="row">
                        <div class="col-sm-3 collection-filter category-page-side">
                            <!-- side-bar colleps block stat -->
                            <div class="collection-filter-block creative-card creative-inner category-side">
                                <!-- brand filter start -->
                                <div class="collection-mobile-back">
                                    <span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span>
                                </div>
                                <div class="collection-collapse-block open">
                                    <h3 class="collapse-block-title mt-0">brand</h3>
                                    <div class="collection-collapse-block-content">
                                        <div class="collection-brand-filter">
                                            <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input form-check-input" id="zara">
                                                <label class="custom-control-label form-check-label" for="zara">Aigo</label>
                                            </div>
                                            <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input form-check-input" id="vera-moda">
                                                <label class="custom-control-label form-check-label" for="vera-moda">AMAX Information</label>
                                            </div>
                                            <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input form-check-input" id="forever-21">
                                                <label class="custom-control-label form-check-label" for="forever-21">Antec</label>
                                            </div>
                                            <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input form-check-input" id="roadster">
                                                <label class="custom-control-label form-check-label" for="roadster">Asus</label>
                                            </div>
                                            <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input form-check-input" id="only">
                                                <label class="custom-control-label form-check-label" for="only">MSI</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         
                                <!-- size filter start here -->
                                <div class="collection-collapse-block open mt-5">
                                    <h3 class="collapse-block-title ">Accessories</h3>
                                    <div class="collection-collapse-block-content">
                                        <div class="size-selector">
                                            <div class="collection-brand-filter">
                                                <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="custom-control-input form-check-input" id="small">
                                                    <label class="custom-control-label form-check-label" for="small">Hard Disk</label>
                                                </div>
                                                <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="custom-control-input form-check-input" id="mediam">
                                                    <label class="custom-control-label form-check-label" for="mediam">Monitor</label>
                                                </div>
                                                <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="custom-control-input form-check-input" id="large">
                                                    <label class="custom-control-label form-check-label" for="large">Graphic Card</label>
                                                </div>
                                                <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="custom-control-input form-check-input" id="extralarge">
                                                    <label class="custom-control-label form-check-label" for="extralarge">Ram</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- price filter start here -->
                                <div class="collection-collapse-block border-0 open">
                                    <h3 class="collapse-block-title">price</h3>
                                    <div class="collection-collapse-block-content">
                                        <div class="filter-slide">
                                            <span class="irs irs--flat js-irs-0  irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: visible;">$0</span><span class="irs-max" style="visibility: visible;">$1 000</span><span class="irs-from" style="visibility: visible; left: 15.1988%;">$200</span><span class="irs-to" style="visibility: visible; left: 72.263%;">$800</span><span class="irs-single" style="visibility: hidden; left: 35.6269%;">$200 — $800</span></span><span class="irs-grid" style="width: 95.107%; left: 2.34648%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: 0%;">0</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: 0%;">250</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: 0%;">500</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: 0%;">750</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: 0%;">1 000</span></span><span class="irs-bar" style="left: 21.4679%; width: 57.0642%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 19.0214%;"><i></i><i></i><i></i></span><span class="irs-handle to type_last" style="left: 76.0856%;"><i></i><i></i><i></i></span></span><input class="js-range-slider irs-hidden-input" type="text" name="my_range" value="" data-type="double" tabindex="-1" reado
                                            nly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- silde-bar colleps block end here -->
                            <!-- side-bar single product slider start -->
                            <div class="theme-card creative-card creative-inner">
                                <h5 class="title-border">new product</h5>
                                <div class="slide-1">
                                    <div>
                                        <div class="media-banner plrb-0 b-g-white1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                        <img src="{{asset('web/assets/images/layout-2/media-banner/3.jpg')}}" class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                            <circle cx="9" cy="21" r="1"></circle>
                                                                            <circle cx="20" cy="21" r="1"></circle>
                                                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                                        </svg> </button>
                                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"><i data-feather="heart" class="add-to-wish"></i></a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"><i data-feather="eye"></i></a>
                                                                    <a href="void:;" class="tooltip-top" data-tippy-content="Compare"><i data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                        <img src="{{asset('web/assets/images/layout-2/media-banner/1.jpg')}}" class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                            <circle cx="9" cy="21" r="1"></circle>
                                                                            <circle cx="20" cy="21" r="1"></circle>
                                                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                                        </svg> </button>
                                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"><i data-feather="heart" class="add-to-wish"></i></a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"><i data-feather="eye"></i></a>
                                                                    <a href="void:;" class="tooltip-top" data-tippy-content="Compare"><i data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                        <img src="{{asset('web/assets/images/layout-2/media-banner/2.jpg')}}" class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                            <circle cx="9" cy="21" r="1"></circle>
                                                                            <circle cx="20" cy="21" r="1"></circle>
                                                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                                        </svg> </button>
                                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"><i data-feather="heart" class="add-to-wish"></i></a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"><i data-feather="eye"></i></a>
                                                                    <a href="void:;" class="tooltip-top" data-tippy-content="Compare"><i data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner plrb-0 b-g-white1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                        <img src="{{asset('web/assets/images/layout-2/media-banner/2.jpg')}}" class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                            <circle cx="9" cy="21" r="1"></circle>
                                                                            <circle cx="20" cy="21" r="1"></circle>
                                                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                                        </svg> </button>
                                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"><i data-feather="heart" class="add-to-wish"></i></a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"><i data-feather="eye"></i></a>
                                                                    <a href="void:;" class="tooltip-top" data-tippy-content="Compare"><i data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                        <img src="{{asset('web/assets/images/layout-2/media-banner/3.jpg')}}" class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                            <circle cx="9" cy="21" r="1"></circle>
                                                                            <circle cx="20" cy="21" r="1"></circle>
                                                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                                        </svg> </button>
                                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"><i data-feather="heart" class="add-to-wish"></i></a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"><i data-feather="eye"></i></a>
                                                                    <a href="void:;" class="tooltip-top" data-tippy-content="Compare"><i data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                        <img src="{{asset('web/assets/images/layout-2/media-banner/1.jpg')}}" class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                            <circle cx="9" cy="21" r="1"></circle>
                                                                            <circle cx="20" cy="21" r="1"></circle>
                                                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                                        </svg> </button>
                                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"><i data-feather="heart" class="add-to-wish"></i></a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"><i data-feather="eye"></i></a>
                                                                    <a href="void:;" class="tooltip-top" data-tippy-content="Compare"><i data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media-banner plrb-0 b-g-white1 border-0">
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                        <img src="{{asset('web/assets/images/layout-2/media-banner/1.jpg')}}" class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                                        <p>bajaj rex mixer</p>
                                                                    </a>
                                                                    <h6>$40.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                            <circle cx="9" cy="21" r="1"></circle>
                                                                            <circle cx="20" cy="21" r="1"></circle>
                                                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                                        </svg> </button>
                                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"><i data-feather="heart" class="add-to-wish"></i></a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"><i data-feather="eye"></i></a>
                                                                    <a href="void:;" class="tooltip-top" data-tippy-content="Compare"><i data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                        <img src="{{asset('web/assets/images/layout-2/media-banner/2.jpg')}}" class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                                        <p>usha table fan</p>
                                                                    </a>
                                                                    <h6>$52.05 <span>$60.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                            <circle cx="9" cy="21" r="1"></circle>
                                                                            <circle cx="20" cy="21" r="1"></circle>
                                                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                                        </svg> </button>
                                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"><i data-feather="heart" class="add-to-wish"></i></a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"><i data-feather="eye"></i></a>
                                                                    <a href="void:;" class="tooltip-top" data-tippy-content="Compare"><i data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-banner-box">
                                                <div class="media">
                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                        <img src="{{asset('web/assets/images/layout-2/media-banner/3.jpg')}}" class="img-fluid " alt="banner">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="product-detail">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <a href="{{route('sample_list')}}" tabindex="0">
                                                                        <p>sumsung galaxy</p>
                                                                    </a>
                                                                    <h6>$47.05 <span>$55.21</span></h6>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                            <circle cx="9" cy="21" r="1"></circle>
                                                                            <circle cx="20" cy="21" r="1"></circle>
                                                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                                        </svg> </button>
                                                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"><i data-feather="heart" class="add-to-wish"></i></a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"><i data-feather="eye"></i></a>
                                                                    <a href="void:;" class="tooltip-top" data-tippy-content="Compare"><i data-feather="refresh-cw"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- side-bar single product slider end -->
                         
                        </div>
                        <div class="col">
                            <div class="top-banner-wrapper">
                                <a href="{{route('sample_list')}}"><img src="{{asset('web/assets/images/category/2.webp')}}" class="img-fluid  w-100" alt="cat-banner"></a>
                            </div>
                            <div class="collection-product-wrapper category-list">
                                <div class="product-top-filter">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="filter-main-btn"><span class="filter-btn  "><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="product-filter-content">
                                                <div class="search-count">
                                                    <h5>Showing Products 1-24 of 10 Result</h5>
                                                </div>
                                                <div class="collection-view">
                                                    <ul>
                                                        <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                        <li><i class="fa fa-th grid-layout-view"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="collection-grid-view">
                                                    <ul>
                                                        <li><img src="{{asset('web/assets/images/category/icon/2.png')}}" alt="" class="product-2-layout-view"></li>
                                                        <li><img src="{{asset('web/assets/images/category/icon/3.png')}}" alt="" class="product-3-layout-view"></li>
                                                        <li><img src="{{asset('web/assets/images/category/icon/4.png')}}" alt="" class="product-4-layout-view"></li>
                                                        <li><img src="{{asset('web/assets/images/category/icon/6.png')}}" alt="" class="product-6-layout-view"></li>
                                                    </ul>
                                                </div>
                                                <div class="product-page-per-view">
                                                    <select>
                                                        <option value="High to low">24 Products Par Page</option>
                                                        <option value="Low to High">50 Products Par Page</option>
                                                        <option value="Low to High">100 Products Par Page</option>
                                                    </select>
                                                </div>
                                                <div class="product-page-filter">
                                                    <select>
                                                        <option value="High to low">Sorting items</option>
                                                        <option value="Low to High">50 Products</option>
                                                        <option value="Low to High">100 Products</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper-grid product list-view">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/1.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a1.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    realme not 7
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $60.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $50.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/2.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a2.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>


                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    wireless speaker
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $56.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $ 24.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/3.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a3.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    Travel Backpack
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $90.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $70.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/4.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a4.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>

                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    Modern Shoes
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $ 70.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $ 44.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/5.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a5.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>


                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    sleeve fress
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $ 56.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $ 24.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/6.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a5.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>


                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    Acer Swift laptop
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $ 57.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $ 30.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/7.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a7.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>


                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    fastrack watch
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $ 88.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $65.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product">
                                                <div class="product-box">
                                                    <div class="product-imgbox">
                                                        <div class="product-front">
                                                            <img src="{{asset('web/assets/images/layout-1/product/3.jpg')}}" class="img-fluid  " alt="product">
                                                        </div>
                                                        <div class="product-back">
                                                            <img src="{{asset('web/assets/images/layout-1/product/a3.jpg')}}" class="img-fluid  " alt="product">
                                                        </div>
                                                    </div>
                                                    <div class="product-detail detail-center ">
                                                        <div class="detail-title">
                                                            <div class="detail-left">
                                                                <div class="rating-star">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                    of type and scrambled it to make a type specimen book</p>
                                                                <a href="#">
                                                                    <h6 class="price-title">
                                                                        reader will be distracted.
                                                                    </h6>
                                                                </a>
                                                            </div>
                                                            <div class="detail-right">
                                                                <div class="check-price">
                                                                    $ 56.21
                                                                </div>
                                                                <div class="price">
                                                                    <div class="price">
                                                                        $ 24.05
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="icon-detail">
                                                            <button data-bs-toggle="modal" data-bs-target="#addtocart" onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </button>
                                                            <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                            <a href="void:;" class="tooltip-top" data-tippy-content="Compare">
                                                                <i data-feather="refresh-cw"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/8.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a8.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>


                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    dressing mirror
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $ 97.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $ 84.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/1.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a1.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>


                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    realme not 7
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $60.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $50.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/2.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a2.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>


                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    wireless speaker
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $56.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $ 24.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/3.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                    <div class="product-back">
                                                        <a href="{{route('sample_list')}}"> <img src="{{asset('web/assets/images/layout-4/product/a3.jpg')}}" class="img-fluid  " alt="product"> </a>
                                                    </div>
                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book</p>
                                                            <a href="{{route('sample_list')}}">
                                                                <h6 class="price-title">
                                                                    Travel Backpack
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price"> $90.21 </div>
                                                            <div class="price">
                                                                <div class="price"> $70.05 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i data-feather="shopping-cart"></i> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <i data-feather="heart"></i> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <i data-feather="eye"></i> </a>
                                                        <a href="void:;" class="tooltip-top" data-tippy-content="Compare"> <i data-feather="refresh-cw"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-pagination">
                                    <div class="theme-paggination-block">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                        <li class="page-item "><a class="page-link" href="javascript:void(0)">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                <div class="product-search-count-bottom">
                                                    <h5>Showing Products 1-24 of 10 Result</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section End -->
@endsection
@section('link')
<style>
    .header-category ul.collapse-category.show {
        display: none;
    }
.top-banner-wrapper img{ 
    height: 476px;
    object-fit: cover;
}
.media-banner .media-banner-box .media img {
    border: 1px solid #dddddd;
    width: 100px;
}
.product .product-box .product-imgbox img {
    width: 79%;
    height: 182px;
}
</style>
@endsection
@section('js')
@endsection