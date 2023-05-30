@extends('layouts.app')

@section('title','Create_Event')

@section('content')
<div class="container">
    <div class="row my-5 justify-content-center">
        <div class="col-md-4">
<form action="{{route('PostEvent')}}" method="POST">
    @csrf
    <div class="mb-1">
      <label class="form-label">Title</label>
      <input type="text" name="title" value="{{old('title')}}" class="form-control"  >
      @error('title')
       <span style="color: red">{{$message}}</span>   
      @enderror
    </div>
    <div class="mb-1">
        <label class="form-label">Description</label>
        <input type="text"  name="description" value="{{old('description')}}" class="form-control"  >
        @error('description')
       <span style="color: red">{{$message}}</span>   
      @enderror
    </div>
    <div class="mb-1">
        <label class="form-label">Start Date</label>
        <input type="date" name="start" value="{{old('start')}}" class="form-control"  >
        @error('start')
       <span style="color: red">{{$message}}</span>   
      @enderror
    </div>

    <div class="mb-1">
        <label class="form-label">End Date</label>
        <input type="date" name="end" value="{{old('end')}}" class="form-control"  >
        @error('end')
       <span style="color: red">{{$message}}</span>   
      @enderror
    </div>

    <div class="mb-1">
        <label class="form-label">Price</label>
        <input type="number" name="price" value="{{old('price')}}" class="form-control"  >
        @error('price')
       <span style="color: red">{{$message}}</span>   
      @enderror
    </div>
    <button class="btn btn-dark">Valider</button>
  </form>
</div>
</div>
</div>
@endsection