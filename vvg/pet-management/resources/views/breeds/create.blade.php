@extends('layouts.app')

@section('content')
<!-- adding breed  -->
<form action="{{ route('breeds.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Breed name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', '') }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('breeds.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection