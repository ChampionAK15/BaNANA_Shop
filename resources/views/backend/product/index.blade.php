@extends('layouts.master_backend')
@section('con')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="{{ url('admin/product/channel') }}" class="btn btn-success">เพิ่มข้อมูล</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <tr>Action</tr>>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($product as $pro)
                            <tr>
                                <td>{{ $product->fistItem() + $loop->index }}</td>
                                <td>{{ $pro->name }}</td>
                                <td>{{ $pro->category->name }}</td>
                                <td>
                                    <img src="{{ asset('backend/product/resize/' . $pro->image) }}" alt="">
                                </td>
                                <td>{{ $pro->price }}</td>
                                <td>{{ $pro->description }}</td>
                                <td>{{ $pro->create_at }}</td>
                                <td>{{ $pro->update_at }}</td>
                                <td>
                                    <a href="{{ route('p.edit', $pro->product_id) }}"><i class="bx bxs-edit"></i></a>
                                    <a href="{{ url('admin/product/delete/' . $pro->product_id) }}"><i
                                            class="bx bx-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
