@extends('master')
@section('title', 'Category-Edit-page')
@section('content')
    <div class="row">
        <div class="col-8 m-auto">
            <form action="{{ route('catgory.update', ['catgory' => $category->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="category-name" class="form-label">Edit Category Name</label>
                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="category-name"
                        name="category_name" value="{{ $category->name }}" placeholder="Please provide Category name">
                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="is_active"
                        @if ($category->is_active) checked @endif id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Active/Inactive
                    </label>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
@endsection
