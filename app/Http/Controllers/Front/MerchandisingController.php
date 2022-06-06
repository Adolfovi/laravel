<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class MerchandisingController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->where('active', 1)->get();
        return view('front.pages.merchandising.index', ['products' => $products]);
    }

}