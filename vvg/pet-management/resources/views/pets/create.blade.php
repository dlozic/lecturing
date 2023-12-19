@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('pets.store') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Pet name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', '') }}">
    </div>
    <div class="mb-3">
        <label for="weight" class="form-label">Weight</label>
        <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight', '') }}">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="text" class="form-control" id="age" name="age" value="{{ old('age', '') }}">
    </div>
    <!-- faking user_id -->
    <input type="hidden" name="user_id" value="1">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection