@extends('categories.LayoutCategory')
@section('product')
<div class="btn-toolbar mb-2 mb-md-0">
        <div class="card-body">
            <form method="" action="#">
                <div class="form-group">
                    <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" name="product_name" />
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
                    <input type="text" class="form-control" name="product_price" />
                </div>
                <div class="form-group">
                    <label for="quantity">Product Quantity:</label>
                    <input type="text" class="form-control" name="product_qty" />
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
