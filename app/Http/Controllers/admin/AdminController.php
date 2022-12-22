<?php

namespace App\Http\Controllers\admin;

use App\helpers\SaveImage;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addBrand(){
        return view('pages.add-brand');
    }

    public function storeBrand(Request $request){
        $validation = $request->validate([
            'image' => 'required',
            'name' => 'required|string',
            'description' => '',
        ]);
        $fileName = SaveImage::saveImage($request->image , 'brands');
        $brand = Brand::create([
            'image' => $fileName,
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->back();
    }
}
