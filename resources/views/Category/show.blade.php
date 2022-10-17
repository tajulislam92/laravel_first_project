@extends('master')
@section('title', 'Category-Index-page')
@section('content')
    <h1>{{ $category->name }} Category Details</h1>
    <nav class="navbar navbar-expand-lg bg-light category-index">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('catgory.index') }}">Show Category</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-10 m-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Sub Categories</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <ol>
                                @foreach ($subcategory as $subcat)
                                    <li>{{ $subcat->name }}</li>
                                @endforeach
                            </ol>
                        </td>
                        <td>{{ $category->created_at->diffForHumans() }}</td>
                        <td>{{ $category->updated_at->format('d-m-Y D H:i A') }}</td>
                        <td>
                            <a href="{{ route('catgory.edit', ['catgory' => $category->id]) }}"
                                class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('catgory.destroy', ['catgory' => $category->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
