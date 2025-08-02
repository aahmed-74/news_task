@extends('layouts.app')
@section('content')

<div class="container m-auto">
    <div class="row">
        <div class="col-md-10">
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <label class="form-label">category name </label>
                <input type="text" name="name" class="form-control mb-3" value="{{ old('name', $category->name) }}">
                <input type="submit" value="Save Edit" class="btn btn-success w-100">
            </form>
        </div>
    </div>
</div>
    
@endsection
