<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use Carbon\Carbon;

class SectionController extends Controller
{
    public function SectionIndex(){

        $section = Section::latest()->get();
        return response()->json($section);


    }
// End Method
    public function SectionStore(Request $request){

        $validateData =  $request->validate([
            'section_name' => 'required|unique:sections|max:25'
        ]);
    
        Section::create([
            'class_id' => $request->class_id,
            'section_name' => $request->section_name,
            'created_at' => Carbon::now(),
        ]);
        return response('Student Section inserted Successfully ');
        
    } // End Method



public function SectionEdit($id) {

    $section = Section::findORFail($id);
    return response()->json($section);

} //End Method




public function SectionUpdate(Request $request, $id){
 
    Section::findORFail($id)->Update([

        'class_id' => $request->class_id,
        'section_name' => $request->section_name,
    ]);
    return response('Student Sections Updated  Succesfully ');


}// End Method


public function SectionDelete($id){

    Section::findORFail($id)->delete();
    return response('Student Sections Delete  Successfully ');


}//end method


}
