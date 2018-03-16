<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;
use App\Person;
use Image;
class SponsorController extends Controller
{
    public function save(Request $request)
    {
    	if($request->hasFile('child_image')){
            $avatar = $request->file('child_image');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,400)->save( public_path('images/adoptpage/'.$filename) );
            $child_image = $filename;

	    	$child  = new Child;
	    	$child->child_fname = $request->child_fname;
	    	$child->child_lname = $request->child_lname;
	    	$child->child_age = $request->child_age;
	    	$child->child_location = $request->child_location;
	    	$child->child_desc = $request->child_desc;
	        $child->image = $child_image;
	        $child->is_adopted = 0;
	    	$child->save();
        }
        return redirect()->back();
    }

    public function viewAdopt(){
    	$children = Child::all()->where('is_adopted',0);
    	return view('containers.adopt',compact('children'));
    }

    public function saveAdopt(Request $request)
    {
        // return $request->all();
        Person::updateOrCreate(['id' => $request->id],$request->except('_token'));

        $child = Child::find($request->child_id);
        $child->is_adopted = 1;
        $child->save();
        return redirect()->back();
    }
}
