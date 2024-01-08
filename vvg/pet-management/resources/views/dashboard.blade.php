@extends('layouts.app')

@section('content')

@auth
<h2>Welcome, {{ auth()->user()->name }}!</h2>
@endauth
<hr />

<!-- bootstrap panels with 4 counters -->
<div class="row">
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Number of users: {{ $counters['users'] }}
                </h5>
                <a href="{{ route('users.index') }}" class="btn btn-primary">Go</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Number of pets: {{ $counters['pets'] }}
                </h5>
                <a href="{{ route('pets.index') }}" class="btn btn-primary">Go</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Number of tags: {{ $counters['tags'] }}
                </h5>
                <a href="{{ route('tags.index') }}" class="btn btn-primary">Go</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Number of breeds: {{ $counters['breeds'] }}
                </h5>
                <a href="{{ route('breeds.index') }}" class="btn btn-primary">Go</a>
            </div>
        </div>
    </div>
</div>

@endsection