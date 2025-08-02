@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h3 class="text-center">Create new news</h3><div class="py-4">
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                    <label class="form-label" >The headline</label>
                    <input type="text" name="title" class="form-control mb-3" value="{{ old('title') }}">

                    <label class="form-label">news content</label>
                    <textarea name="content" class="form-control mb-3" rows="5">{{ old('content') }}</textarea>

                    <label class="form-label">categories</label>
                    <select name="categories[]" class="form-control mb-3" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                <input type="submit" value="Create new news" class="btn btn-success w-100">
            </form>
        </div>
    </div>
</div>
@endsection

