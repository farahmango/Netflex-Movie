@extends('movies.layout.master')
@section('content')
                <body>
                <div style="width: 30%; margin:80px auto" class="bg-dark text-white rounded p-3">
                <form action="{{ route('movies.update', $movie->id) }}" method="POST">
                    @csrf
                    @method('put')
                <div class="mb-3">
                    <label  class="form-label">Movie Name</label>
                    <input name="movie_name" type="text" class="form-control" value="{{ $movie->movie_name }}">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Movie Desc</label>
                    <input name='movie_desc' type="text" class="form-control" value="{{ $movie->movie_desc }}" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Movie Gener</label>
                    <input name="movie_gener" type="text" class="form-control" value="{{ $movie->movie_gener }}" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Movie Image</label>
                    <input name="movie_img" type="file" class="form-control" value="{{ $movie->movie_img }}" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                    </div>
               @endsection



