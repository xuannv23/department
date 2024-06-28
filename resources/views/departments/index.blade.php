@extends('departments.master')
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
                <a href="{{ route('departments.create') }}" class="btn btn-success "><b>Tao moi</b></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th scope="col">Department ID</th>
                <th scope="col">Department Name</th>
                <th scope="col">Department location</th>
                <th scope="col">Leader ID</th>
                <th scope="col">Since</th>
                <th scope="col">Thao tac</th>
            </tr>
            @if(count($departments) > 0)
                @foreach($departments as $department)
                    <tr>
                        <td>{{$department->depart_id}}</td>
                        <td>{{$department->depart_name}}</td>
                        <td>{{$department->depart_loca}}</td>
                        <td>{{$department->emp_id}}</td>
                        <td>{{$department->since}}</td>
                        <td>
                            <form action="{{ route('departments.destroy', $department->depart_id) }}" method="POST" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('departments.show', $department->depart_id) }}" class="btn btn-primary">Xem chi tiet</a>
                                <a href="{{ route('departments.edit', $department->depart_id) }}" class="btn btn-warning">Sua</a>
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