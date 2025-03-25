@extends('master')

@section('title', 'Sub-Category-index-Page')
@section('content')

<div class="row">


    <div class="d-flex justify-content-end">
        <a href="{{ route('subcategory.create') }}" class="btn btn-success"> Create Sub Category</a>
    </div>
    <div class="col-8  m-auto">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">SubCategory Namme</th>
                <th scope="col">Created </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($subcategories as $subcategory)
                <tr>
                    <th scope="row">{{ $subcategory->id }}</th>
                    <td>{{ $subcategory->category->name }}</td>
                    <td>{{ $subcategory->name }}</td>
                    <td>{{ $subcategory->created_at->diffForHumans()}}</td>

                  </tr>

                @endforeach

            </tbody>
          </table>
    </div>
</div>


@endsection
