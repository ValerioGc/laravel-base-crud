<?php

namespace App\Http\Controllers;

use App\Comic;

use Illuminate\Validation\Rule;

use Illuminate\Http\Request;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listComics = Comic::all();
        return view('comicsPages.index', compact('listComics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comicsPages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:50|min:2',
                'description' => 'nullable',
                'thumb' => ['nullable', 'url'],
                'price' => 'numeric|max:4|min:2',
                'series' => 'required|max:10|min:5',
                'sale_date' => 'date',
                'type' => 'required|max:30|min:5',
            ]
        );
        $data = $request->all();
        $newComic= new Comic();
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comicsPages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic =  Comic::findOrFail($id);
        return view('comicsPages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        if ($comic) {


            $request->validate(
                [
                    'title' => 'required|max:50|min:2',
                    'description' => 'nullable',
                    'thumb' => ['nullable', 'url'],
                    'price' => 'numeric|max:4|min:2',
                    'series' => 'required|max:10|min:5',
                    'sale_date' => 'date',
                    'type' => 'required|max:30|min:5',
                ]
            );

            $data = $request->all();

            $comic->update($data);
            $comic->save();

            return redirect()->route('comics.edit', ['comic' => $comic -> id])->with('status', 'Dato inserito correttamente');

        } else {
            abort(404);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {

        if ($comic) {

            $comic->delete();

            return redirect()->route('comics.index');

        } else {
            abort(404);
        }
    }
}
