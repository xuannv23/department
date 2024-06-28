@extends('departments.master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Thong tin chi tiet</b></div>
            <div class="col col-md-6">
                <a href="{{ route('departments.index') }}" class="btn btn-success btn-sm float-end"><b>Xem tat ca danh sach</b></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label  class="col-sm-2 col-label-form"><b>Department ID</b></label>
            <div class="col-sm-10">
                {{$department->depart_id}}
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-label-form"><b>Department Name</b></label>
            <div class="col-sm-10">
                {{$department->depart_name}}
            </div>
        </div>
        <div class="row mb-4">
            <label  class="col-sm-2 col-label-form"><b>Department location</b></label>
            <div class="col-sm-10">
                {{$department->depart_loca}}
            </div>
        </div>
        <div class="row mb-4">
            <label  class="col-sm-2 col-label-form"><b>Leader ID</b></label>
            <div class="col-sm-10">
                {{$department->emp_id}}
            </div>
        </div>
        <div class="row mb-4">
            <label  class="col-sm-2 col-label-form"><b>Since</b></label>
            <div class="col-sm-10">
                {{$department->since}}
            </div>
        </div>
        <a href="{{route('departments.index')}}" class="btn btn-secondary">Quay lai</a>
    </div>
</div>

@endsection('content')