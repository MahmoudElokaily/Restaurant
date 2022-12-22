<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $swiperImage = Brand::take(6)->get();
        $data = [
            'swiperImages' => $swiperImage,
        ];
        return view('pages.home' , $data);
    }
}
