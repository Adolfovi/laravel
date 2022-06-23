<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Tax;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class CheckingController extends Controller
{
    protected $cart;
    protected $tax;
    protected $client;

    public function __construct(Cart $cart, Tax $tax, Client $client)
    {
        $this->cart = $cart;
        $this->tax = $tax;
        $this->client = $client;

    }

    public function index($fingerprint)
    {

        $totals = $this->cart
        ->where('carts.fingerprint', $fingerprint)
        ->where('carts.active', 1)
        ->where('carts.venta_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();
        
        $view = View::make('front.pages.checkout.index')
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->with('fingerprint', $fingerprint)        
        ->renderSections();

        return response()->json(
            ['content' => $view['content']]
        );

    }

    public function store(){

        $this->client->updateOrCreate([
            'id' => request('id')],[
            'name' => request('name'),
            'surname' => request('surname'),
            'email' => request('email'),
            'telephone' => request('telephone'),
            'address' => request('address'),
            'postal_code' => request('postal_code'),
            'city' => request('city'),
            'country' => request('country'),
            'visible' => 1,
            'active' => 1,
            ]);
            return View::make('front.pages.salemade.index')->renderSections();
            
    }
}