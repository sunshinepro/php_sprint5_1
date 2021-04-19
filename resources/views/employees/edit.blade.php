@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit employee</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Employee name</label>
                            <input type="text" name="e_name" class="form-control" value="{{ $employee->e_name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Employee surname</label>
                            <input type="text" name="e_surname" class="form-control" value="{{ $employee->e_surname }}">
                        </div>
                        <div class="form-group">
                            <label for="">Project</label>
                            {{-- <textarea type="text" name="description" rows=10 cols=100 class="form-control">{{ $employees->description }}</textarea> --}}
                        </div>
                        <button type="submit" class="btn btn-primary">Confirm changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
