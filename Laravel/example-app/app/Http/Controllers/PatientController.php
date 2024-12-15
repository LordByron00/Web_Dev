<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $patients = Patient::latest()->paginate(5);
        return view('patients.index', compact('patients'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'FirstName'=>'required',
            'MiddleName'=>'required',
            'LastName'=>'required',
            'Sex'=>'required',
            'BirthDate'=>'required',
            'Address'=>'required',
            'ContactNumber'=>'required',
        ]);
        Patient::create($request->all());
        return redirect()->route('patients.index')
        ->with('success','Patient record is added successfully!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
        return view('patients.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
        return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
        $request->validate([]); 
     
        $patient->update($request->all());
        return redirect()->route('patients.index')
        ->with('success','Patient record successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
        $patient->delete();
        return redirect()->route('patients.index')
        ->with('success','Patient record deleted'); 
    }
}
