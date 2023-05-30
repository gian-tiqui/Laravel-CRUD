@extends('toys.layout')
@section('content')

<div class="card">
    <div class="card-header">Toy Info</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $toys->name }}</h5>
            <p class="card-text">Amount: {{ $toys->amount }}</p>
            <p class="card-text">Price: {{ $toys->price }}</p>
            <p class="card-text">Brand: {{ $toys->brand }}</p>
        </div>
    </div>
</div>

@endsection
