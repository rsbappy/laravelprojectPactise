@extends('master')

@section('title', 'Sub-Category-Crate-Page')
@section('content')

<div class="row">

    <div class="col-6 m-auto my-3">
        <div class="card p-3">
           <div class="card-body">
            <form action="{{ route('subcategory.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <select class="form-select @error('category_id') is-invalid
                    @enderror" name='category_id' aria-label="Default select example">
                        <option selected>Select Category</option>

                        @foreach ($categoies as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                        @endforeach

                    </select>
                    @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="subcategory-name" class="form-label"> SubCategory Name</label>
                    <input type="text" class="form-control
                    @error('subcategory_name') is-invalid
                    @enderror" id="name" name="subcategory_name">

                    @error('subcategory_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-check m-3">
                    <!-- Hidden input to send 0 if the checkbox is not checked -->

                    <!-- Checkbox input -->

                    <input class="form-check-input"  name="is_active"




                      type="checkbox" id="isActive" >
                    <label class="form-check-label" for="isActive">
                        Active/Inactive
                    </label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
           </div>
        </div>
    </div>
</div>
@endsection
