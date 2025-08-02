@extends('layouts.app')
@section('content')

<div class="container m-auto">
    <div class="row">
        <div class="col-md-10">
            <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                    <label class="form-label">Headline</label>
                    <input type="text" name="title" class="form-control mb-3" value="{{ old('title', $news->title) }}">

                    <label class="form-label">Content</label>
                    <textarea name="content" class="form-control mb-3" rows="5">{{ old('content', $news->content) }}</textarea>

                    <label class="form-label">Categories</label>
                    <select name="categories[]" class="form-control  mb-3" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" 
                                @if ($news->categories->contains($category->id)) selected @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <input type="submit" value="Save Edit" class="btn btn-success w-100">
            </form>
            </div>
        </div>
    </div>
    
@endsection