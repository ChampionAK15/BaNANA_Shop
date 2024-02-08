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
                            id="defaultFromControlInput" aria-describedby="defaultFromControlHelp" />

                        <label for="defaultFromControlInput" class="form-label">Price</label>
                        <input type="text" name="price" value="{{ $pro->price }}" class="form-control"
                            id="defaultFromControlInput" aria-describedby="defaultFromControlHelp" />

                        <label for="defaultFromControlInput" class="form-label">Description</label>
                        <input type="text" name="description" value="{{ $pro->description }}" class="form-control"
                            id="defaultFromControlInput" aria-describedby="defaultFromControlHelp" />


                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Category</label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                @foreach ($cat as $c)
                                    <option value="{{ $c->category_id }}" @if ($c->category_id == $pro->category_id) selected @endif>
                                        {{ $c->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <label for="defaultFromControlSelect1" class="form-label">Images</label>

                            <input name="image" value="{{ $pro->image }}" type="file" class="form-control"
                                id="inputGropFile2" />

                        <div class="mt-4">
                            <img src="{{ asset('backend/product/' . $pro->image) }}" width="150" alt="">
                        </div>
                        <input type="submit" value="อัพเดต" class="btn btn-primary mt-3">

                            
                        <a href="{{ url('admin/product/index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
