@extends('master')

@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$page_name}}</h1>
                <p> {{$page_title}} </p>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Joined Date</th>
          </tr>
        </thead>
        <tbody>
@foreach ( $users as $user )
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone_number}}</td>
            <td>{{$user->created_at}}</td>
          </tr>

@endforeach


        </tbody>
      </table>
@endsection
