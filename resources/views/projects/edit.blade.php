@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit project </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('projects.update', $project->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">New project name</label>
                            <input type="text" name="e_name" class="form-control" value="{{ $project->p_name }}">
                        </div>
                        <div class="form-group">
                            <label for="">New project description</label>
                            <textarea type="text" name="p_description" rows=10 cols=100 class="form-control">{{ $project->p_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Assign employee: </label>
                            <select name="e_id" id="" class="form-control">
                                @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}" @if($employee->id == $project->employee) selected="selected" @endif> {{ $employee->e_name }} {{ $employee->e_surname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Confirm changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




