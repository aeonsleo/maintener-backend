<?php

namespace App\Http\Controllers;

use App\MaintenanceTransaction;
use Illuminate\Http\Request;
use App\Maintenance;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MaintenanceTransactionRequest;
use Illuminate\Http\Response;

class MaintenanceTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Maintenance $maintenance)
    {
        if($maintenance->user_id === Auth::user()->id) {
           return $maintenance->transactions;
        }
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
    public function store(MaintenanceTransactionRequest $request, Maintenance $maintenance)
    {
        $maintenanceTransaction = new MaintenanceTransaction();
        $maintenanceTransaction->maintenance_id = $maintenance->id;
        $maintenanceTransaction->scheduled_date = $request->scheduled_date;
        $maintenanceTransaction->transaction_date = $request->transaction_date;
        $maintenanceTransaction->amount = $request->amount;
        $maintenanceTransaction->save();

        return response(
            [
                'data' => $maintenanceTransaction
            ], 
            Response::HTTP_CREATED
        );
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
