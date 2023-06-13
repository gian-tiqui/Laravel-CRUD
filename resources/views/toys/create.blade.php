@extends('toys.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Toys Page</div>
  <div class="card-body">
      
      <form action="{{ route('createtoy') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control" required></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control" required></br>
        <label>Brand</label></br>
        <input type="text" name="brand" id="brand" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop