<?php

namespace App\Http\Controllers;

use App\Models\parkings;
use App\Models\ParkingSlot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParkingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(parkings $parkings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(parkings $parkings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, parkings $parkings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(parkings $parkings)
    {
        //
    }
    public function checkAvailability()
    {
        $blocks = Parkings::all();

        return response()->json(['blocks' => $blocks]);
    }

    public function parkVehicle(Request $request)
    {
        $blockname = $request->input('block_name');

        $block = Parkings::where('name', $blockname)->first();

        if (!$block) {
            return response()->json(['message' => 'Blok tidak ditemukan'], 404);
        }

        if ($block->available_slots == 0) {
            return response()->json([
                'error' => true,
                'message' => 'Parking Penuh Bos',
            ], 500);
        }

        DB::beginTransaction();
        try {
            ParkingSlot::create([
                'block_id' => $block->id,
                'occupied' => true,
            ]);

            $block->available_slots--;
            $block->save();
            DB::commit();
            return response()->json(['message' => 'Kendaraan berhasil parkir'], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => true,
                'message' => 'Parking Gagal',
                'data' => $e->getMessage(),
            ], 500);
        }
    }

    public function exitVehicle(Request $request)
    {
        $blockName = $request->input('block_name');


        $query = DB::table("parkings as p")
            ->join("parking_slots as ps", "p.id", "=", "ps.block_id")
            ->select("p.*", "ps.*")
            ->where('p.name', $blockName)->first();
        // var_dump($query);
        if (!$query) {
            return response()->json(['message' => 'Slot parkir tidak ditemukan'], 404);
        }

        $slot = ParkingSlot::where('block_id', $query->block_id)
            ->where('occupied', true)
            ->first();

        if (!$slot) {
            return
                response()->json(['message' => 'Slot Kosong'], 400);
        }
        DB::beginTransaction();
        try {
            $slot->occupied = false;
            $slot->save();

            $updateSlots = parkings::find($query->block_id)->first();
            $updateSlots->available_slots++;
            $updateSlots->save();

            DB::commit();
            return response()->json(['message' => 'Kendaraan berhasil keluar']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => true,
                'message' => 'Parking Gagal',
                'data' => $e->getMessage(),
            ], 500);
        }
    }

    function blockName($blockname)
    {
        $blocks = Parkings::where('name', $blockname)->first();

        return response()->json(['blocks' => $blocks]);
    }
}
