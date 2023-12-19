@extends('layouts.app')

@section('content')
<a href="{{ route('tags.create') }}" class="btn btn-primary float-end">Add Tag</a>
<form action="{{ route('tags.update', $tag->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Tag name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('tags.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection