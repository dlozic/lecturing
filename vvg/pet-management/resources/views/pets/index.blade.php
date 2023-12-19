@extends('layouts.app')

@section('content')
<a href="{{ route('pets.create') }}" class="btn btn-primary float-end">Add Pet</a>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Pet name</th>
      <th>Weight</th>
      <th>Age</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pets as $pet)
    <tr>
      <th>{{ $pet->id }}</th>
      <td>{{ $pet->name }}</td>
      <td>{{ $pet->weight }}</td>
      <td>{{ $pet->age }}</td>
      <td>{{ $pet->created_at }}</td>
      <td>{{ $pet->updated_at }}</td>
      <td>
        <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-primary btn-sm">Edit</a>
        <form action="{{ route('pets.destroy', $pet->id) }}" method="POST" class="d-inline">
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