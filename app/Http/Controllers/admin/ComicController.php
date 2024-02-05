<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validated($request);

        $data = $request->all();

        $comic = new Comic();

        $comic->fill($data);

        $comic->save();

        return redirect()->route('comics.index', $comic->id);
    }


    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validated($request);
        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.index', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index', $comic->id);
    }

    public function validated(Request $request)
    {


        $messages = [
            'title.required' => 'Il campo Titolo è obbligatorio.',
            'description.required' => 'Il campo Descrizione è obbligatorio.',
            'thumb.required' => 'Il campo Immagine è obbligatorio.',
            'thumb.url' => 'Il campo Immagine deve essere un URL valido.',
            'price.required' => 'Il campo Prezzo è obbligatorio.',
            'series.required' => 'Il campo Serie è obbligatorio.',
            'sale_date.required' => 'Il campo Data di vendita è obbligatorio.',
            'type.required' => 'Il campo Tipo è obbligatorio.',
            'artists.nullable' => 'Il campo Artisti deve essere vuoto o valido.',
            'writers.nullable' => 'Il campo Scrittori deve essere vuoto o valido.',
        ];
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required | url',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
            'artists' => 'nullable',
            'writers' => 'nullable',
        ], $messages);
    }
}
