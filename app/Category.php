<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
//   public function index(){
//       return view('admin.category.add-category');
protected $fillable = ['category_name','category_description','publication_status'];


}
