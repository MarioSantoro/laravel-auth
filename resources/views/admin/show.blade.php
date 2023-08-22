@extends('layouts.app')

@section('content')
    <div class="container show justify-content-center d-flex mt-5">
        <div class="card">
            <img src="{{ $project->image }}" alt="Imagine">
            <div class="card-body">
                <h3>Title : {{ $project->title }}</h3>
                <p class="card-text">Type : {{ $project->type }}</p>
                <p class="card-text">Status : {{ $project->status }}</p>
                <p class="card-text">Start Date : {{ $project->start_date }}</p>
                <p class="card-text">End Date : {{ $project->end_date }}</p>
            </div>
        </div>
    </div>
@endsection
