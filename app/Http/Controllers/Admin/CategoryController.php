<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $category = Category::orderBy('created_at','desc')->Paginate('10');
        return view('backend.category.index',compact('category'));
    }

    public function create(){
        return view('backend.category.create');
    }

    public function insert(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',

        ],[
            'name.required' => 'กรุณากรอกชื่อประเภทสินค้า',
            'name.unique' => 'ชื่อนี้มีอยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
        ]);

        $cat = new Category();
        $cat->name = $request->name;
        $cat->save();
        alert()->success('เพิ่มข้อมูลสำเร็จ','ได้ทำการเพิ่มข้อมูลชื่อประเภทสินค้านี้สำเร็จ');
        return redirect('admin/category/index');
    }

    public function edit($category_id){
        $cat = Category::find($category_id);
    return view('backend.category.edit', compact('cat'));
    }

    public function update(Request $request, $category_id)
    {
        $category = Category::find($category_id);
        $category->name = $request->name;
        alert()->success('อัพเดตข้อมูลสำเร็จ','ได้ทำการเพิ่มข้อมูลชื่อประเภทสินค้านี้สำเร็จ');
            $category->update();
           return redirect('admin/category/index');

    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        alert()->success('ทำการลบข้อมูลสำเร็จ','ได้ทำการลบข้อมูลชื่อประเภทสินค้าเรียบร้อย');
       return redirect('admin/category/index');
}
}
