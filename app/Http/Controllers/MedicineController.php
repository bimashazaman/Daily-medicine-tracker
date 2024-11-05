<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{


    public function index()
    {
        $medicines = Medicine::where('user_id', auth()->id())->get();
        return view('dashboard', compact('medicines'));
    }

    public function create()
    {

        return view('medicines.create');
    }


    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'dose' => 'max:255',
           'frequency' => 'max:255'
        ]);

        $medicine = new Medicine();
        $medicine->name = $request->name;
        $medicine->dose = $request->dose;
        $medicine->frequency = $request->frequency;
        $medicine->route = $request->route;
        $medicine->indication = $request->indication;
        $medicine->start_date = $request->start_date;
        $medicine->end_date = $request->end_date;
        $medicine->prescriber = $request->prescriber;
        $medicine->pharmacy = $request->pharmacy;
        $medicine->notes = $request->notes;
        $medicine->user_id = auth()->id();

        $medicine->save();

        return redirect()->route('medicines.index');
    }

    public function show($id)
    {
        $medicine = Medicine::find($id);
        return view('medicines.show', compact('medicine'));
    }

    public function edit($id)
    {
        $medicine = Medicine::find($id);
        return view('medicines.edit', compact('medicine'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           'name' => 'required',
           'dose' => 'max:255',
           'frequency' => 'max:255'
        ]);

        $medicine = Medicine::find($id);
        $medicine->name = $request->name;
        $medicine->dose = $request->dose;
        $medicine->frequency = $request->frequency;
        $medicine->route = $request->route;
        $medicine->indication = $request->indication;
        $medicine->start_date = $request->start_date;
        $medicine->end_date = $request->end_date;
        $medicine->prescriber = $request->prescriber;
        $medicine->pharmacy = $request->pharmacy;
        $medicine->notes = $request->notes;

        $medicine->save();

        return redirect()->route('medicines.index');
    }

    public function destroy($id)
    {
        $medicine = Medicine::find($id);
        $medicine->delete();

        return redirect()->route('medicines.index');
    }


}
