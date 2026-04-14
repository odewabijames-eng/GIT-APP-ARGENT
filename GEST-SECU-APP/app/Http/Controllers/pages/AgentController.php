<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // afficher la liste des agents
       /*    $agents = Agent::all();
             return view('pages.agents.index' , compact('agents') );*/
                return view('pages.agents.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // afficher le formulaire de création d'un agent
        return view('pages.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // valider les données du formulaire
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //afficher les détails d'un agent
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // afficher le formulaire d'édition d'un agent
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //mettre à jour les données d'un agent dans la base de données (après validation)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //supprimer un agent de la base de données
    }
}
