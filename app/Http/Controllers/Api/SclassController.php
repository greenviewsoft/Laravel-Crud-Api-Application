<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sclass;

class SclassController extends Controller
{
    public function Index(){
        
        $sclass = Sclass::latest()->get();
        return response()->json($sclass);

    } // End Method


    public function Store(Request $request){

        $validateData =  $request->validate([
            'class_name' => 'required|unique:sclasses|max:25'
        ]);
    
        Sclass::create([
            'class_name' => $request->class_name,
        ]);
        return response('Student Class inserted Succesfully ');
    
    } // End Method


public function Edit($id){

    $sclass = Sclass::findORFail($id);
    return response()->json($sclass);

} // End Method



public function Update(Request $request, $id){
 
    Sclass::findORFail($id)->Update([

    'class_name' => $request->class_name,
    ]);
    return response('Student Class Updated  Succesfully ');


}// End Method



public function Delete($id){
 
    Sclass::findORFail($id)->delete();
    return response('Student Class Delete  Succesfully ');


}// End Method




}
