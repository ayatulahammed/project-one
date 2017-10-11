<?php

namespace App\Http\Controllers;
use App\Category;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }
    public function saveCategoryInfo(Request $request){
    //return $request->all();
// Eloquent ORM
//    $category = new Category();
//    $category ->category_name = $request->category_name;
//    $category ->category_description = $request->category_description;
//    $category ->publication_status = $request->publication_status;
//    $category->save();

        Category::create($request->all());

        //Query builder
//        DB::table('categories')->insert([
//            'category_name' => $request ->category_name,
//            'category_description' => $request ->category_description,
//            'publication_status' => $request ->publication_status,
//            ]);
    return redirect('/category/add-category')->with('massage','Category info add sucessfully');

    }
}
