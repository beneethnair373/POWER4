<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectStrands;

class SubjectStrandsController extends Controller
{
    public function index()
    {
    	$subjects = SubjectStrands::all();
    	return view('subjectstrands.index')->with('subjectstrands', $subjects);
    }
    public function create()
    {
    	return view('subjectstrands.create');
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
