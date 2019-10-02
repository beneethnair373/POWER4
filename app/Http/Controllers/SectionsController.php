<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sections;

class SectionsController extends Controller
{
    
    public function index()
    {
    	$sections = Sections::all();
    	return view('sections.index')->with('sections', $sections);
    }
    public function create()
    {
    	return view('teachers.create');
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'advisory_section' => 'required',

            
        ]);
        
    	$subject = new Subjects;
    	$subject->name = request()->name;
    	$subject->advisory_section = request()->advisory_section;
    	$subject->save();

    	return redirect('/subjects');
    }
}
