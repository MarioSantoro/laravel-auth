@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="button">
                    <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Create a new Project</a>
                </div>
                <div class="card">
                    <div class="card-header">Amministratore</div>

                    <div class="card-body">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">title</th>
                                    <th scope="col">type</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Start_Date</th>
                                    <th scope="col">End_Date</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <th scope="row">{{ $project->id }}</th>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->type }}</td>
                                        <td>{{ $project->status }}</td>
                                        <td>{{ $project->start_date }}</td>
                                        <td>{{ $project->end_date }}</td>
                                        <td class="d-flex justify-content-between">
                                            <a href="{{ route('admin.show', $project->id) }}"
                                                class="btn btn-sm btn-primary">View</a>
                                            <a href="" class="btn btn-sm btn-success">Edit</a>
                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
