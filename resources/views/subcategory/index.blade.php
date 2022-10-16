@extends('master')
@section('title', 'Subcategory-Index-page')
@section('content')
<nav class="navbar navbar-expand-lg bg-light subcategory-index">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('subcatgory.create') }}">Create Sub Category</a>
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
        <th scope="col"> Category Name</th>
        <th scope="col">Sub Category Name</th>
        <th scope="col">Created</th>
        <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($subcategories as $subcategory)
        <tr>
            <th scope="row">{{ $subcategory->id }}</th>
            <td>{{ $subcategory->category->name }}</td>
            <td>{{ $subcategory->name }}</td>
            <td>{{ $subcategory->created_at->diffForHumans() }}</td>
<td>
<a href="{{ route('subcatgory.edit',['subcatgory'=>$subcategory->id]) }}" class="btn btn-info">Edit</a>
</td>
            </tr>
        @endforeach

        </tbody>
        </table>
</div>
</div>
@endsection
