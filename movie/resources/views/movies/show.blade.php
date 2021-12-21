@extends('movies.layout.master')
@section('content')
                <body>
                <h1 style="text-align: center;color:red;">Movies Show</h1>

                 <hr/>
<!--
            <div class="bg-dark text-white rounded p-3">
                <h5 class="text-warning">Name</h5>
                <p class="fw-bold">{{ $movie->movie_name }}</p>

                <h5 class="text-warning">Price</h5>
                <p class="fw-bold"> {{ $movie->movie_desc }}</p>

                <h5 class="text-warning">Description</h5>
                <p class="fw-bold">{{ $movie->movie_gener }}</p>
            </div> -->

            <div class="bg-dark text-black rounded p-3" style="width:25rem;margin:20px auto">
                <div class="card" style="width: 18rem;margin:auto">
                <img src="{{ asset('uploads/'. $movie->movie_img) }}" width="60px" height="150px" alt="Image" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Name: <br> {{ $movie->movie_name }}</h5>
                    <h5 class="card-text">Description: <br>{{ $movie->movie_desc }}</h5>
                    <h5 class="card-text">Gener:<br> {{ $movie->movie_gener }}</h5>
                   </div>
                </div>
            </div>
                @endsection



