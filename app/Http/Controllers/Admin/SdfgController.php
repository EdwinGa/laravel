<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Sdfg;
use App\Http\Requests\CreateSdfgRequest;
use App\Http\Requests\UpdateSdfgRequest;
use Illuminate\Http\Request;



class SdfgController extends Controller {

	/**
	 * Display a listing of sdfg
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $sdfg = Sdfg::all();

		return view('admin.sdfg.index', compact('sdfg'));
	}

	/**
	 * Show the form for creating a new sdfg
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.sdfg.create');
	}

	/**
	 * Store a newly created sdfg in storage.
	 *
     * @param CreateSdfgRequest|Request $request
	 */
	public function store(CreateSdfgRequest $request)
	{
	    
		Sdfg::create($request->all());

		return redirect()->route('admin.sdfg.index');
	}

	/**
	 * Show the form for editing the specified sdfg.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$sdfg = Sdfg::find($id);
	    
	    
		return view('admin.sdfg.edit', compact('sdfg'));
	}

	/**
	 * Update the specified sdfg in storage.
     * @param UpdateSdfgRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSdfgRequest $request)
	{
		$sdfg = Sdfg::findOrFail($id);

        

		$sdfg->update($request->all());

		return redirect()->route('admin.sdfg.index');
	}

	/**
	 * Remove the specified sdfg from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Sdfg::destroy($id);

		return redirect()->route('admin.sdfg.index');
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
            Sdfg::destroy($toDelete);
        } else {
            Sdfg::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.sdfg.index');
    }

}
