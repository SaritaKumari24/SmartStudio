<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function  index(){
        $data['bookcat']=Category::all();
        return view('public.bookingcategory',$data);
    }
    public function store(Request $request){

        $request->validate([
            'cat_name'=>'required',
            'cat_slug'=>'required',
            'cat_description'=>'nullable|string',
            'cat_image'=>'required|image|mimes:jpeg,png,jpg,svg',
           ]);
    }
}
