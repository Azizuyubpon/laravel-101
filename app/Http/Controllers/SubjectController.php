<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function subjectForm()
    {
        $subject = Subject::get();
        $alpha = 'welocome azee';

        return view('subjects.create', ['subjects' => $subject, 'alpha' => $alpha,]);
    
    }

    public function subjectSubmit(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $unit = $request->input('units');
    
        $data = [

            'name' => $name,
            'description' => $description,
            'units' => $unit

        ];

        Subject::create($data);

        return back();

    }

    public function show($id)
    {
        $subject = Subject:: find($id);
       
        return $subject->name;
        
    }
}
