@extends('layouts.exercise')

@section('content')
<div class="container">
    <div class="row">
        @foreach($projects as $project)
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-5">
            <div class="card list-card">
                <div class="card-header list-card-header">
                    <img class="list-image" src="{{ $project->images[0]->folder }}/{{ $project->images[0]->name }}" alt="">
                </div>

                <div class="card-body">
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description  }}</p>
                    <a class="list-link link-info link-underline link-underline-opacity-0" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                        </svg>
                        Saber más
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
