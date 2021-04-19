@extends('layouts.app')
@section('content')
    <div class="card-body">
        <table class="table">
            <tr style="background-color: #c3e6cb">
                <th>Project</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <form action={{ route('project.destroy', $project->id) }} method="POST">
                        <a class="btn btn-primary" style="background-color: #c3e6cb; color:black; border-color:grey;" href={{ route('project.edit', $project->id) }}>Edit</a>
                        @csrf @method('delete')
                        <input type="submit" class="btn btn-primary" style="background-color: #c3e6cb; color:black; border-color:grey;" value="Delete"/>
                        </form>
                        </td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{ route('project.create') }}" class="btn btn-primary" style="background-color: #c3e6cb; color:black; border-color:grey;" >Add new</a>
        </div>
    </div>
@endsection
