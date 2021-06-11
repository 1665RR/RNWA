@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Add Manager
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('manager.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="location_id">Location id</label>
              <input type="number" class="form-control" name="location_id"/>
          </div>
          <div class="form-group">
              <label for="users_id">Users id</label>
              <input type="number" class="form-control" name="users_id"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Manager</button>
      </form>
  </div>
</div>
@endsection