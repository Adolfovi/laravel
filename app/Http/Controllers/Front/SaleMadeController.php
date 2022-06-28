<?php 

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Debugbar;



class SaleMadeController extends Controller
{

    protected $cart;    
    protected $client;

    public function __construct(Cart $cart, Client $client)
    {
        $this->cart = $cart;
        $this->client = $client;
    }


    public function index()
    {        
        $view = View::make('front.pages.salemade.index')
        ->renderSections();
    }
}
