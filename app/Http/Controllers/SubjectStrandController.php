<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject_Strands;

class SubjectStrandsController extends Controller
{
    public function index()
    {
    	$subjects = Subject_Strands::all();
    	return view('subjectstrands.index')->with('subject_strands', $subjects);
    }
    public function create()
    {
    	return view('subjectstrands.create');
    }
    public function store()
    {
        request()->validate([
            'semester' => 'required',
            'grade_level' => 'required',
            
        ]);
        
    	$subjectstrands = new Subject_Strands;
        $subjectstrands->semester = request()->semester;
        $subjectstrands->grade_level = request()->grade_level;
    	$subjectstrands->save();

    	return redirect('/subject-strands');
    }
}
