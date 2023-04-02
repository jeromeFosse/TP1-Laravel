<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiant = Etudiant::orderBy('nom', 'asc')
                     ->paginate(10);

        return view('etudiant.index', ['etudiants' => $etudiant]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $etudiant = Etudiant::create([
            'nom'               => $request->nom,
            'adresse'           => $request->adresse,
            'telephone'         => $request->telephone,
            'courriel'          => $request->courriel,
            'date_naissance'    => $request->date_naissance,
            'ville_id'          => $request->ville_id,
        ]);

        return redirect(route('etudiant.index', $etudiant->id))->withSuccess('L\'étudiant est ajouté'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiant.show', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        return view('etudiant.edit', ['etudiant' => $etudiant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'nom'               => $request->nom,
            'adresse'           => $request->adresse,
            'telephone'         => $request->telephone,
            'courriel'          => $request->courriel,
            'date_naissance'    => $request->date_naissance,
            'ville_id'          => $request->ville_id,
        ]);

        return redirect(route('etudiant.show', $etudiant->id))->withSuccess('Étudiant modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect(route('etudiant.index'))->withSuccess('Étudiant supprimé');
    }
}
