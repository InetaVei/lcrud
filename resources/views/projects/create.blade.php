@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #c3e6cb;">Create new project</div>
                    <div class="card-body">
                        <form action="{{ route('project.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Project name:</label>
                                <input type="text" name="project_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea id="mce" name="description" rows=10 cols=100 class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #c3e6cb; color:black; border-color:grey;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
