@extends('categories.CreateCategory')
@section('cont')
<div class="card-body">
    <form method="" action="#">
        <div class="form-group">
            <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ" action="{{url('updateCategory/'.$category->id)}}">
            <label for="name">Category Name:</label>
            <input type="text" class="form-control" name="product_name"  value="{{$category->NameCategory}}"/>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
