<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Category;
use App\Models\Product;

use function Laravel\Prompts\alert;

class ProductController extends Controller
{
    public function index(){

        $product = Product::orderBy('created_at','desc')->Paginate(10);
        return view('backend.product.index',compact('product'));
    }

    public function channel(){
        $category = Category::all();
        return view('backend.product.channel',compact('category'));
    }

    public function insert(Request $request){
        //ป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ],
        [
            'name.required' => 'กรุณากรอกข้อมูลสินค้า',
            'name.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'price.required' => 'กรุณากรอกข้อมูลราคาสินค้า',
            'price.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'description.required' => 'กรุณากรอกข้อมูลประเภทสินค้า',
            'image.mimes' => 'อัพโหลดภาพที่มีนามสกุล .jpg .jpeg .png ได้เท่านั้น',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/product/',$filename);
            $product->image = $filename;
        }else{
            $product->image = 'no_image.jpg';
        }
        $product->save();

        return redirect('admin/product/index');
    }

    public function edit($product_id){
        $pro = Product::find($product_id);
        $cat = Category::all();
    return view('backend.product.edit', compact('pro','cat'));
    }

    public function update(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if($request->hasFile('image')){

            if($product->image != 'no_image.jpg'){
                File::delete(public_path().'/backend/product/'.$product->image);
            }


            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/product/',$filename);
            $product->image = $filename;
        }
        $product->update();

        return redirect('admin/product/index');
    }


            public function delete($product_id){
                $product = Product::find($product_id);
                if($product->image != 'no_image.jpg'){
                    File::delete(public_path().'/backend/product/'.$product->image);
                }
                $product->delete();
                return redirect('admin/product/index');
    }
}


