@extends('layouts.master_backend')
@section('con')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url('admin/category/create') }}" class="btn btn-success">เพิ่มข้อมูล</a>
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
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
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
                                                    <a href="{{ url('admin/category/edit/' . $cat->category_id) }}"
                                                        class="btn btn-warning">แก้ไข</a>
                                                    <a href="{{ url('admin/category/delete/' . $cat->category_id) }}"
                                                        class="btn btn-danger">ลบ</a>
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
        @endsection
