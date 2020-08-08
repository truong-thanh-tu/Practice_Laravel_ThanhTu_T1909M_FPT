@extends('Master')
@section('Content')
    <div class="container">
        <div class="row mt-5 mb-3">
            <form action="{{route('Edit_Product',$editProduct->id)}}"  method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name Product</label>
                    <input type="text" class="form-control" value="{{$editProduct->name}}" name="name"aria-describedby="emailHelp">
                </div>
                <p> Image Product</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="imageOld" value="{{$editProduct->image}}" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        <img src="../Image/{{$editProduct->image}}" alt="thumbnail" class="img-thumbnail"
                             style="width: 200px">
                    </label>
                <input type="file" name="imageNew" class=" mb-3">
                <div class="form-group">
                    <label>Price Product</label>
                    <input type="" class="form-control" value="{{$editProduct->price}}" name="price">
                </div>
                <div class="form-group">
                    <p> Description Product</p>
                    <textarea placeholder="Type message.." name="description" value="{{$editProduct->image}}"required></textarea>
                </div>

                <button type="submit" class="btn btn-danger">Submit</button>
                @csrf
            </form>
        </div>
    </div>
@endsection
