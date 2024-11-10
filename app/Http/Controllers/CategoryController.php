<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function manageCategory(Request $request){
        if ($request->isMethod("post")){
            $data =$request->validate(
                ['cat_name' => 'required'
            ]);
            Category::create($data);
            return redirect()->route("category")->with("msg","Category Inserted Successfully");
        }

        $data['categories'] =Category::all();
        return view("admin.category",$data);
    }

    public function deleteCategory(Request $request, $id){
        dd("testing");
    }
}
