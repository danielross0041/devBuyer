@extends('web.layouts.main')
@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>cart</h2>
                        <ul>
                            <li><a href="{{route('index')}}">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="cart-section section-big-py-space b-g-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">total</th>
                            <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        ?>
                        @foreach($cart as $key => $cart_arr)
                        <?php
                        $product = App\Models\product::where('id',$cart_arr['product_id'])->first();
                        $proTotal = $product->price*$cart_arr['quantity'];
                        $total += $proTotal;
                        ?>
                        <tr>
                            <td>
                                <a href="javascript:void(0)"><img src="{{asset('web/assets/images/no-img.jpeg')}}" alt="cart" class=" "></a>
                            </td>
                            <td><a href="javascript:void(0)">{{$product->name}}</a>
                                <div class="mobile-cart-content">
                                    <div class="col-xs-3">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <button class="qty-minus"></button>
                                                <input type="text" name="quantity" class="form-control input-number" value="{{$cart_arr['quantity']}}" min="1" max="9">
                                                <button class="qty-plus"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">${{$product->price}}</h2>
                                    </div>
                                    <div class="col-xs-3">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>${{$product->price}}</h2>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <button class="qty-minus"></button>
                                        <input type="number" name="quantity" class="form-control input-number qty" value="{{$cart_arr['quantity']}}" min="1" max="9">
                                        <button class="qty-plus"></button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2 class="td-color">${{$proTotal}}</h2>
                            </td>
                            <td>
                                <a class="btn btn-rounded btn-md update-cart-detail" data-cart_id="{{$key}}">Update</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                        <tr>
                            <td>total price :</td>
                            <td>
                                <h2>${{$total}}</h2>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12">
                <a href="{{route('index')}}" class="btn btn-normal">continue shopping</a>
                <a href="{{route('checkout')}}" class="btn btn-normal ms-3">check out</a>
            </div>
        </div>
    </div>
</section>
<!--section end-->

@endsection
@section('link')
<style>
    .header-category ul.collapse-category.show {
        display: none;
    }
</style>
@endsection
@section('js')
@endsection
