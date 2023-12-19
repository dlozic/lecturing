@extends('layouts.app')

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-primary float-end">Add User</a>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>User name</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th>{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->created_at }}</td>
      <td>{{ $user->updated_at }}</td>
      <td>
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
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