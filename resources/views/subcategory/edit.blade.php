@extends('master')
@section('title', 'SubCategory-Edit-page')
@section('content')
    <div class="row">
        <div class="col-8 m-auto my-3">
            <form action="{{ route('subcatgory.update', ['subcatgory' => $subcategory->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <select
                        class="form-select @error('category_id')
                            is-invalid
                        @enderror"
                        name="category_id">
                        <option>Select Category Name</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $subcategory->category_id) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="subcategory-name" class="form-lable">SubCategory Name</label>
                    <input type="text" name="subcategory_name" value="{{ $subcategory->name }}" id=""
                        class="form-control @error('subcategory_name')
                        is-invalid
                    @enderror">
                    @error('subcategory_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="isActive" name="is_active"
                            @if ($subcategory->is_active) checked @endif>
                        <label class="form-check-label" for="isActive">
                            Active/Inactive
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
