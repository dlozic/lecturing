@extends('layouts.app')

@section('content')
<a href="{{ route('tags.create') }}" class="btn btn-primary float-end">Add Tag</a>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Tag name</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tags as $tag)
    <tr>
      <th>{{ $tag->id }}</th>
      <td>{{ $tag->name }}</td>
      <td>{{ $tag->created_at }}</td>
      <td>{{ $tag->updated_at }}</td>
      <td>
        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-sm">Edit</a>
        <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection