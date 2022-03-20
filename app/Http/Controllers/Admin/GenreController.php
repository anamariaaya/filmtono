<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Genre;

use App\Http\Requests\GenreRequest;

class GenreController extends Controller
{
    public function list($genre)
    {
        return view('admin.genres.list', compact('genre'));
    }

    public function makeone($genre)
    {
        return view('admin.genres.makeone', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenreRequest $request, $thegenre)
    {
        $genresExists = Genre::where('name', $request->name)->where('type', $request->type)->get();

        if ($genresExists === null) {
            $genre = Genre::create($request->all());

            return redirect()->route('admin.genres.list', ['genre' => $thegenre])->with('info', 'Genre created successfully');
        } else {
            return redirect()->route('admin.genres.makeone', ['genre' => $request->type])->with('info', 'Genre already exists');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        return view('admin.genres.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        return view('admin.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GenreRequest $request, Genre $genre)
    {
        if ($request->name === $genre->name) {
            return redirect()->route('admin.genres.edit', compact('genre'))->with('info', 'You have not made any changes. Genre not updated');
        } else {
            $genresCount = Genre::where('name', $request->name)->where('type', $request->type)->count();

            if ($genresCount == 0) { // Not exists
                $genre->update($request->all());

                return redirect()->route('admin.genres.list', ['genre' => $genre->type])->with('info', 'Genre updated successfully');
            } else {
                return redirect()->route('admin.genres.edit', compact('genre'))->with('info', 'Genre already exists');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        $thegenre = $genre->type;
        $genre->delete();

        return redirect()->route('admin.genres.list', ['genre' => $thegenre])->with('info', 'Genre deleted successfully');
    }
}
