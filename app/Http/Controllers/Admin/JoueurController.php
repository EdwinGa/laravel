<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Joueur;
use App\Http\Requests\CreateJoueurRequest;
use App\Http\Requests\UpdateJoueurRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class JoueurController extends Controller {

	/**
	 * Display a listing of joueur
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $joueur = Joueur::all();

		return view('admin.joueur.index', compact('joueur'));
	}

	/**
	 * Show the form for creating a new joueur
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
        $nb_monnaie = Joueur::$nb_monnaie;

	    return view('admin.joueur.create', compact("nb_monnaie"));
	}

	/**
	 * Store a newly created joueur in storage.
	 *
     * @param CreateJoueurRequest|Request $request
	 */
	public function store(CreateJoueurRequest $request)
	{
	    $request = $this->saveFiles($request);
		Joueur::create($request->all());

		return redirect()->route('admin.joueur.index');
	}

	/**
	 * Show the form for editing the specified joueur.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$joueur = Joueur::find($id);
	    
	    
        $nb_monnaie = Joueur::$nb_monnaie;

		return view('admin.joueur.edit', compact('joueur', "nb_monnaie"));
	}

	/**
	 * Update the specified joueur in storage.
     * @param UpdateJoueurRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateJoueurRequest $request)
	{
		$joueur = Joueur::findOrFail($id);

        $request = $this->saveFiles($request);

		$joueur->update($request->all());

		return redirect()->route('admin.joueur.index');
	}

	/**
	 * Remove the specified joueur from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Joueur::destroy($id);

		return redirect()->route('admin.joueur.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Joueur::destroy($toDelete);
        } else {
            Joueur::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.joueur.index');
    }

}
