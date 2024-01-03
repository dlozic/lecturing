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
        <input type="number" class="form-control" id="weight" name="weight" value="{{ old('weight', '') }}">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" value="{{ old('age', '') }}">
    </div>
    <div class="mb-3">
        <label for="user_id" class="form-label">Owner</label>
        <select class="form-select" id="user_id" name="user_id">
            @foreach ($users as $user)
            <option value="{{ $user->id }}" {{ Auth::user()->id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="breed_id" class="form-label">Breed</label>
        <select class="form-select" id="breed_id" name="breed_id">
            @foreach ($breeds as $breed)
            <option value="{{ $breed->id }}" {{ old('breed_id') == $breed->id ? 'selected' : '' }}>{{ $breed->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
        <select class="form-select" id="tags" name="tags[]" multiple>
            @foreach ($tags as $tag)
            <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', [])) ? 'selected' : '' }}>{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection