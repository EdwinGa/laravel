<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Journal;
use App\Http\Requests\CreateJournalRequest;
use App\Http\Requests\UpdateJournalRequest;
use Illuminate\Http\Request;



class JournalController extends Controller {

	/**
	 * Display a listing of journal
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $journal = Journal::all();

		return view('admin.journal.index', compact('journal'));
	}

	/**
	 * Show the form for creating a new journal
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.journal.create');
	}

	/**
	 * Store a newly created journal in storage.
	 *
     * @param CreateJournalRequest|Request $request
	 */
	public function store(CreateJournalRequest $request)
	{
	    
		Journal::create($request->all());

		return redirect()->route('admin.journal.index');
	}

	/**
	 * Show the form for editing the specified journal.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$journal = Journal::find($id);
	    
	    
		return view('admin.journal.edit', compact('journal'));
	}

	/**
	 * Update the specified journal in storage.
     * @param UpdateJournalRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateJournalRequest $request)
	{
		$journal = Journal::findOrFail($id);

        

		$journal->update($request->all());

		return redirect()->route('admin.journal.index');
	}

	/**
	 * Remove the specified journal from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Journal::destroy($id);

		return redirect()->route('admin.journal.index');
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
            Journal::destroy($toDelete);
        } else {
            Journal::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.journal.index');
    }

}
