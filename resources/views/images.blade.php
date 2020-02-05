@extends('layouts.app')

@section('content')
<div class="container">
  @if ($image ?? '')
    <div class="alert alert-success">
        {{ __('Image successfully uploaded')}}
        <a href="/image">Upload Another</a>
    </div>
  @else
  <h1> Upload Images </h1>
  <div class="jumbotron">
  <form action="{{ route('addImage') }}" method = "POST" enctype="multipart/form-data">
  {{csrf_field()}}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <br>
    <div class="input-group">
      <div class="custom-file" >
        <label class="custom-file-label">Choose file:</label>
        <input type="file" class="custom-file-input" name="image">
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
@endif
@endsection   
