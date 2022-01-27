<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
// use Facade\FlareClinet\Stacktrace\File;
use Illuminate\Http\Request;    
use Illuminate\Support\Str;
use Image;
use File;    

class ProductController extends Controller
{
    public function index(){

        return view('admin.product.index')->with('categories',Category::all());
    }

    public function create(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'category' => 'required',   
            'price' => 'required|numeric',
            'image' =>'mimes:jpeg,jpg,png|file|max:12040',
        ],
        [
            'name.required' => 'กรุณาป้อนชื่อสินค้า',
            'category.required' => 'กรุณาป้อนชื่อสินค้า',
            'price.required' => 'กรุณาป้อนราคาสินค้า',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
            'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',
        ]
    );      



        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->price = $request->price;
        
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $product->image = $filename;

        }else{
            $product->image =  'nopic.png';
        }

        $product->save();
        return redirect()->route('index');
    }

    public function edit($id){
        $editproduct = Product::find($id);  
        return view('admin.product.edit',compact('editproduct'))->with('categories',Category::all());   
    }
    
    public function update(Request $request, $id){
            $validateData = $request->validate([
                'name' => 'required',
                'category' => 'required',   
                'price' => 'required|numeric',
                'image' =>'mimes:jpeg,jpg,png|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'category.required' => 'กรุณาป้อนชื่อสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',
            ]
        );  
        
        if($request->hasFile('image')){
            $product = Product::find($id);
            if($product->image != 'nopic.png'){
                File::delete(public_path().'/admin/images/'.$product->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $product->image = $filename;
            $product->name = $request->name;
            $product->category_id = $request->category;
            $product->price = $request->price;  
        }else{
            $product = Product::find($id);
            $product->image = $filename;
            $product->name = $request->name;
            $product->category_id = $request->category;
            $product->price = $request->price;  
        }

        $product->save();
        return redirect()->route('index');
    }

    public function delete($id){
        $delete = Product::find($id);
        if($delete->image != 'nopic.png'){
            File::delete(public_path().'/admin/images/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('index');
    }

    public function findCategory($category_id){
        $category = Category::find($category_id);
        return view('admin.product.findproduct')
        ->with('category',Category::all()->sortBy('name'))
        ->with('product',$category->product()->paginate(6));

    }

}
