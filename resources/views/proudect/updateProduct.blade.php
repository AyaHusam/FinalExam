@extends('categories.LayoutCategory')
@section('product')
<div class="btn-toolbar mb-2 mb-md-0">
        <div class="card-body">
            <form method="" action="{{url('update/'.$product->id)}}">
                <div class="form-group">
                    <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" name="product_name"  value="{{$product->name}}"/>
                </div>
                <div class="form-group">
                    <label for="price">Product Category :</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Category 1</option>
                        <option>Category 1</option>
                        <option>Category 1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Product Price :</label>
                    <input type="text" class="form-control" name="product_price"  value="{{$product->price}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Product Quantity:</label>
                    <input type="text" class="form-control" name="product_qty" value="{{$product->Quantity}}" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
