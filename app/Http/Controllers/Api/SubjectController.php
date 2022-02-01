<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{

 public function Index(){

    $subject = Subject::latest()->get();
    return response()->json($subject);

 }

    public function Store(Request $request){

        $validateData =  $request->validate([
            'class_id' => 'required',
            'subject_name' => 'required|unique:subjects|max:25'
        ]);
    
        Subject::create([
            'class_id' => $request->class_id,
            'subject_name' => $request->subject_name,
            'subject_code' => $request->subject_code,
        ]);
        return response('Student subject inserted Successfully ');

    }// End  method 

    public function SubjectEdit($id){

        $subject = Subject::findORFail($id);
        return response()->json($subject);
    
    } // End Method
    
    

    public function SubjectUpdate(Request $request, $id){
 
        Subject::findORFail($id)->update([
    
        'class_id' => $request->class_id,
        'subject_name' => $request->subject_name,
        'subject_code' => $request->subject_code,
        ]);
        return response('Student Subject Updated  Succesfully ');
    
    
    }// End Method
    


    public function SubjectDelete($id){
 
        Subject::findORFail($id)->delete();
        return response('Student Subject Delete  Succesfully ');
    
    
    }// End Method


}
