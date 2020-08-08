@extends('Master')
@section('Content')
    <div class="container">
        <div class="row mt-5 mb-3">
            <form action="{{Route('Add_Product')}}"  method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name Product</label>
                    <input type="text" class="form-control"  name="name"aria-describedby="emailHelp">
                </div>
                <p> Image Product</p>
                <input type="file" name="image" class=" mb-3">
                <div class="form-group">
                    <label>Price Product</label>
                    <input type="" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <p> Description Product</p>
                    <textarea placeholder="Type message.." name="description" required></textarea>
                </div>

                <button type="submit" class="btn btn-danger">Submit</button>
                @csrf
            </form>
        </div>
    </div>
@endsection
