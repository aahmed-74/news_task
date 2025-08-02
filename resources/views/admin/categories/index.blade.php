@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6-fluid" >
                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                    Category list
                    <a href="{{route('admin.categories.create')}}" class="btn btn-success">Add category</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <h4 class="alert alert-success">{{session('success')}}</h4>
                        @endif               
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>name</th>
                                <th>operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href={{route('admin.categories.show',$category->id)}} class="btn btn-success">
                                            Show
                                        </a>
                                        <a href="{{ route('admin.categories.edit', $category->id) }}"  class="btn btn-primary">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" enctype="multipart/form-data" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
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



