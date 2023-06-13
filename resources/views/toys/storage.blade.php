@extends('toys.layout')
@section('content')
    <div class="container">
        <div class="row p-5">
 
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>Toy Information</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('addtoy') }}" class="btn btn-primary btn-sm" title="Add New Toy">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Toy
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>TOY ID</th>
                                        <th>NAME</th>
                                        <th>AMOUNT</th>
                                        <th>PRICE</th>
                                        <th>BRAND</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($toys as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->brand }}</td>
 
                                        <td>
                                            <a href="{{ route('showtoy', $item->id) }}" title="View Toy"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('edits', $item->id) }}" title="Edit Toy"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ route('delete', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Toy" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection