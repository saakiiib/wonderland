<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function manageVehicles()
    {
        $vehicles = DB::table('vehicles')->get();
        return view('vehicle.manage_vehicles', compact('vehicles'));
    }

    public function addVehicle()
    {
        return view('vehicle.add_vehicle');
    }

    public function storeVehicle(Request $request)
    {
        $validatedData = $request->validate([
            'vehicle_number' => 'required|string|max:255',
            'vehicle_type' => 'required|string',
        ]);

        DB::table('vehicles')->insert([
            'vehicle_number' => $validatedData['vehicle_number'],
            'vehicle_type' => $validatedData['vehicle_type'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('manage-vehicles')->with('success', 'Vehicle added successfully');
    }

    public function editVehicle($id)
    {
        $vehicle = DB::table('vehicles')->where('id', $id)->first();
        return view('vehicle.edit_vehicle', ['vehicle' => $vehicle]);
    }

    public function updateVehicle(Request $request, $id)
    {
        $validatedData = $request->validate([
            'vehicle_number' => 'required|string|max:255',
            'vehicle_type' => 'required|string',
        ]);

        DB::table('vehicles')->where('id', $id)->update([
            'vehicle_number' => $validatedData['vehicle_number'],
            'vehicle_type' => $validatedData['vehicle_type'],
        ]);

        return redirect()->route('manage-vehicles')->with('success', 'Vehicle updated successfully');
    }

    public function deleteVehicle($id)
    {
        DB::table('vehicles')->where('id', $id)->delete();

        return redirect()->route('manage-vehicles')->with('success', 'Vehicle deleted successfully');
    }
}
