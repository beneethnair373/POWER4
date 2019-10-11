<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject_Strands;
use App\Sections;
use App\Subjects;
use App\Strands;

class SubjectStrandsController extends Controller
{
    public function index()
    {
    	$subjects = Subject_Strands::all();
    	return view('subjectstrands.index')->with('subject_strands', $subjects);
    }
    public function create()
    {
    	$subjects= Subjects::all();
        $strands= Strands::all();

        return view('subjectstrands.create',compact('subjects', 'strands'));
    }
    public function edit(Subject_Strands $subject_strand )
    {
       $sections = Sections::all();
       return view('subjectstrands.edit',compact('subject_strand', 'sections'));
       //dd($teacher);

       $subjects = Subject::all();
       return view('subjectstrands.edit',compact('subject_strand', 'subject'));
       //dd($teacher);
    }
    public function store(Subjects $subject, Strands $strand)
    {
        request()->validate([
            'semester' => 'required',
            'grade_level' => 'required',
            // 'strand_id' => 'required',
            // 'subject_id' => 'required',
            
        ]);
        
    	$subjectstrands = new Subject_Strands;
        $subjectstrands->semester = request()->semester;
        $subjectstrands->grade_level = request()->grade_level;
        $subjectstrands->subject_id = request()->subject_id;
        $subjectstrands->strand_id = request()->strand_id;
    	$subjectstrands->save();

    	return redirect('/subject-strands');
    }
}
