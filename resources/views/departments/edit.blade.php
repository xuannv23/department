@extends('departments.master')

@section('content')

<div class="card">
    <div class="card-header">Sua thong tin Room</div>
    <div class="card-body">
        <form method="POST" action = "{{ route('departments.update', $department->depart_id) }} " enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Department Name</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="depart_name" value="{{$department->depart_name}}"></div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Department location</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="depart_loca" value="{{$department->depart_loca}}"></div>
            </div>
            <div class="row mb-4">
                <label  class="col-sm-2 col-label-form">Room Type</label>
                <div class="col-sm-10">
                <select name="leader_id" class="form-control">
                        @foreach($employees as $employee)
                            <option value="{{ $employee->emp_id }}">{{ $employee->emp_id }} - {{ $employee->emp_name }}</option>
                        @endforeach 
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Since</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="since" value="{{$department->since}}"></div>
            </div>
            <div class="text-center">
                <a href="{{route('departments.index')}}" class="btn btn-secondary">Quay lai</a>
                <input type="submit" class="btn btn-primary" value='Sua'></input>
            </div>
        </form>
    </div>
</div>

@endsection
