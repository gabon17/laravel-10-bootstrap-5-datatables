<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\Formateurs;
use Illuminate\Http\Request;

class FormateurControllerOld extends Controller
{

public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
{
    $formateurs = Formateurs::all();

    return view('liste-formateur')
        ->with('formateurs', $formateurs);
}


    public function create()
    {
        return view('formateurs.create');
    }

    public function store(Request $request)
    {

        $formateur = new Formateurs();
        $formateur->nom = $request->input('nom');
        $formateur->prenom = $request->input('prenom');
        $formateur->mail = $request->input('mail');
        $formateur->tel = $request->input('tel');

        $formateur->save();

        return redirect()->route('formateurs.index')->with('success', 'Formateur ajouté avec succès!');
    }

    public function edit($id)
    {
        $formateur = Formateurs::find($id);
        return view('formateurs.edit', compact('formateur'));
    }

    public function update(Request $request, $id)
    {

        $formateur = Formateurs::find($id);
        $formateur->nom = $request->input('nom');
        $formateur->prenom = $request->input('prenom');
        $formateur->mail = $request->input('mail');
        $formateur->tel = $request->input('tel');
        $formateur->save();

        return redirect()->route('formateurs.index')->with('success', 'Formateur mis à jour avec succès!');
    }

    public function destroy($id)
    {
        $formateur = Formateurs::find($id);
        $formateur->delete();

        return redirect()->route('formateurs.index')->with('success', 'Formateur supprimé avec succès!');
    }
}
