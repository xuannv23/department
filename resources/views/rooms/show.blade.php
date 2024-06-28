@extends('rooms.master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Thong tin Room chi tiet</b></div>
            <div class="col col-md-6">
                <!-- <a href="{{ route('rooms.index') }}" class="btn btn-success btn-sm float-end"><b>Xem tat ca danh sach</b></a> -->
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label  class="col-sm-2 col-label-form"><b>Room Number</b></label>
            <div class="col-sm-10">
                {{$room->RoomNumber}}
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-label-form"><b>Room Type</b></label>
            <div class="col-sm-10">
                {{$room->RoomType}}
            </div>
        </div>
        <div class="row mb-4">
            <label  class="col-sm-2 col-label-form"><b>Availability</b></label>
            <div class="col-sm-10">
                {{$room->Availability}}
            </div>
        </div>
        <a href="{{route('rooms.index')}}" class="btn btn-secondary">Quay lai</a>
    </div>
</div>

@endsection('content')