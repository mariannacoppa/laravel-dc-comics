<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRquest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'thumb' => 'max:255',
        //     'price' => 'required|max:20',
        //     'sale_date' => 'required|date',
        //     'type' => 'required|max:255'
        // ], [
        //     'title.required' => 'il titolo è obbligatorio',
        //     'title.max' => 'il titolo può essere lungo al massimo :max caratteri',
        //     'thumb.max' => 'il link all\'immagine può essere lungo al massimo :max caratteri', 
        //     'price.required' => 'il prezzo è obbligatorio',
        //     'price.max' => 'il prezzo può essere lungo al massimo :max caratteri',
        //     'sale_date.required' => 'la data è obbligatoria',
        //     'sale_date.date' => 'la data dev\'essere espressa in un formato valido',
        //     'type.required' => 'il tipo è obbligatorio',
        //     'type.max' => 'il tipo può essere lungo al massimo :max caratteri',   
        // ]);
        // recupero il contenuto della richiesta
        $form_data = $request->all();
        // creo una nuova istanza per ogni fumetto
        $new_comic = new Comic();

        $new_comic->fill($form_data);

        // $new_comic->title = $form_data['title'];
        // $new_comic->description = $form_data['description'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->price = $form_data['price'];
        // $new_comic->sale_date = $form_data['sale_date'];
        // $new_comic->type = $form_data['type'];
        // // creo una stringa col metodo implode
        // $new_comic->artists = $form_data['artists'];
        // $new_comic->writers = $form_data['writers'];

        $new_comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRquest $request, Comic $comic)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'thumb' => 'max:255',
        //     'price' => 'required|max:20',
        //     'sale_date' => 'required|date',
        //     'type' => 'required|max:255'
        // ]);
        
        $form_data = $request->validated();
        $comic->update($form_data);
        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
