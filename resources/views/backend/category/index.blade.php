@extends('layouts.master_backend')
@section('con')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="{{ url('admin/category/create') }}" class="btn btn-success">เพิ่มข้อมูล</a>
 </div>
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Category</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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

                   <tr>
                    <td>1</td>
                    <td>aaaa</td>
                    <td>12</td>
                    <td>13</td>
                    <td>
                        <a href="http://" class="btn btn-warning">แก้ไข</a>
                        <a href="http://" class="btn btn-danger">ลบ</a>
                    </td>
                </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
