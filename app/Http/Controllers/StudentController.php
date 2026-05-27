<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index () {
        $students = Student::all();
        return view ('studentmngt.index', compact('students'));
    }

    public function create () {
        return view ('studentmngt.create');
    }
    
    public function store (Request $request) {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'dob' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('studentmngt.index')->with('status', 'Student Added Successfully');
    }

    public function show (int $id) {
        $student = Student::find($id);
        return view ('studentmngt.show', compact('student'));
    }

    public function edit (int $id) {
        $student = Student::find($id);
        return view ('studentmngt.edit', compact('student'));
    }
    
    public function update (Request $request, int $id) {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'dob' => 'required',
        ]);

        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->route('studentmngt.index')->with('status', 'Student Updated Successfully');
    }
    
    public function destroy (int $id) {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('studentmngt.index')->with('status', 'Student Deleted Successfully');
    }

}
