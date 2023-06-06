<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BusinessController extends Controller
{
    public function getCreateBusiness()
    {
        return view('create.create');
    }

    public function createBusiness(Request $request)
    {
        $user = Auth::user();
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
            'attachment' => $attachment,
            'user_id' => $user->id
        ]);
        return redirect(route('getBusinesses'));
    }

    public function getBusinesses()
    {
        $businesses = Business::all();
        $sorted_biz = $businesses->sortByDesc('created_at');
        $users = User::all();
        return view('explore', compact('sorted_biz', 'users'));
    }

    public function getBusinessById($id)
    {
        $business = Business::find($id);
        return view('exploreById', compact('business'));
    }

    public function searchBusinesses()
    {
        $search_text = $_GET['query'];
        $users = User::all();
        $businesses = Business::where('business_name', 'LIKE', '%' . $search_text . '%')
        ->orWhere('fullname', 'LIKE', '%' . $search_text . '%')
        ->orWhere('type1', 'LIKE', '%' . $search_text . '%')
        ->orWhere('type2', 'LIKE', '%' . $search_text . '%')
        ->orWhere('caption', 'LIKE', '%' . $search_text . '%')->get();

        $sorted_biz = $businesses->sortByDesc('created_at');

        return view('explore', compact('sorted_biz', 'users'));
    }

    public function downloadAttachmentById($id)
    {
        $business = Business::find($id);
        $file = public_path() . '/storage/' . $business->attachment ;
        return response()->download($file);
    }

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
}
