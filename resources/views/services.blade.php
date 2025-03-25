@extends('master')

@section('title', 'Services Page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> @for ($i = 0; $i <count($services); $i++) 
                    {{$services[$i]}} <br>
                    
                @endfor </h1>
            </div>
        </div>
    </div>
@endsection