@extends('rooms.master')
@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{$message}}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center">
        <b>Quan ly sinh vien</b>
    </h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <a href="{{ route('rooms.create') }}" class="btn btn-success "><b>Tao moi</b></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th scope="col">Room ID</th>
                <th scope="col">Room Number</th>
                <th scope="col">Room Type</th>
                <th scope="col">Availability</th>
                <th scope="col">Operation</th>
            </tr>
            @if(count($rooms) > 0)
                @foreach($rooms as $room)
                    <tr>
                        <td>{{$room->RoomID}}</td>
                        <td>{{$room->RoomNumber}}</td>
                        <td>{{$room->RoomType}}</td>
                        <td>{{$room->Availability}}</td>
                        <td>
                            <form action="{{ route('rooms.destroy', $room->RoomID) }}" method="POST" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('rooms.show', $room->RoomID) }}" class="btn btn-primary">Xem chi tiet</a>
                                <a href="{{ route('rooms.edit', $room->RoomID) }}" class="btn btn-warning">Sua</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Xoa" >
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">No data found</td>
                </tr>
            @endif
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function confirmDelete() {
        return confirm('Ban co chac chan muon xoa hoc sinh nay?');
    }
</script>
@endsection