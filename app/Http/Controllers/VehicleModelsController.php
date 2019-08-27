<?php

namespace App\Http\Controllers;

use App\VehicleModel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVehicleModelRequest;

class VehicleModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$vehiclemodels = VehicleModel::all();
        $vehiclemodels = VehicleModel::paginate(5);
		return view('vehiclemodels.index', compact('vehiclemodels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiclemodels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleModelRequest $request)
    {
        VehicleModel::create($request->all());
        return redirect()->route('vehiclemodels.index')->with(['message' => 'Model added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$this->authorize('update', Author::class);
        $vehiclemodel = VehicleModel::findOrFail($id);
        return view('vehiclemodels.edit', compact('vehiclemodel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVehicleModelRequest $request, $id)
    {
        $vehiclemodel = VehicleModel::findOrFail($id);
        $vehiclemodel->update($request->all());
        return redirect()->route('vehiclemodels.index')->with(['message' => 'Model updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiclemodel = VehicleModel::findOrFail($id);
        $vehiclemodel->delete();
        return redirect()->route('vehiclemodels.index')->with(['message' => 'Model deleted successfully']);
    }
}
