<?php
$categories = App\Models\category::where('is_active',1)->get();
$cart = array();
if (\Session::has('cart')) {
    $cart = Session::get('cart');
}
?>
<header id="stickyheader" class="header-style2">
    <div class="mobile-fix-option"></div>
    <div class="top-header2">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="top-header-left">
                        <ul>
                            <li><a href="javascript:void(0)">bigdeal ecommerce always free delevery</a></li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-phone"></i>Call Us: +(929) 443-5686</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="top-header-right">
                        <ul>
                            <li>
                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-envelope"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header7">
        <div class="custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="header-contain">
                        <div class="logo-block">
                            <div class="mobilecat-toggle"><i class="fa fa-bars sidebar-bar"></i></div>
                            <div class="brand-logo logo-sm-center">
                                <a href="{{route('index')}}"> <img src="{{asset('web/assets/images/mega-store/logo.png')}}" class="img-fluid" alt="logo" /> </a>
                            </div>
                        </div>
                        <div class="header-search ajax-search the-basics">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <select>
                                        <option>all category</option>
                                        <option>Printers</option>
                                        <option>Cables and Adapters</option>
                                        <option>Memory</option>
                                        <option>Netwroking Devices</option>
                                        <option>PCs and Tablets</option>
                                        <option>See All Categories</option>
                                    </select>
                                </div>
                                <input type="search" class="form-control typeahead" placeholder="Search a Product" />
                                <div class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                        </div>
                        <div class="icon-block">
                            <ul class="theme-color">
                                <li class="mobile-search icon-md-block">
                                    <svg enable-background="new 0 0 512.002 512.002" viewBox="0 0 512.002 512.002" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m495.594
                                416.408-134.086-134.095c14.685-27.49 22.492-58.333 22.492-90.312
                                0-50.518-19.461-98.217-54.8-134.31-35.283-36.036-82.45-56.505-132.808-57.636-1.46-.033-2.92-.054-4.392-.054-105.869
                                0-192 86.131-192 192s86.131 192 192 192c1.459 0 2.93-.021 4.377-.054
                                30.456-.68 59.739-8.444 85.936-22.436l134.085 134.075c10.57 10.584 24.634
                                16.414 39.601 16.414s29.031-5.83 39.589-16.403c10.584-10.577 16.413-24.639
                                16.413-39.597s-5.827-29.019-16.407-39.592zm-299.932-64.453c-1.211.027-2.441.046-3.662.046-88.224
                                0-160-71.776-160-160s71.776-160 160-160c1.229 0 2.449.019 3.671.046 86.2 1.935
                                156.329 73.69 156.329 159.954 0 86.274-70.133 158.029-156.338 159.954z"
                                            />
                                            <path
                                                d="m192 320.001c-70.58 0-128-57.42-128-128s57.42-128 128-128 128 57.42 128
                                128-57.42 128-128 128z"
                                            />
                                        </g>
                                    </svg>
                                </li>
                                <li class="mobile-user icon-desk-none" onclick="openAccount()">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M255.999,0c-74.443,0-135,60.557-135,135s60.557,135,135,135s135-60.557,135-135S330.442,0,255.999,0z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M478.48,398.68C438.124,338.138,370.579,302,297.835,302h-83.672c-72.744,0-140.288,36.138-180.644,96.68l-2.52,3.779V512h450h0.001V402.459L478.48,398.68z" />
                                            </g>
                                        </g>
                                    </svg>
                                </li>
                                <li class="mobile-setting" onclick="openSetting()">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M500.6,212.6l-59.9-14.7c-3.3-10.5-7.5-20.7-12.6-30.6l30.6-51c3.6-6,2.7-13.5-2.1-18.3L414,55.4
                                   c-4.8-4.8-12.3-5.7-18.3-2.1l-51,30.6c-9.9-5.1-20.1-9.3-30.6-12.6l-14.4-59.9C297.9,4.8,291.9,0,285,0h-60
                                   c-6.9,0-12.9,4.8-14.7,11.4l-14.4,59.9c-10.5,3.3-20.7,7.5-30.6,12.6l-51-30.6c-6-3.6-13.5-2.7-18.3,2.1L53.4,98
                                   c-4.8,4.8-5.7,12.3-2.1,18.3l30.6,51c-5.1,9.9-9.3,20.1-12.6,30.6l-57.9,14.7C4.8,214.1,0,220.1,0,227v60
                                   c0,6.9,4.8,12.9,11.4,14.4l57.9,14.7c3.3,10.5,7.5,20.7,12.6,30.6l-30.6,51c-3.6,6-2.7,13.5,2.1,18.3L96,458.6
                                   c4.8,4.8,12.3,5.7,18.3,2.1l51-30.6c9.9,5.1,20.1,9.3,30.6,12.6l14.4,57.9c1.8,6.6,7.8,11.4,14.7,11.4h60
                                   c6.9,0,12.9-4.8,14.7-11.4l14.4-57.9c10.5-3.3,20.7-7.5,30.6-12.6l51,30.6c6,3.6,13.5,2.7,18.3-2.1l42.6-42.6
                                   c4.8-4.8,5.7-12.3,2.1-18.3l-30.6-51c5.1-9.9,9.3-20.1,12.6-30.6l59.9-14.7c6.6-1.5,11.4-7.5,11.4-14.4v-60
                                   C512,220.1,507.2,214.1,500.6,212.6z
                                   M255,332c-41.4,0-75-33.6-75-75c0-41.4,33.6-75,75-75c41.4,0,75,33.6,75,75
                                   C330,298.4,296.4,332,255,332z"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                </li>
                                <li class="mobile-wishlist item-count icon-desk-none" onclick="openWishlist()">
                                    <svg
                                        version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 512 512"
                                        style="enable-background: new 0 0 512 512;"
                                        xml:space="preserve"
                                    >
                                        <g>
                                            <g>
                                                <path
                                                    d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                   c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                   c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                   s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                   C512,93.417,453.532,30,376,30z"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="item-count-contain inverce">1</div>
                                </li>
                                <li class="mobile-cart item-count" onclick="openCart()">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M443.209,442.24l-27.296-299.68c-0.736-8.256-7.648-14.56-15.936-14.56h-48V96c0-25.728-9.984-49.856-28.064-67.936
                                   C306.121,10.24,281.353,0,255.977,0c-52.928,0-96,43.072-96,96v32h-48c-8.288,0-15.2,6.304-15.936,14.56L68.809,442.208
                                   c-1.632,17.888,4.384,35.712,16.48,48.96S114.601,512,132.553,512h246.88c17.92,0,35.136-7.584,47.232-20.8
                                   C438.793,477.952,444.777,460.096,443.209,442.24z
                                   M319.977,128h-128V96c0-35.296,28.704-64,64-64
                                   c16.96,0,33.472,6.784,45.312,18.656C313.353,62.72,319.977,78.816,319.977,96V128z"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="item-count-contain inverce">{{count($cart)}}</div>
                                </li>
                            </ul>
                            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="searchbar-input">
            <div class="input-group">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <svg
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            width="28.931px"
                            height="28.932px"
                            viewBox="0 0 28.931 28.932"
                            style="enable-background: new 0 0 28.931 28.932;"
                            xml:space="preserve"
                        >
                            <g>
                                <path
                                    d="M28.344,25.518l-6.114-6.115c1.486-2.067,2.303-4.537,2.303-7.137c0-3.275-1.275-6.355-3.594-8.672C18.625,1.278,15.543,0,12.266,0C8.99,0,5.909,1.275,3.593,3.594C1.277,5.909,0.001,8.99,0.001,12.266c0,3.276,1.275,6.356,3.592,8.674c2.316,2.316,5.396,3.594,8.673,3.594c2.599,0,5.067-0.813,7.136-2.303l6.114,6.115c0.392,0.391,0.902,0.586,1.414,0.586c0.513,0,1.024-0.195,1.414-0.586C29.125,27.564,29.125,26.299,28.344,25.518z M6.422,18.111c-1.562-1.562-2.421-3.639-2.421-5.846S4.86,7.983,6.422,6.421c1.561-1.562,3.636-2.422,5.844-2.422s4.284,0.86,5.845,2.422c1.562,1.562,2.422,3.638,2.422,5.845s-0.859,4.283-2.422,5.846c-1.562,1.562-3.636,2.42-5.845,2.42S7.981,19.672,6.422,18.111z"
                                />
                            </g>
                        </svg>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="search your product" />
                <div class="input-group-append">
                    <span class="input-group-text close-searchbar">
                        <svg viewBox="0 0 329.26933 329" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"
                            />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="category-header7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="category-contain">
                        <div class="category-left">
                            <div class="header-category">
                                <a class="category-toggle"><i class="fa fa-bars"></i>Shop by category</a>
                                <ul class="collapse-category show">
                                    <li class="back-btn"><i class="fa fa-angle-left"></i> back</li>
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('product_list',$category->slug)}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />{{$category->name}}</a>
                                    </li>
                                    @endforeach {{--
                                    <li>
                                        <a href="{{route('product_list')}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />Accessories</a>
                                    </li>
                                    <li>
                                        <a href="{{route('product_list')}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />Audio and Video</a>
                                    </li>
                                    <li>
                                        <a href="{{route('product_list')}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />Cables and Adapters</a>
                                    </li>
                                    <li>
                                        <a href="{{route('product_list')}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />Processor and CPUs</a>
                                    </li>
                                    <li>
                                        <a href="{{route('product_list')}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />Memory</a>
                                    </li>
                                    <li>
                                        <a href="{{route('product_list')}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />Motherboards</a>
                                    </li>
                                    <li>
                                        <a href="{{route('product_list')}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />Networking Devices</a>
                                    </li>
                                    <li>
                                        <a href="{{route('product_list')}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />PCs and Tablets</a>
                                    </li>
                                    <li>
                                        <a href="{{route('product_list')}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />Power Supply and others</a>
                                    </li>
                                    <li>
                                        <a href="{{route('product_list')}}"><img src="{{asset('web/assets/images/mega-store/category/5.jpg')}}" alt="" />See All Categories</a>
                                    </li>
                                    --}}
                                </ul>
                            </div>
                            <div class="logo-block">
                                <div class="mobilecat-toggle"><i class="fa fa-bars sidebar-bar"></i></div>
                                <div class="brand-logo logo-sm-center">
                                    <a href="{{route('index')}}">
                                        <img src="{{asset('web/assets/images/mega-store/logo.png')}}" class="img-fluid" alt="logo" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="category-right">
                            <div class="menu-block">
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                        </li>
                                        <!--HOME-->
                                        <li>
                                            <a class="dark-menu-item" href="{{route('index')}}">Home</a>
                                        </li>
                                        <!--HOME-END-->

                                        <!-- about  -->

                                        <li>
                                            <a class="dark-menu-item" href="{{route('about')}}">About</a>
                                        </li>
                                        <!-- about  -->
                                        <!--SHOP-->

                                        <!--SHOP-END-->
                                        <!--product-meu start-->
                                        <li class="mega">
                                            <a class="dark-menu-item" href="javascript:void(0)">product </a>
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Accessories</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="void:;">Graphic Card</a></li>
                                                                            <li><a href="void:;">Ram</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Audio And Video</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="void:;">Speaker</a></li>
                                                                            <li><a href="void:;">Headphone</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Cables And Adapters</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="void:;">Cable</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Processor And CPUs</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="void:;">Gaming Pc</a></li>
                                                                            <li><a href="void:;">Gaming Pc Extreme</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Memory</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="void:;">Ram </a></li>
                                                                            <li><a href="void:;">Ram </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Motherboard</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="void:;">Asus </a></li>
                                                                            <li><a href="void:;"> MSI</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row menu-banner menu-banner2">
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <img src="{{asset('web/assets/images/layout-2/product/banner1.webp')}}" alt="menu-banner" class="img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <img src="{{asset('web/assets/images/layout-2/product/banner2.webp')}}" alt="menu-banner" class="img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        <!--product-meu end-->

                                        <!--mega-meu start-->
                                        <li class="mega">
                                            <a class="dark-menu-item" href="javascript:void(0)">features</a>
                                            <ul class="mega-menu full-mega-menu ratio_landscape">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="void:;">Speaker </a></li>
                                                                            <li><a href="void:;">Cables</a></li>
                                                                            <li><a href="void:;">Mouse</a></li>
                                                                            <li><a href="void:;">Rams</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="void:;">Hard Disk</a></li>
                                                                            <li><a href="void:;">Motherboard</a></li>
                                                                            <li><a href="void:;">Power Supply</a></li>
                                                                            <li><a href="void:;">Keyboard</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="void:;">Lcd</a></li>
                                                                            <li><a href="void:;">Memory</a></li>
                                                                            <li><a href="void:;">CPUs</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="void:;">Lcd</a></li>
                                                                            <li><a href="void:;">Memory</a></li>
                                                                            <li><a href="void:;">CPUs</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box product">
                                                                <div class="mega-img">
                                                                    <img src="{{asset('web/assets/images/mega-store/slider/banner/banner1.webp')}}" alt="menu-banner" class="img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--mega-meu end-->
                                        <li>
                                            <a class="dark-menu-item" href="{{route('contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="icon-block">
                            <ul class="theme-color">
                                <li class="mobile-search icon-md-block">
                                    <svg
                                        version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 612.01 612.01"
                                        style="enable-background: new 0 0 612.01 612.01;"
                                        xml:space="preserve"
                                    >
                                        <g>
                                            <g id="_x34__4_">
                                                <g>
                                                    <path
                                                        d="M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
                              C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
                              l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
                              c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
                              S377.82,467.8,257.493,467.8z"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </li>
                                <li class="mobile-user icon-desk-none" onclick="openAccount()">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background: new 0 0 480 480;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M386.816,323.456l-69.984-14.016c-7.424-1.472-12.832-8.064-12.832-15.68v-16.064c4.608-6.4,8.928-14.944,13.408-23.872
                            c3.424-6.752,8.576-16.928,10.88-19.328c13.568-13.28,28.032-29.76,32.448-51.232c4-19.456,0-29.568-4.64-37.568
                            c0-15.648,0-44.288-5.44-64.928c-0.544-24.928-5.12-39.008-16.608-51.552c-8.128-8.768-20.096-10.816-29.696-12.448
                            c-3.808-0.64-9.024-1.536-10.848-2.528C276.896,5.056,260.032,0.512,239.392,0c-42.24,1.6-94.08,28.384-111.424,76.544
                            c-5.28,14.624-4.768,38.624-4.384,57.92l-0.448,11.232c-4.064,8-8.064,18.112-4.032,37.536
                            c4.416,21.568,18.88,38.016,32.384,51.232c2.336,2.432,7.552,12.672,11.008,19.424c4.544,8.896,8.896,17.44,13.504,23.84v16.032
                            c0,7.616-5.408,14.208-12.864,15.68l-69.984,14.016C48.448,332.384,16,371.968,16,417.568V448c0,17.632,14.368,32,32,32h384
                            c17.632,0,32-14.368,32-32v-30.432C464,371.968,431.552,332.384,386.816,323.456z M432,448H48v-30.432
                            c0-30.4,21.632-56.8,51.456-62.752l69.952-14.016C191.776,336.384,208,316.576,208,293.76V272c0-4.288-1.728-8.416-4.768-11.392
                            c-2.752-2.688-8.672-14.336-12.224-21.28c-6.016-11.776-11.2-21.952-17.12-27.712c-10.624-10.368-20.768-21.76-23.456-34.816
                            c-2.08-10.112-0.64-12.96,1.216-16.576c1.632-3.2,4.064-8,4.064-14.528l-0.16-11.872c-0.288-13.984-0.768-37.408,2.496-46.432
                            C170.464,52.96,209.856,33.152,239.584,32c14.656,0.384,26.176,3.424,38.4,10.24c6.592,3.648,14.272,4.928,21.024,6.08
                            c3.808,0.64,10.176,1.728,11.488,2.56c4.32,4.704,7.904,10.368,8.16,32.384c0,1.44,0.224,2.88,0.64,4.288
                            c4.768,16.352,4.768,44.576,4.768,58.144c0,6.528,2.464,11.328,4.064,14.528c1.856,3.616,3.296,6.464,1.216,16.608
                            c-2.656,12.992-12.864,24.416-23.456,34.784c-5.952,5.824-11.104,16-17.056,27.808c-3.456,6.912-9.312,18.496-12.032,21.152
                            c-3.072,3.008-4.8,7.136-4.8,11.424v21.76c0,22.816,16.224,42.624,38.592,47.072l69.984,14.016
                            c29.792,5.92,51.424,32.32,51.424,62.72V448z"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                </li>
                                <li class="mobile-setting" onclick="openSetting()">
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m272.066 512h-32.133c-25.989 0-47.134-21.144-47.134-47.133v-10.871c-11.049-3.53-21.784-7.986-32.097-13.323l-7.704 7.704c-18.659 18.682-48.548 18.134-66.665-.007l-22.711-22.71c-18.149-18.129-18.671-48.008.006-66.665l7.698-7.698c-5.337-10.313-9.792-21.046-13.323-32.097h-10.87c-25.988 0-47.133-21.144-47.133-47.133v-32.134c0-25.989 21.145-47.133 47.134-47.133h10.87c3.531-11.05 7.986-21.784 13.323-32.097l-7.704-7.703c-18.666-18.646-18.151-48.528.006-66.665l22.713-22.712c18.159-18.184 48.041-18.638 66.664.006l7.697 7.697c10.313-5.336 21.048-9.792 32.097-13.323v-10.87c0-25.989 21.144-47.133 47.134-47.133h32.133c25.989 0 47.133 21.144 47.133 47.133v10.871c11.049 3.53 21.784 7.986 32.097 13.323l7.704-7.704c18.659-18.682 48.548-18.134 66.665.007l22.711 22.71c18.149 18.129 18.671 48.008-.006 66.665l-7.698 7.698c5.337 10.313 9.792 21.046 13.323 32.097h10.87c25.989 0 47.134 21.144 47.134 47.133v32.134c0 25.989-21.145 47.133-47.134 47.133h-10.87c-3.531 11.05-7.986 21.784-13.323 32.097l7.704 7.704c18.666 18.646 18.151 48.528-.006 66.665l-22.713 22.712c-18.159 18.184-48.041 18.638-66.664-.006l-7.697-7.697c-10.313 5.336-21.048 9.792-32.097 13.323v10.871c0 25.987-21.144 47.131-47.134 47.131zm-106.349-102.83c14.327 8.473 29.747 14.874 45.831 19.025 6.624 1.709 11.252 7.683 11.252 14.524v22.148c0 9.447 7.687 17.133 17.134 17.133h32.133c9.447 0 17.134-7.686 17.134-17.133v-22.148c0-6.841 4.628-12.815 11.252-14.524 16.084-4.151 31.504-10.552 45.831-19.025 5.895-3.486 13.4-2.538 18.243 2.305l15.688 15.689c6.764 6.772 17.626 6.615 24.224.007l22.727-22.726c6.582-6.574 6.802-17.438.006-24.225l-15.695-15.695c-4.842-4.842-5.79-12.348-2.305-18.242 8.473-14.326 14.873-29.746 19.024-45.831 1.71-6.624 7.684-11.251 14.524-11.251h22.147c9.447 0 17.134-7.686 17.134-17.133v-32.134c0-9.447-7.687-17.133-17.134-17.133h-22.147c-6.841 0-12.814-4.628-14.524-11.251-4.151-16.085-10.552-31.505-19.024-45.831-3.485-5.894-2.537-13.4 2.305-18.242l15.689-15.689c6.782-6.774 6.605-17.634.006-24.225l-22.725-22.725c-6.587-6.596-17.451-6.789-24.225-.006l-15.694 15.695c-4.842 4.843-12.35 5.791-18.243 2.305-14.327-8.473-29.747-14.874-45.831-19.025-6.624-1.709-11.252-7.683-11.252-14.524v-22.15c0-9.447-7.687-17.133-17.134-17.133h-32.133c-9.447 0-17.134 7.686-17.134 17.133v22.148c0 6.841-4.628 12.815-11.252 14.524-16.084 4.151-31.504 10.552-45.831 19.025-5.896 3.485-13.401 2.537-18.243-2.305l-15.688-15.689c-6.764-6.772-17.627-6.615-24.224-.007l-22.727 22.726c-6.582 6.574-6.802 17.437-.006 24.225l15.695 15.695c4.842 4.842 5.79 12.348 2.305 18.242-8.473 14.326-14.873 29.746-19.024 45.831-1.71 6.624-7.684 11.251-14.524 11.251h-22.148c-9.447.001-17.134 7.687-17.134 17.134v32.134c0 9.447 7.687 17.133 17.134 17.133h22.147c6.841 0 12.814 4.628 14.524 11.251 4.151 16.085 10.552 31.505 19.024 45.831 3.485 5.894 2.537 13.4-2.305 18.242l-15.689 15.689c-6.782 6.774-6.605 17.634-.006 24.225l22.725 22.725c6.587 6.596 17.451 6.789 24.225.006l15.694-15.695c3.568-3.567 10.991-6.594 18.244-2.304z"
                                        />
                                        <path
                                            d="m256 367.4c-61.427 0-111.4-49.974-111.4-111.4s49.973-111.4 111.4-111.4 111.4 49.974 111.4 111.4-49.973 111.4-111.4 111.4zm0-192.8c-44.885 0-81.4 36.516-81.4 81.4s36.516 81.4 81.4 81.4 81.4-36.516 81.4-81.4-36.515-81.4-81.4-81.4z"
                                        />
                                    </svg>
                                </li>
                                <li class="mobile-wishlist item-count icon-desk-none" onclick="openWishlist()">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25
                            c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25
                            c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7
                            c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574
                            c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431
                            c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351
                            C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646
                            c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245
                            C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659
                            c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66
                            c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351
                            C482,254.358,413.255,312.939,309.193,401.614z"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="item-count-contain inverce">1</div>
                                </li>
                                <li class="mobile-cart item-count" onclick="openCart()">
                                    <svg
                                        version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 511.999 511.999"
                                        style="enable-background: new 0 0 511.999 511.999;"
                                        xml:space="preserve"
                                    >
                                        <g>
                                            <g>
                                                <path
                                                    d="M435.099,29.815h-71.361V0H148.262v29.814H76.901L40.464,181.549H0.008v103.359h30.969l34.508,227.091h381.029
                                l34.509-227.091h30.968V181.55h-40.456L435.099,29.815z M178.261,29.999h155.477v29.629H178.261V29.999z M100.549,59.813h47.714
                                v29.814h215.475V59.813h47.714l29.233,121.736H71.316L100.549,59.813z M420.73,482.001H91.27L61.32,284.909h389.36L420.73,482.001
                                z M481.993,254.91H30.007v-43.361h451.986V254.91z"
                                                />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="241.002" y="326.38" width="29.999" height="114.156" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="143.436" y="326.38" width="29.999" height="114.156" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="338.559" y="326.38" width="29.999" height="114.156" />
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="item-count-contain inverce">{{count($cart)}}</div>
                                </li>
                            </ul>
                            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                        </div>
                        <div class="store-locator">
                            <select>
                                <option value="">store locations</option>
                                <option value="store1">Options</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="searchbar-input ajax-search the-basics">
            <div class="input-group">
                <span class="input-group-text">
                    <svg
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="28.931px"
                        height="28.932px"
                        viewBox="0 0 28.931 28.932"
                        style="enable-background: new 0 0 28.931 28.932;"
                        xml:space="preserve"
                    >
                        <g>
                            <path
                                d="M28.344,25.518l-6.114-6.115c1.486-2.067,2.303-4.537,2.303-7.137c0-3.275-1.275-6.355-3.594-8.672C18.625,1.278,15.543,0,12.266,0C8.99,0,5.909,1.275,3.593,3.594C1.277,5.909,0.001,8.99,0.001,12.266c0,3.276,1.275,6.356,3.592,8.674c2.316,2.316,5.396,3.594,8.673,3.594c2.599,0,5.067-0.813,7.136-2.303l6.114,6.115c0.392,0.391,0.902,0.586,1.414,0.586c0.513,0,1.024-0.195,1.414-0.586C29.125,27.564,29.125,26.299,28.344,25.518z M6.422,18.111c-1.562-1.562-2.421-3.639-2.421-5.846S4.86,7.983,6.422,6.421c1.561-1.562,3.636-2.422,5.844-2.422s4.284,0.86,5.845,2.422c1.562,1.562,2.422,3.638,2.422,5.845s-0.859,4.283-2.422,5.846c-1.562,1.562-3.636,2.42-5.845,2.42S7.981,19.672,6.422,18.111z"
                            />
                        </g>
                    </svg>
                </span>
                <input type="search" class="form-control typeahead" placeholder="Search a Product" />
                <span class="input-group-text close-searchbar">
                    <svg viewBox="0 0 329.26933 329" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"
                        />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</header>
