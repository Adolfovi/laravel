<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckingController extends Controller
{
    public function index()
    {
        return view('front.pages.checkout.index');
    }
}
