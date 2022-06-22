<?php 
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleMadeController extends Controller
{
    public function index()
    {
        return view('front.pages.salemade.index');
    }
}
