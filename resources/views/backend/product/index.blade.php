@extends('layouts.master_backend')
@section('con')
    <div class="ibox mt-4">
        <div class="ibox-head">
            <div class="ibox-title">User Table</div>
            <a href="{{ url('admin/product/channel') }}" class="btn btn-success">เพิ่มข้อมูล</a>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Images</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($product as $pro)
                            <tr>
                                <td>{{ $product->firstItem() + $loop->index }}</td>
                                <td>{{ $pro->name }}</td>
                                <td>{{ $pro->category->name }}</td>
                                <td>
                                    <img src="{{ asset('backend/product/' . $pro->image) }}" width="150" alt="">
                                </td>
                                <td>{{ $pro->price }}</td>
                                <td>{{ $pro->description }}</td>
                                <td>{{ $pro->created_at }}</td>
                                <td>{{ $pro->updated_at }}</td>
                                <td>
                                    <a href="{{ route('p.edit', $pro->product_id) }}"><button
                                            class="btn btn-default btn-xs m-r-5" data-toggle="tooltip"
                                            data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button></a>
                                    <a href="{{ url('admin/product/delete/' . $pro->product_id) }}"><button
                                            class="btn btn-default btn-xs" data-toggle="tooltip"
                                            data-original-title="Delete"><i class="fa fa-trash font-14"></i></button></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="mt-4">

                </div>
            </div>
        </div>
    </div>


@endsection
