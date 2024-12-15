<?php

namespace App\Http\Controllers;
use App\Models\doctor;
use Illuminate\Http\Request;

class doctorController extends Controller
{
   
    public function index()
    {
        $doctors = doctor::latest()->paginate(5);
      return view ('doctors.index',compact('doctors'))
      ->with('i',(request()->input('page',1)-1)*5);
    }
 
    
    public function create()
    {
        return view('doctors.create');
    }
 
  
    public function store(Request $request)
    {
        $request->validate([
            'FirstName'=>'required',
            'MiddleName'=>'required',
            'LastName'=>'required',
            'Sex'=>'required',
            'BirthDate'=>'required',
            'Address'=>'required',
            'ContactNumber'=>'required',
            'Specialization'=>'required',
        ]);
        doctor::create($request->all());
        return redirect()->route('doctors.index')
        ->with('success','doctor record is added successfully!');  
    }

    public function show(doctor $doctor)
    {
        
        return view('doctors.show',compact('doctor'));
    }
 
    
    public function edit(doctor $doctor)
    {
     
        return view('doctors.edit',compact('doctor'));
    }
 
  
    public function update(Request $request, doctor $doctor)
    {
        $request->validate([]); 
     
     $doctor->update($request->all());
     return redirect()->route('doctors.index')
     ->with('success','doctor record successfully updated');
    }

 
  
    public function destroy(doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctors.index')
        ->with('success','doctor record deleted');  
    }
}