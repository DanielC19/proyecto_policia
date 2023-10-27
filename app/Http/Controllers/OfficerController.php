<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;

/**
 * Class OfficerController
 * @package App\Http\Controllers
 */
class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers = Officer::paginate();

        return view('officer.index', compact('officers'))
            ->with('i', (request()->input('page', 1) - 1) * $officers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $officer = new Officer();
        return view('officer.create', compact('officer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Officer::$rules);

        $officer = Officer::create($request->all());

        return redirect()->route('officers.index')
            ->with('success', 'Officer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $officer = Officer::find($id);

        return view('officer.show', compact('officer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $officer = Officer::find($id);

        return view('officer.edit', compact('officer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Officer $officer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Officer $officer)
    {
        request()->validate(Officer::$rules);

        $officer->update($request->all());

        return redirect()->route('officers.index')
            ->with('success', 'Officer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $officer = Officer::find($id)->delete();

        return redirect()->route('officers.index')
            ->with('success', 'Officer deleted successfully');
    }
}
