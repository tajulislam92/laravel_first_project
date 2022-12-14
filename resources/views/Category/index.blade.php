@extends('master')
@section('title', 'Category-Index-page')
@section('content')
    <nav class="navbar navbar-expand-lg bg-light category-index">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('catgory.create') }}">Create Category</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-8 m-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Created</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Show</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('catgory.edit', ['catgory' => $category->id]) }}"
                                    class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('catgory.show', ['catgory' => $category->id]) }}"
                                    class="btn btn-info">Show</a>
                            </td>
                            <td>
                                <form action="{{ route('catgory.destroy', ['catgory' => $category->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
