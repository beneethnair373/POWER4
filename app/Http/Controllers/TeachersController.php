<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;
use App\Sections;

class TeachersController extends Controller
{
    
    public function index()
    {
    	$teachers = Teachers::all();
    	return view('teachers.index')->with('teachers', $teachers);
    }
    public function create()
    {
    	return view('teachers.create');
    }
    public function edit(Teachers $teacher)
    {
       $section = Sections::all();
       return view('teachers,edit',compact('teacher', 'sections'));
       //dd($teacher);
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'advisory_section' => 'required',

            
        ]);
        
    	$teacher = new Teachers;
    	$teacher->name = request()->name;
    	$teacher->advisory_section = request()->advisory_section;
    	$teacher->save();

    	return redirect('/teachers');
    }
}
