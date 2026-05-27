<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index () {
        $students = Student::all();
        return view ('student.index', compact('students'));
    }

    public function create () {
        return view ('student.create');
    }

    public function store (Request $request) {
        $student = new Student();
        $student->fname = $request->fname;
        $student->mname = $request->mname;
        $student->lname = $request->lname;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();

        return redirect()->route('students.index');
    }

    public function show (int $id) {
        $student = Student::find($id);
        return view ('student.show', compact('student'));
    }

    public function edit (int $id) {
        $student = Student::find($id);
        return view ('student.edit', compact('student'));
    }

    public function update (Request $request, int $id) {
        $student = Student::find($id);
        $student->fname = $request->fname;
        $student->mname = $request->mname;
        $student->lname = $request->lname;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();

        return redirect()->route('students.index');
    }

    public function destroy (int $id) {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('students.index');
    }
}
