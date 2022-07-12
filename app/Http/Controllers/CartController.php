<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\product;
use App\Models\category;
use Illuminate\Pagination\LengthAwarePaginator;


use Illuminate\Support\Str;
use App\Mail\mailer;
use Session;
use Helper;
use Mail;
use Carbon\Carbon;
use \Crypt;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function add_to_cart(Request $request)
    {
        // dd($request->product_id,$request->qty);
        try{
            $cart = array();
            if (Session::has('cart')) {
                $cart = Session::get('cart');
            }
            $cart[$request->product_id]['product_id'] = $request->product_id;
            $cart[$request->product_id]['quantity'] = $request->qty;
            Session::put('cart', $cart);
            $product = product::where('id',$request->product_id)->first();
            $msg ='"'. $product->name.'" has been added to cart';
            $status['message'] = $msg;
            $status['status'] = 1;
            return json_encode($status);
        } catch(Exception $e) {
            $error = $e->getMessage();
            $status['message'] = $error;
            $status['status'] = 0;
            return json_encode($status);
        }
    }
    public function update_cart(Request $request)
    {
        try{
            $cart = array();
            if (Session::has('cart')) {
                $cart = Session::get('cart');
            }
            $cart[$request->cart_id]['quantity'] = $request->qty;
            // dd($cart);
            Session::put('cart', $cart);
            $msg ='Cart has been updated';
            $status['message'] = $msg;
            $status['status'] = 1;
            return json_encode($status);
        } catch(Exception $e) {
            $error = $e->getMessage();
            $status['message'] = $error;
            $status['status'] = 0;
            return json_encode($status);
        }
    }
    public function delete_cart(Request $request)
    {
        try{
            $cart = array();
            if (Session::has('cart')) {
                $cart = Session::get('cart');
            }
            unset($cart[$request->cart_id]);
            Session::put('cart', $cart);
            $product = product::where('id',$request->cart_id)->first();
            $msg ='"'. $product->name.'" has been removed from Cart';
            $status['message'] = $msg;
            $status['status'] = 1;
            return json_encode($status);
        } catch(Exception $e) {
            $error = $e->getMessage();
            $status['message'] = $error;
            $status['status'] = 0;
            return json_encode($status);
        }
    }

    public function forget_cart(){
        if (Session::has('cart')) {    
            Session::forget('cart');
        }
        return redirect()->back();

    }
    

}
