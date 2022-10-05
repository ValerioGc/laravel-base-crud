<?php

namespace App\Http\Controllers;

use App\Comic;

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
                'price' => 'required|numeric|max:6',
                'series' => 'required|max:20|min:5',
                'sale_date' => 'required|date',
                'type' => 'required|max:30|min:5',
            ],
            [
              'title.required' => 'Inserisci il titolo',
              'title.max' => 'Il titolo deve contenere massimo 50 caratteri',
              'title.min' => 'Il titolo deve contenere minimo 2 caratteri',

              'thumb.url' => 'Inserisci il link correttamente',

              'price.required' => 'Inserisci il prezzo',
              'price.max' => 'Il prezzo deve contenere massimo 6 cifre',

              'series.required' => 'Inserisci la serie',
              'series.max' => 'La serie deve contenere massimo 20 caratteri',
              'series.min' => 'La serie deve contenere minimo 5 caratteri',

              'sale_date.required' => 'Inserisci la data',
              'sale_date.date' => 'Inserisci la data correttamente',

              'type.required' => 'Inserisci il tipo',
              'type.max' => 'Il tipo deve contenere massimo 30 caratteri',
              'type.min' => 'Il tipo deve contenere minimo 5 caratteri',
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


        $request->validate(
            [
                [
                    'title' => 'required|max:50|min:2',
                    'description' => 'nullable',
                    'thumb' => ['nullable', 'url'],
                    'price' => 'required|numeric|max:6',
                    'series' => 'required|max:20|min:5',
                    'sale_date' => 'required|date',
                    'type' => 'required|max:30|min:5',
                ],
                [
                    'title.required' => 'Inserisci il titolo',
                    'title.max' => 'Il titolo deve contenere massimo 50 caratteri',
                    'title.min' => 'Il titolo deve contenere minimo 2 caratteri',

                    'thumb.url' => 'Inserisci il link correttamente',

                    'price.required' => 'Inserisci il prezzo',
                    'price.max' => 'Il prezzo deve contenere massimo 6 cifre',

                    'series.required' => 'Inserisci la serie',
                    'series.max' => 'La serie deve contenere massimo 20 caratteri',
                    'series.min' => 'La serie deve contenere minimo 5 caratteri',

                    'sale_date.required' => 'Inserisci la data',
                    'sale_date.date' => 'Inserisci la data correttamente',

                    'type.required' => 'Inserisci il tipo',
                    'type.max' => 'Il tipo deve contenere massimo 30 caratteri',
                    'type.min' => 'Il tipo deve contenere minimo 5 caratteri',
                ]
            ]
        );

        $data = $request->all();

        $comic->update($data);
        $comic->save();

        return redirect()->route('comics.edit', ['comic' => $comic -> id])->with('status', 'Dato inserito correttamente');

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
