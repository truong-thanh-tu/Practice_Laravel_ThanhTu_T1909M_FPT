<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ Route('Search') }}" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-danger">Search</button>
                    <input type="text" class="form-control" name="name" placeholder="" aria-label="" aria-describedby="basic-addon1">
                </div>
                @csrf
            </form>
        </div>
        <div class="col">
            <a class="btn btn-danger" href="{{ Route('Add')}}" role="button">Add</a>
        </div>
    </div>
</div>
