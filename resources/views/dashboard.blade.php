@extends('layouts.master_backend')
@section('con')

<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{ $p->count() }} ชิ้น</h2>
                    <div class="m-b-5">Product</div><i class="ti-shopping-cart widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-info color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{ $c->count() }} รายการ</h2>
                    <div class="m-b-5">Category</div><i class="ti-bar-chart widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-danger color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{ $u->count() }} คน</h2>
                    <div class="m-b-5">Users</div><i class="ti-user widget-stat-icon"></i>
                    <div><i class="fa fa-level-down m-r-5"></i><small></small></div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- END PAGE CONTENT-->

@endsection
