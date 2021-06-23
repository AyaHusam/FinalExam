@extends('categories.CreateCategory')
@section('cont')
<div class="card-body">
    <form method="" action=" action="{{url('/storeCategory')}}">
        @csrf
        <div class="form-group">
            <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ" >
            <label for="name">Category Name:</label>
            <input type="text" class="form-control" name="product_name"  />
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection
