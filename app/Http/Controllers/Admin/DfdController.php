<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Dfd;
use App\Http\Requests\CreateDfdRequest;
use App\Http\Requests\UpdateDfdRequest;
use Illuminate\Http\Request;



class DfdController extends Controller {

	/**
	 * Display a listing of dfd
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $dfd = Dfd::all();

		return view('admin.dfd.index', compact('dfd'));
	}

	/**
	 * Show the form for creating a new dfd
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.dfd.create');
	}

	/**
	 * Store a newly created dfd in storage.
	 *
     * @param CreateDfdRequest|Request $request
	 */
	public function store(CreateDfdRequest $request)
	{
	    
		Dfd::create($request->all());

		return redirect()->route('admin.dfd.index');
	}

	/**
	 * Show the form for editing the specified dfd.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$dfd = Dfd::find($id);
	    
	    
		return view('admin.dfd.edit', compact('dfd'));
	}

	/**
	 * Update the specified dfd in storage.
     * @param UpdateDfdRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDfdRequest $request)
	{
		$dfd = Dfd::findOrFail($id);

        

		$dfd->update($request->all());

		return redirect()->route('admin.dfd.index');
	}

	/**
	 * Remove the specified dfd from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Dfd::destroy($id);

		return redirect()->route('admin.dfd.index');
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
            Dfd::destroy($toDelete);
        } else {
            Dfd::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.dfd.index');
    }

}
