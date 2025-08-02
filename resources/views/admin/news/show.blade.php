@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-light">
                  Details of <span class="btn btn-primary">{{$news->id}}</span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Headline</th>
                                <th>content</th>
                                <th>Categories</th>
                                <th>operation</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{$news->title }}</td>
                                    <td>{{$news->content}}</td>
                                    <td>
                                        @foreach($news->categories as $cat)
                                            <span>{{ $cat->name }}</span>
                                        @endforeach
                                    </td>
                                    
                                    <td>
                                        <a href={{route('admin.news.index')}} class="btn btn-success">
                                            Home
                                        </a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
              </div>

        </div>
    </div>
</div>
    
@endsection