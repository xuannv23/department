@extends('rooms.master')

@section('content')

<div class="card">
    <div class="card-header">Sua thong tin Room</div>
    <div class="card-body">
        <form method="POST" action = "{{ route('rooms.update', $room->RoomID) }} " enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Room Number</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="RoomNumber" value="{{$room->RoomNumber}}"></div>
            </div>
            <div class="row mb-4">
                <label  class="col-sm-2 col-label-form">Room Type</label>
                <div class="col-sm-10">
                    <select name="RoomType" class="form-control">
                        <option <?= $room->RoomType == "standard"? 'selected': '' ?> value="standard">standard</option>
                        <option <?= $room->RoomType == "deluxe"? 'selected': '' ?> value="deluxe">deluxe</option>
                        <option <?= $room->RoomType == "suite"? 'selected': '' ?> value="suite">suite</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label  class="col-sm-2 col-label-form">Availability</label>
                <div class="col-sm-10">
                    <select name="Availability" class="form-control">
                        <option <?= $room->Availability == "available"? 'selected': '' ?> value="available">available</option>
                        <option <?= $room->Availability == "occupied"? 'selected': '' ?> value="occupied">occupied</option>
                        <option <?= $room->Availability == "under maintenance"? 'selected': '' ?> value="under maintenance">under maintenance</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('rooms.index')}}" class="btn btn-secondary">Quay lai</a>
                <input type="submit" class="btn btn-primary" value='Sua'></input>
            </div>
        </form>
    </div>
</div>

@endsection
