@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Project ID</th>
            <th>Project name</th>
            <th>Project description</th>
            <th>Responsible employee</th>
            <th>Actions</th>
        </tr>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->p_name }}</td>
            <td>{{ $project->p_description }}</td>
            <td>{{ $project->employee['e_name'] }}</td>
            <td>
                <form action={{ route('projects.destroy', $project->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('projects.edit', $project->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('projects.create') }}" class="btn btn-success">Add</a>
    </div>
</div>
@endsection
