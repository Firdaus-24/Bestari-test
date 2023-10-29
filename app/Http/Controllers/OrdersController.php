<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('orders')
            ->select('orders.*', 'customers.*', 'shipments.order_id', 'shipments.code AS scode', 'shipments.status')
            ->leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
            ->leftJoin('shipments', 'orders.id', '=', 'shipments.order_id')
            ->where('shipments.status', '=', 'sent')
            ->get();
        return view('point1.orders', ['title' => 'Orders', 'data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        //
    }

    public function send(Orders $orders)
    {

        $data = DB::table('orders')
            ->select('orders.*', 'customers.*', 'shipments.order_id', 'shipments.code AS scode', 'shipments.status', 'shipments.created_at as shipmentcreated')
            ->leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
            ->leftJoin('shipments', 'orders.id', '=', 'shipments.order_id')
            ->where('customers.address', '=', 'Bekasi')
            ->whereIn('shipments.status', ['sent', 'cancel'])
            ->whereBetween('shipments.created_at', ['2022-01-01', '2022-04-30']) // Note the date range.
            ->get();
        return view('point1.send', ['title' => 'send', 'data' => $data]);
    }
}
