@extends('layouts.app')
@section('content')
use Project
<div class="card-body">
    <table class="table">
        <tr>
            <th>Employee ID</th>
            <th>Employee name</th>
            <th>Project's name</th>
            <th>Actions</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->e_name }} {{ $employee->e_surname }}</td>
            <td> {{ $employee->project['p_name'] }}
               
        </td>
       

            <td><form action={{ route('employees.destroy', $employee->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('employees.edit', $employee->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form></td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('employees.create') }}" class="btn btn-success">Add</a>
    </div>
</div>
@endsection