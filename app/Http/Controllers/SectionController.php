<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    public function sectionForm()
    {
        $sections = Section::get();
        $gusion = 'aziz gwapo';

        return view('sections.create', ['sections' => $sections, 'gusion' => $gusion]);
    }


    public function sectionSubmit(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $data = [

            'name' => $name,
            'email' => $email,
            'password' => $password
        ];

        Section::create($data);

        return back();
    }

    public function show($id)
    {

        $section = Section:: find($id);

        return $section->name;
    }
}