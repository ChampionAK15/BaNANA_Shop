@extends('layouts.master_backend')
@section('con')
    <div class="row">

        <div class="col-lg-12">
            <div class="p-5">

                <h1 class="h4 text-gray-900 mb-4">Edit Category</h1>

                <form action="{{ url('admin/category/update/' . $cat->category_id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="defaultFromControlInput" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ $cat->name }}" class="form-control"
                            id="defaultFromControlInput" placeholder="กรุณากรอกประเภทสินค้า"
                            aria-describedby="defaultFromControlHelp" />
                        <input type="submit" value="อัพเดต" class="btn btn-primary mt-3">
                        <a href="{{ route('c.category') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
