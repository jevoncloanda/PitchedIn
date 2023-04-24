<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function getCreateBusiness()
    {
        return view('create.create');
    }

    public function createBusiness(Request $request)
    {
        $image = NULL;
        $attachment = NULL;

        if($request->file('image'))
        {
            $image = $request->file('image')->store('business-images');
        }

        if($request->file('attachment'))
        {
            $attachment = $request->file('attachment')->store('business-attachment');
        }

        Business::create([
            'fullname' => $request->fullname,
            'business_name' => $request->business_name,
            'type1' => $request->type1,
            'type2' => $request->type2,
            'caption' => $request->caption,
            'image' => $image,
            'attachment' => $attachment
        ]);
        return redirect(route('getLandingPage'));
    }

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
