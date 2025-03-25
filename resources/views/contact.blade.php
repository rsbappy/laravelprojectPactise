@extends('master')
@section('title', 'Contact Page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Page</h1>
                @if (($product_count<=10))
                    <p> {{$product_count}} products not available </p>
                @else
                    <p> {{$product_count}} products available </p>
                    @endif
                

                    @switch($color)
                        @case('blue')
                            <p>Blue color is available</p>
                            @break

                        @case('red')
                            <p>Red color is available</p>
                            @break  
                        @case('green')
                            <p>Green color is available</p>
                            
                        @break
                       
                        @default
                        <p> Stock out</p>
                    @endswitch
                 
            </div>
        </div>
    </div>
@endsection