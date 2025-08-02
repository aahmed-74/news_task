@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-light">
                  Details of <span class="btn btn-primary">{{$item->id}}</span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>name</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{$category->id}}</td>
                                    
                                    <td>
                                        <a href={{route('admin.categories.index')}} class="btn btn-success">
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