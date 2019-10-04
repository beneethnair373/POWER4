<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sections;

class SectionsController extends Controller
{
    
    public function index()
    {
    	$subjects = Sections::all();
    	return view('sections.index')->with('sections', $subjects);
    }
    public function create()
    {
    	return view('sections.create');
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'is_active' => 'required',

            
        ]);
        
    	$sections = new Sections;
    	$sections->name = request()->name;
    	$sections->is_active = request()->is_active;
    	$sections->save();

    	return redirect('/sections');
    }
}
