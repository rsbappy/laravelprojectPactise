@extends('master')

@section('title', 'Category-Crate-Page')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">


            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category-name" class="form-label">Category Name</label>
                    <input type="text" class="form-control
                    @error('category_name') is-invalid @enderror"
                    id="category-name" name="category_name" placeholder="Please Provide Category Name" value="{{old('category_name')}}">
                    @error('category_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox"  name="is_active" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Ative/Inactive
                    </label>
                  </div>

                  <button type="submit" class="btn btn-danger"> submit</button>
            </form>



            <div class="col-8  m-auto">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Created </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at }}</td>

                          </tr>

                        @endforeach

                    </tbody>
                  </table>
            </div>




@endsection
