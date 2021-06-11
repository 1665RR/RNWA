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
  <div> <a href="{{ route('location.create')}}" class="btn btn-primary btn-sm">Add Location</a>
  </br> </div>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Address</td>
          <td>Phone</td>
          <td>email</td>
          <td>Company ID</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($location as $location)
        <tr>
            <td>{{$location->id}}</td>
            <td>{{$location->name}}</td>
            <td>{{$location->address}}</td>
            <td>{{$location->phone}}</td>
            <td>{{$location->email}}</td>
            <td>{{$location->company_id}}</td>
            <td class="text-center">
                <a href="{{ route('location.edit', $location->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('location.destroy', $location->id)}}" method="post" style="display: inline-block">
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