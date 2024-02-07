@extends('layouts.master_backend')
@section('con')
    <div class="ibox mt-4">
        <div class="ibox-head">
            <div class="ibox-title">User Table</div>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50px">ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Created_at</th>
                            <th>updated_at</th>
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
