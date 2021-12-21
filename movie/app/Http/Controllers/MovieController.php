<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        return view('movies.home');
    }


    public function index()
     {
        $movies = movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $data = $request->validate([
            'movie_name' => 'required',
            'movie_desc' => 'required',
            'movie_gener' => 'required',
            'movie_img' => 'required',

     ]);
            $input = $request->all();

        if ($image = $request->file('uploads')) {
            $destinationPath = 'uploads/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        movie::create($data);

        return redirect()->route('movies.index')->with('success', 'movie has been added!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $movie)
    {
        return view('movies.show', ['movie' =>  $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movie $movie)
    {
        return view('movies.update', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, movie $movie)
    {
        $request->validate([
            'movie_name' => 'required',
            'movie_desc' => 'required',
            'movie_gener' => 'required',
            'movie_img' => 'required'
        ]);
        $movie->movie_name = $request->movie_name;
        $movie->movie_desc = $request->movie_desc;
        $movie->movie_gener = $request->movie_gener;
        $movie->movie_img = $request->movie_img;

        $movie->save();
        return redirect()->route('movies.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(movie $movie)
    {
        $movie->delete();
        return back();
    }
}
