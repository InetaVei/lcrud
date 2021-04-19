@extends('layouts.app')
@section('content')
    <div class="card-body">
        @if ($errors->any())
            <h4 style="color: red">{{ $errors->first() }}</h4>
        @endif
        <table class="table">
            <tr style="background-color: #ffeeba;">
                <th>Name</th>
                <th>Surname</th>
                <th>Project</th>
                <th>Actions</th>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->employee_name }}</td>
                    <td>{{ $employee->employee_surname }}</td>
                    <td>{{ $employee->project->project_name }}</td>
                    <td>
                        <form action={{ route('employees.destroy', $employee->id) }} method="POST">
                            <a class="btn btn-primary" style="background-color: #ffeeba; color:black; border-color:grey;"
                                href={{ route('employees.edit', $employee->id) }}>Edit</a>
                            @csrf @method('delete')
                            <input type="submit" class="btn btn-primary"
                                style="background-color: #ffeeba; color:black; border-color:grey;" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{ route('employees.create') }}" class="btn btn-primary"
                style="background-color: #ffeeba; color:black; border-color:grey;">Add new</a>
        </div>
    </div>
@endsection
