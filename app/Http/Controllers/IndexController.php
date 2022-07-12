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

class IndexController extends Controller
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

    public function login()
    {
        if (Auth::check()) {
            
            return redirect()->route('dashboard');
        }
        $title = 'Dev Buyer - Login';
        return view('auth.login')->with(compact('title'));
    }
    public function index()
    {
        return view('web.index');
    }
    public function about()
    {
        return view('web.about');
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function cart()
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            return view('web.cart')->with(compact('cart'));
        } else{
            return redirect()->back()->with('error',"Cart is Empty");
        }
    }
    public function wishlist()
    {
        return view('web.wishlist');
    }
    public function checkout()
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            return view('web.checkout')->with(compact('cart'));
        } else{
            return redirect()->back()->with('error',"Cart is Empty");
        }
    }
    public function product_detail($url)
    {
        $product = product::where('url',$url)->first();
        return view('web.product-detail')->with(compact('product'));
    }
    public function sample_list()
    {
        return view('web.products');
    }
    public function product_list($category_slug)
    {
        // try {
        //     $category_id = Crypt::decrypt($category_id);
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('message', 'Error : ' . $th->getMessage());
        // }
        $category = category::where('slug',$category_slug)->first();
        // dd($category);
        $collection = product::where('category_id',$category->id)->take(96)->get();
        $perPage = 12;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        if ($currentPage == 1) {
            $start = 0;
        } else {
            $start = ($currentPage - 1) * $perPage;
        }
        $currentPageCollection = $collection->slice($start, $perPage)->all();
        $paginatedTop100 = new LengthAwarePaginator($currentPageCollection, count($collection), $perPage);
        $paginatedTop100->setPath(LengthAwarePaginator::resolveCurrentPath());
        return view('web.product-list', ['top100' => $paginatedTop100 ]);
    }
    
    
    public function account(){
        
        if (Auth::check()) {
            
            return redirect()->route('dashboard');
        }
        $title = 'Dev Buyer - Login';
        return view('auth.login')->with(compact('title'));
    }

}
