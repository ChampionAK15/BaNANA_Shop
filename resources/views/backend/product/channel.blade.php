@extends('layouts.master_backend')
@section('con')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">เพิ่มข้อมูลประเภทสินค้า</div>
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
                        <label for="defaultFormControlInput" class="form-label">Images</label>
                        <div class="input-group">
                            <div class="input-group-btn">
                                <input type="file" class="form-control" id="inputGroupFile02" name="image" />
                            </div>

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























    <!-- Nested Row within Card Body -->
    <div class="row">

        <div class="col-lg-12">
            <div class="p-5">

                <h1 class="h4 text-gray-900 mb-4">เพิ่มข้อมูลผลิตภัณฑ์</h1>


                <form action="{{ url('admin/product/insert') }}" method="post" enctype="multipart/form-data"
                    class="user mt-4">
                    @csrf
                    <div>
                        <label for="defaulFormController" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="defaultFormControlInput"
                            placeholder="กรุณากรอกชื่อสินค้า" aria-describedby="defaultFormControlHelp" />
                        <div class="mt-3">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>

                        <label for="defaultFormControlInput" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="defaultFormControlInput"
                            placeholder="กรุณากรอกราคาสินค้า" aria-describedby="defaultFormControlHelp" />
                        <div class="mt-3">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>

                        <label for="defaultFormControlInput" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id="defaultFormControlInput"
                            placeholder="กรุณากรอกรายละเอียดสินค้าสินค้า" aria-describedby="defaultFormControlHelp" />
                        <div class="mt-3">
                            @error('description')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Category</label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                <option selected>กรุณาเลือกประเภทสินค้า</option>
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
                        <label for="defaultFormControlInput" class="form-label">Images</label>
                        <div class="input-group">
                            <input name="image" type="file" class="form-control" id="inputGroupFile02" />

                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            <div class="mt-3">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <input type="submit" value="บันทึก" class="btn btn-primary mt-3">
                        <a href="{{ url('admin/product/index') }}" class="btn btn-danger mt-3">ย้อนกลับ</a>

                </form>

            </div>
        </div>
    </div>
@endsection
