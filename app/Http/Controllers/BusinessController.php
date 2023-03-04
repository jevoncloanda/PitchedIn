<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    // public function getCreateStudent()
    // {
    //     return view('create');
    // }

    // public function createStudent(StudentRequest $request)
    // {
    //     Student::create([
    //         'name' => $request->name,
    //         'NIM' => $request->NIM,
    //         'birth' => $request->birth,
    //         'age' => $request->age,
    //         'class' => $request->class,
    //     ]);
    //     return redirect(route('getStudents'));
    // }

    // public function getStudents()
    // {
    //     $students = Student::all();
    //     return view('view', ['studentz' => $students]);
    // }

    // public function getStudentById($id)
    // {
    //     $student = Student::find($id);
    //     return view('update', ['student' => $student]);
    // }

    // public function updateStudent(StudentRequest $request, $id)
    // {
    //     $student = Student::find($id);
    //     $student->update([
    //         'name' => $request->name,
    //         'NIM' => $request->NIM,
    //         'birth' => $request->birth,
    //         'age' => $request->age,
    //         'class' => $request->class,
    //     ]);
    //     return redirect(route('getStudents'));
    // }

    // public function deleteStudent($id)
    // {
    //     Student::destroy($id);
    //     return redirect(route('getStudents'));
    // }

    // public function getHomePage()
    // {
    //     return view('welcome2');
    // }

    // public function searchStudents()
    // {
    //     $search_text = $_GET['query'];
    //     $students = Student::where('name', 'LIKE', '%' . $search_text . '%')->orWhere('NIM', 'LIKE', '%' . $search_text . '%')->get();

    //     return view('search', ['studentz' => $students]);
    // }
}
