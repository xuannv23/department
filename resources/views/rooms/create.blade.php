@extends('rooms.master')
@section('content')
<div class="card">
    <div class="card-header">Them moi </div>
    <div class="card-body">
        <form method="POST" action = "{{ route('rooms.store') }} " enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Room Number</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="RoomNumber"></div>
            </div>
            <div class="row mb-4">
                <label  class="col-sm-2 col-label-form">Room Type</label>
                <div class="col-sm-10">
                    <select name="RoomType" class="form-control">
                        <option value="standard">standard</option>
                        <option value="deluxe">deluxe</option>
                        <option value="suite">suite</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label  class="col-sm-2 col-label-form">Availability</label>
                <div class="col-sm-10">
                    <select name="Availability" class="form-control">
                        <option value="available">available</option>
                        <option value="occupied">occupied</option>
                        <option value="under maintenance">under maintenance</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('rooms.index')}}" class="btn btn-secondary">Quay lai</a>
                <input type="submit" class="btn btn-primary" value='Them'></input>
            </div>
        </form>
    </div>
</div>
@endsection