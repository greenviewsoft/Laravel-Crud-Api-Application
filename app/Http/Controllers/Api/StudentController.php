<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{

    public function StudentIndex(){

        $student = Student::latest()->get();
        return response()->json($student);


    } // End Method


    public function StudentStore(Request $request){


        $validateData =  $request->validate([
            'name' => 'required|unique:students|max:25',
            'email' => 'required|unique:students|max:25',
        ]);
    
        Student::create([
            'class_id' => $request->class_id,
            'section_id' => $request->section_id,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $request->photo,
            'Gender' => $request->Gender,
            'created_at' => Carbon::now(),
        ]);
        return response('Student  inserted Successfully ');
        
    } // End Method


    public function StudentEdit($id){

    $student = Student::findORFail($id);
    return response()->json($student);

}// ENd  Method




public function StudentUpdate(Request $request, $id){

    Student::findORFail($id)->Update([

            'class_id' => $request->class_id,
            'section_id' => $request->section_id,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $request->photo,
            'Gender' => $request->Gender,

    ]);
    return response('Student  Updated  Succesfully ');


}// End method



public function StudentDelete($id){

    Student::findORFail($id)->delete();
    return response('Student  Delete  Successfully ');

} // end method 




}