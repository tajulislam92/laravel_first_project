@extends('master')
@section('title', 'Category-create-page')
@section('content')
    <div class="row">
        <div class="col-8 m-auto">
            <form action="{{ route('catgory.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category-name" class="form-label">Category Name</label>
                    <input type="text" class="form-control @error('category_name') is-invalid @enderror"
                    id="category-name"
                    name="category_name"
                    value="{{ old('category_name') }}"
                    placeholder="Please provide Category nam">
                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="is_active" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Active/Inactive
                    </label>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
@endsection
