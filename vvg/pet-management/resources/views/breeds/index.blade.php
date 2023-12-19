@extends('layouts.app')

@section('content')
<a href="{{ route('breeds.create') }}" class="btn btn-primary float-end">Add Breed</a>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Breed name</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($breeds as $breed)
    <tr>
      <th>{{ $breed->id }}</th>
      <td>{{ $breed->name }}</td>
      <td>{{ $breed->created_at }}</td>
      <td>{{ $breed->updated_at }}</td>
      <td>
        <a href="{{ route('breeds.edit', $breed->id) }}" class="btn btn-primary btn-sm">Edit</a>
        <form action="{{ route('breeds.destroy', $breed->id) }}" method="POST" class="d-inline">
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