@extends('layouts.master_backend')
@section('con')

{{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="http://" class="btn btn-success">เพิ่มข้อมูล</a>
 </div> --}}
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($user as $u)
                                       <tr>
                                        <td>{{ $u->id }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->phone }}</td>
                                        <td>{{ $u->created_at }}</td>
                                        <td>{{ $u->updated_at }}</td>
                                    </tr>
                                       @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection
