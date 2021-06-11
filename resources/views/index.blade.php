@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div> <a href="{{ route('manager.create')}}" class="btn btn-primary btn-sm">Add Manager</a>
  </br> </div>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Location Id</td>
          <td>Users ID</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($manager as $manager)
        <tr>
            <td>{{$manager->id}}</td>
            <td>{{$manager->name}}</td>
            <td>{{$manager->location_id}}</td>
            <td>{{$manager->users_id}}</td>
            <td class="text-center">
                <a href="{{ route('manager.edit', $manager->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('manager.destroy', $manager->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection