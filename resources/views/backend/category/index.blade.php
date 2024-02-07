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
                <form method="POST" action="{{ route('c.insert') }}">
                    @csrf
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" type="text"  name="name">
                    </div>
                    <div class="mt-4">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
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


    <div class="ibox mt-4">
        <div class="ibox-head">
            <div class="ibox-title">Category Table</div>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50px">ID</th>
                            <th>Name</th>
                            <th>Created_at</th>
                            <th>updated_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($category as $cat)
                            <tr>
                                <td>{{ $category->firstItem() + $loop->index }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->created_at }}</td>
                                <td>{{ $cat->updated_at }}</td>
                                <td>
                                    <a href="{{ url('admin/category/edit/' . $cat->category_id) }}">
                                        <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip"
                                            data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                    </a>

                                    <a href="{{ url('admin/category/delete/' . $cat->category_id) }}">
                                        <button class="btn btn-default btn-xs" data-toggle="tooltip"
                                            data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $category->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
