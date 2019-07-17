@extends('layouts.master_backend')

@section('container')

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{ route('pets.create')}}" class="btn btn-primary">Create Pet</a>
  <br>
  <br>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Pet Name</td>
          <td>Qty</td>
          <td>Pet Price</td>
          <td>Description</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{$pet->id}}</td>
            <td>{{$pet->name}}</td>
            <td>{{$pet->qty}}</td>
            <td>{{$pet->price}}</td>
            <td>{{$pet->description}}</td>
            <td><a href="{{ route('pets.edit',$pet->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('pets.destroy', $pet->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection