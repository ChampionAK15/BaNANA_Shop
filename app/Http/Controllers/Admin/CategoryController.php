<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('backend.category.index');
    }

    public function create(){
        return view('backend.category.create');
    }

    public function edit($category_id){
        $cat = Category::find($category_id);
    return view('backend.category.edit', compact('cat'));
    }

    public function update(Request $request, $category_id)
    {
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->category_id = $request->cetegory_id;
            $category->update();
            alert()->success('แก้ไขข้อมูลสำเร็จ','ข้อมูลนี้ถูกอัพเดตแล้ว');
            return redirect()->route('c.category');

    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลนี้ถูกลบแล้ว');
        return redirect()->route('c.category');
}
}
