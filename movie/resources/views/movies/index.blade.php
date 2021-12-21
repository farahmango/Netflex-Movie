@extends('movies.layout.master')
@section('content')
            <body>
                <div style="width: 50%; margin:50px auto">
                <a  style="float: right;" class="btn btn-dark" href="{{ route('movies.create') }}"> Add New Movie</a>
                <!-- <input style="float: right;" class="btn btn-primary" type="submit" value="Add New Movie" > -->
               <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Movie Image</th>
                        <th scope="col">Movie Name</th>
                        <th scope="col">Movie Desc</th>
                        <th scope="col">Movie Gener</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $val)
                    <tr>
                        <td>
                        <img src="{{ asset('uploads/'. $val->movie_img) }}" width="100px" height="70px" alt="Image">
                        </td>
                        <td>
                        {{ $val->movie_name }}
                        </td>
                        <td>
                        {{ $val->movie_desc }}
                        </td>
                        <td>
                        {{ $val->movie_gener}}
                        </td>
                        <td>
                            <div style="display: flex;">

                        <a style="width: 60px;height: 30px;margin-right:10px" class="btn btn-info" href="{{ route('movies.show',$val->id) }}" > Show</a>
                        <a style="width: 60px;height: 30px;margin-right:10px" class="btn btn-success" href="{{ route('movies.edit',$val->id) }}" > Edit</a>

                        <form action="{{ route('movies.destroy', $val->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <input style="width:60px;height: 30px;margin-right:10px" type="submit" class="btn btn-danger" value="delete">
                            </form>
                            </div>
                        </td>
                    </tr>


                    @endforeach
                    </tbody>
                    </table>

                </div>
            @endsection

<!--
            <input type="submit" class="btn btn-info" value="show">
                        <input type="submit" class="btn btn-success" value="edit">
                        <input type="submit" class="btn btn-danger" value="delete"> -->



