<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Actualite;
use App\Http\Requests\CreateActualiteRequest;
use App\Http\Requests\UpdateActualiteRequest;
use Illuminate\Http\Request;



class ActualiteController extends Controller {

	/**
	 * Display a listing of actualite
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $actualite = Actualite::all();

		return view('admin.actualite.index', compact('actualite'));
	}

	/**
	 * Show the form for creating a new actualite
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.actualite.create');
	}

	/**
	 * Store a newly created actualite in storage.
	 *
     * @param CreateActualiteRequest|Request $request
	 */
	public function store(CreateActualiteRequest $request)
	{
	    
		Actualite::create($request->all());

		return redirect()->route('admin.actualite.index');
	}

	/**
	 * Show the form for editing the specified actualite.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$actualite = Actualite::find($id);
	    
	    
		return view('admin.actualite.edit', compact('actualite'));
	}

	/**
	 * Update the specified actualite in storage.
     * @param UpdateActualiteRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateActualiteRequest $request)
	{
		$actualite = Actualite::findOrFail($id);

        

		$actualite->update($request->all());

		return redirect()->route('admin.actualite.index');
	}

	/**
	 * Remove the specified actualite from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Actualite::destroy($id);

		return redirect()->route('admin.actualite.index');
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
            Actualite::destroy($toDelete);
        } else {
            Actualite::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.actualite.index');
    }

}
