<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerchandisingController extends Controller
{
    public function index()
    {
        return view('front.pages.merchandising.index');
    }
}
