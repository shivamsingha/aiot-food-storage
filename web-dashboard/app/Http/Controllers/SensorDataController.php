<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSensorDataRequest;
use App\Http\Requests\UpdateSensorDataRequest;
use App\Models\SensorData;

class SensorDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSensorDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSensorDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SensorData  $sensorData
     * @return \Illuminate\Http\Response
     */
    public function show(SensorData $sensorData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SensorData  $sensorData
     * @return \Illuminate\Http\Response
     */
    public function edit(SensorData $sensorData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSensorDataRequest  $request
     * @param  \App\Models\SensorData  $sensorData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSensorDataRequest $request, SensorData $sensorData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SensorData  $sensorData
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensorData $sensorData)
    {
        //
    }
}
