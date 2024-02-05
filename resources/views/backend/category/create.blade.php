@extends('layouts.master_backend')
@section('con')
    <!-- Nested Row within Card Body -->
    <div class="row">

        <div class="col-lg-12">
            <div class="p-5">

                <h1 class="h4 text-gray-900 mb-4">เพิ่มข้อมูลประเภทสินค้า</h1>

                <form class="user mt-4" method="POST" action="{{ route('c.insert') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="mt-4">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <input type="submit" value="บันทึก" class="btn btn-primary btn-user btn-block mt-4">


                </form>

            </div>
        </div>
    </div>
@endsection
