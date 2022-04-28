<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recupero dal database la tabella comics con metodo all
        $comics = Comic::all();

        // Ritorno la vista comics index e passo comics come parametro 
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Ritorno la vista comics create
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Salvo la richiesta del form nella varibile data con metedo all 
       $data = $request->all();

        // Validazione dati
        $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'nullable',
            'thumb' => 'required|url',
            'price' => 'required|min:1|max:7',
            'series' => 'required|min:5|max:100',
            'sale_date' => 'required|date',
        ]);

       // Creo un nuovo comic
       $comic = new Comic();

       // Imposto i valori dei campi del database con i valori del form usando il metdodo fill
       $comic->fill($data);

       // Salvo i dati
       $comic->save();

       // Redirigo la rotta comics show, come parametro passo comic
       return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // Ritorno la vista comics show e passo come parametro comic
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // Ritorno la vista comics edit e passo come parametro comic
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // Recupero la richiesta del form nella varibile data con metedo all 
        $data = $request->all();

        // Imposto i valori dei campi del database con i valori del form usando il metdodo update
        $comic->update($data);

        // Redirigo la rotta a comics show passando come parametro comic
        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // Usando il metodo delete, elimino il comic selezionato
        $comic->delete();

        // Redirigo la rotta a comics index
        return redirect()->route('comics.index');
    }
}
