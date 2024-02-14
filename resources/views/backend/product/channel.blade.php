@extends('layouts.master_backend')
@section('con')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">เพิ่มข้อมูลประเภทผลิตภัณฑ์</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form action="{{ url('admin/product/insert') }}" method="post" enctype="multipart/form-data"
                        class="user mt-4">
                        @csrf
                        <div class="form-group">
                            <label>Product Name</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="mt-4">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" type="text" name="price">
                        </div>
                        <div class="mt-4">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description">
                        </div>
                        <div class="mt-4">
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control input-sm" name="category_id"id="exampleFormControlSelect1">
                                <option>กรุณาเลือกประเภทสินค้า</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->category_id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            @error('category')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <div class="mt-3">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <input type="submit" class="btn btn-primary" value="บันทึก">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
























@endsection
