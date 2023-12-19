@extends('layouts.app')

@section('content')
<a href="{{ route('breeds.create') }}" class="btn btn-primary float-end">Add Breed</a>
<form action="{{ route('breeds.update', $breed->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Breed name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $breed->name }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('breeds.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection