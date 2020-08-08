@extends('Master')
@section('Content')
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">NAME</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">DESCRITPTION</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>

                </tr>
                </thead>
                <tbody>
                @foreach( $listProduct as $lp)
                    <tr>
                        <th scope="row">{{ $lp->id }}</th>
                        <td><img src="Image/{{$lp->image}}" alt="thumbnail" class="img-thumbnail"
                                 style="width: 200px"></td>
                        <td>{{ $lp->name }}</td>
                        <td>{{ $lp->price }}$</td>
                        <td>{{ $lp->description }}</td>
                        <td><a class="btn btn-danger" href="{{ Route('Edit',$lp->id)}}" role="button">Edit</a></td>
                        <td><a class="btn btn-danger" href="{{ Route('Delete',$lp->id)}}" role="button">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
