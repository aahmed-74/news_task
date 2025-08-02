@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6-fluid" >
                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        News list
                    <a href="{{route('admin.news.create')}}" class="btn btn-success">Add category</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <h4 class="alert alert-success">{{session('success')}}</h4>
                        @endif  
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Headline</th>
                                <th>Content</th>
                                <th>Categories</th>
                                <th>operation</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($news as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{$item->content}}</td>
                                <td>
                                    @foreach($item->categories as $cat)
                                        <span>{{ $cat->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href={{route('admin.news.show',$item->id)}} class="btn btn-success">
                                        Show
                                    </a>
                                    <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                        <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" enctype="multipart/form-data" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    



