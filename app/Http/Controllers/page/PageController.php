<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('admin.page.index');
    }
    public function about(){
        return view('admin.page.pageabout');
    }
    public function contact(){
        return view('admin.page.pagecontact');
    }
    public function  product(){
        return view('admin.page.pageproduct')
        ->with('product',Product::paginate(6))
        ->with('category',Category::all());
    }
   
    //
}
