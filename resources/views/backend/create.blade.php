@extends('layouts.master_backend')

@section('container')

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Book
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
      <form method="post" action="{{ route('pets.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Pet Name :</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="qty">Pet Qty :</label>
              <input type="text" class="form-control" name="qty"/>
          </div>
          <div class="form-group">
              <label for="price">Pet Price :</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" class="form-control" name="description"/>
          </div>
          <button type="submit" class="btn btn-primary">Create Pet</button>
      </form>
  </div>
</div>

@endsection