@extends('movies.layout.master')
@section('content')
                <body>
                <!-- <div class="bg-dark text-black rounded p-3" style="width:25rem;margin:20px auto"> -->

                    <div style="width: 30%; margin:80px auto" class="bg-dark text-white rounded p-3">
                <form action="{{ route('movies.store') }}" method="POST" enctype=”multipart/form-data” >
                    @csrf
                <div class="mb-3">
                    <label  class="form-label">Movie Name</label>
                    <input name="movie_name" type="text" class="form-control"  >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Movie Desc</label>
                    <input name='movie_desc' type="text" class="form-control" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Movie Gener</label>
                    <input name="movie_gener" type="text" class="form-control" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Movie image</label>
                    <input name="movie_img" type="file" class="form-control" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                    </div>
                @endsection




