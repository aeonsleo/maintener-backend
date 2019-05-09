<?php

namespace App\Http\Controllers;

use App\MaintenanceTransaction;
use Illuminate\Http\Request;
use App\Maintenance;

class MaintenanceTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Maintenance $maintenance)
    {
        // dd($maintenance->transactions());
        return $maintenance->transactions;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MaintenanceTransaction  $maintenanceTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(MaintenanceTransaction $maintenanceTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MaintenanceTransaction  $maintenanceTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(MaintenanceTransaction $maintenanceTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MaintenanceTransaction  $maintenanceTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaintenanceTransaction $maintenanceTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MaintenanceTransaction  $maintenanceTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaintenanceTransaction $maintenanceTransaction)
    {
        //
    }
}
