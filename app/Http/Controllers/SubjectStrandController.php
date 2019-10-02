<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectStrands;

class SubjectStrandsController extends Controller
{
    public function index()
    {
    	$subjectstrand = SubjectStrands::all();
    	return view('subjects.index')->with('subjectstrand', $subjectstrands);
    }
    public function create()
    {
    	return view('subjectsstrand.create');
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
            
        ]);
        
    	$subjectstrands = new SubjectStrands;
    	$subjectstrands->name = request()->name;
    	$subjectstrands->save();

    	return redirect('/subject-strands');
    }
}
