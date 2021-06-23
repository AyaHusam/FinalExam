@extends('categories.appCategory')
@section('content')
<div class="btn-toolbar mb-2 mb-md-0">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th width="280px">Actions</th>
            </tr>
            <tr>
                @foreach ($categories as $category)
                <td>  {{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                 <a class="btn btn-info" href="updateCategory/{{$$category->id}}">Edit</a>
                 <button type="submit" class="btn btn-danger" href="deleteCateg/{{$category->id}}">Delete</button>
                </td>
            </tr>
            @endforeach
   </tbody>
    </table>
</div>
@endsection
