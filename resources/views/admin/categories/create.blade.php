@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <h3 class="text-center">Create new category</h3>
                <form method="post"  action="{{route('admin.categories.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                        <label class="form-label" class="form-control mb-3">category name</label>
                        <input type="text" name="name" class="form-control mb-3" value="{{ old('name') }}">
                    </div>

                    <input type="submit" value="Create new category" class="btn btn-success w-100">
                </form>
@endsection

