@extends('layouts.app')

@section('content')
<!-- adding tag  -->
<form action="{{ route('tags.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Tag name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', '') }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('tags.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection