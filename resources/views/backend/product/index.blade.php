@extends('layouts.master_backend')
@section('con')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url('admin/product/channel') }}" class="btn btn-success">เพิ่มข้อมูล</a>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="table-responsive table--no-card mb-3">
                                <table class="table table-borderless table-striped table-earning">
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
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($product as $pro)
                                            <tr>
                                                <td>{{ $product->firstItem() + $loop->index }}</td>
                                                <td>{{ $pro->name }}</td>
                                                <td>{{ $pro->category->name }}</td>
                                                <td>
                                                    <img src="{{ asset('backend/product/' . $pro->image) }}" width="150"
                                                        alt="">
                                                </td>
                                                <td>{{ $pro->price }}</td>
                                                <td>{{ $pro->description }}</td>
                                                <td>{{ $pro->created_at }}</td>
                                                <td>{{ $pro->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('p.edit', $pro->product_id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="{{ url('admin/product/delete/' . $pro->product_id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
