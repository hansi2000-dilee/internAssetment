<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use domain\Facades\StudentFacade;
use Illuminate\Http\Request;

class StudentController extends ParentContoller
{
    public function index()
    {
        $response['students'] = StudentFacade::all();
        return view('pages.student.index')->with($response);
    }
    public function store(Request $request)
    {
        StudentFacade::store($request->all());
        return redirect()->back();
    }



}
