@extends('toys.layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Toy Info</div>
  <div class="card-body">

    <form action="{{ route('updates', $toys->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$toys->id}}" id="id" />
      <label>Name</label></br>
      <input type="text" name="name" id="name" value="{{$toys->name}}" class="form-control"></br>
      <label>Amount</label></br>
      <input type="text" name="amount" id="amount" value="{{$toys->amount}}" class="form-control"></br>
      <label>Price</label></br>
      <input type="text" name="price" id="pricee" value="{{$toys->price}}" class="form-control"></br>
      <label>Brand</label></br>
      <input type="text" name="brand" id="brand" value="{{$toys->brand}}" class="form-control"></br>
      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop