<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Http\Requests\Admin\UserRequest;
use Debugbar;



class VentaController extends Controller {
    protected $cart;


public function __construct(Cart $cart){
    $this->cart = $cart;
}









public function index(){
    return view('admin.pages.ventas.index')
    ->with('carts',$this->cart->where('carts.active', 1)
    ->select(DB::raw('*, products.name as product, payment_methods.name as pmethod'))
    ->join('ventas','carts.venta_id', '=', 'ventas.id')
    ->join('payment_methods','ventas.payment_method_id', '=', 'payment_methods.id')
    ->join('prices','carts.price_id', '=', 'prices.id')
    ->join('products','prices.product_id', '=', 'products.id')    
    ->get());
    
}

public function show(){}

public function create(){}

public function edit(){}

public function destroy(){}

public function store(){}



}