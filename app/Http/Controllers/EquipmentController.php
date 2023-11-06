<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Officer;
use Illuminate\Http\Request;

/**
 * Class EquipmentController
 * @package App\Http\Controllers
 */
class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment_all = Equipment::paginate();

        return view('equipment.index', compact('equipment_all'))
            ->with('i', (request()->input('page', 1) - 1) * $equipment_all->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipment = new Equipment();
        $officers = Officer::all();

        return view('equipment.create', compact('equipment', 'officers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Equipment::$rules);

        $equipment = Equipment::create($request->all());

        return redirect()->route('equipment.index')
            ->with('success', 'Equipamiento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipment = Equipment::find($id);

        return view('equipment.show', compact('equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = Equipment::find($id);
        $officers = Officer::all();

        return view('equipment.edit', compact('equipment', 'officers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Equipment $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        request()->validate(Equipment::$rules);

        $equipment->update($request->all());

        return redirect()->route('equipment.index')
            ->with('success', 'Equipamiento editado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $equipment = Equipment::find($id)->delete();

        return redirect()->route('equipment.index')
            ->with('success', 'Equipamiento eliminado exitosamente');
    }
}
