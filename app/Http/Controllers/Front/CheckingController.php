<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Tax;
use Illuminate\Support\Facades\DB;

class CheckingController extends Controller
{
    protected $cart;
    protected $tax;

    public function __construct(Cart $cart, Tax $tax)
    {
        $this->cart = $cart;
        $this->tax = $tax;
    }

    public function index()
    {
        return View::make('front.pages.checkout.index')
        ->with('carts', $this->cart)
        ->with('taxes', $this->tax->where('active', 1)->get())
        ->with('total', DB::table('carts')
        ->select('base_price')
        ->join('prices', 'carts.price_id', '=', 'prices.id')
        ->get());
    }
}