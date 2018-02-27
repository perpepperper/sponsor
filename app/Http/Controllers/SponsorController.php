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
        $birth_c = $this->imagesave($request->file('birth_c'));
        $marriage_c = $this->imagesave($request->file('marriage_c'));
        $health_c = $this->imagesave($request->file('health_c'));
        $nbi_c = $this->imagesave($request->file('nbi_c'));
        $itr = $this->imagesave($request->file('itr'));
        $statement_a = $this->imagesave($request->file('statement_a'));
        $character_r1 = $this->imagesave($request->file('character_r1'));
        $character_r2 = $this->imagesave($request->file('character_r2'));
        $character_r3 = $this->imagesave($request->file('character_r3'));

        $person = new Person;
        $person->birth_c = $birth_c;
        $person->marriage_c = $marriage_c;
        $person->health_c = $health_c;
        $person->nbi_c = $nbi_c;
        $person->itr = $itr;
        $person->statement_a = $statement_a;
        $person->character_r1 = $character_r1;
        $person->character_r2 = $character_r2;
        $person->character_r3 = $character_r3;
        $person->save();

        $child = Child::find($request->child_id);
        $child->is_adopted = 1;
        $child->save();
    }

    public function imagesave($avatar)
    {
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,400)->save( public_path('images/requirements/'.$filename) );
        return $filename;
    }
}
