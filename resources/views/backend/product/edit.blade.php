@extends('layouts.master_backend')
@section('con')
    <div class="row">

        <div class="col-lg-12">
            <div class="p-5">

                <h1 class="h4 text-gray-900 mb-4">Edit Product</h1>

                <form action="{{ url('admin/product/update/' . $pro->product_id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="defaultFromControlInput" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ $pro->name }}" class="form-control"
                            id="defaultFromControlInput" placeholder="กรุณากรอกชื่อสินค้า"
                            aria-describedby="defaultFromControlHelp" />

                        <label for="defaultFromControlInput" class="form-label">Description</label>
                        <input type="text" name="description" value="{{ $pro->description }}" class="form-control"
                            id="defaultFromControlInput" placeholder="กรุณากรอกรายละเอียดสินค้า"
                            aria-describedby="defaultFromControlHelp" />

                        <label for="exampleFromControlSelect1" class="form-label">Category</label>
                        <select name="category_id" class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example">
                            @foreach ($cat as $c)
                                <option value="{{ $c->category_id }}" @if ($c->category_id == $pro->category_id) selected @endif>
                                    {{ $c->name }}
                                </option>
                            @endforeach
                        </select>

                        <label for="defaultFromControlSelect1" class="form-label">Images</label>
                        <div class="input-group">
                            <input name="image" value="{{ $pro->image }}" type="file" class="form-control"
                                id="inputGropFile2" />
                            <label class="input-group-text" for="inputGropFile2">Upload</label>
                        </div>
                        <div class="mt-4">
                            <img src="{{ asset('backend/product/resize/.$pro->image') }}" alt="">
                        </div>
                        <input type="submit" value="อัพเดต" class="btn btn-primary mt-3">
                        <a href="{{ route('p.product') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
