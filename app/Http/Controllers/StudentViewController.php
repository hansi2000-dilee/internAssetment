<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use domain\Facades\StudentFacade;
use Illuminate\Http\Request;

class StudentViewController extends ParentContoller
{

    public function index()
    {
        $response['students'] = StudentFacade::all();
        return view('pages.studentView.index')->with($response);
    }
    public function delete($studentView_id)
    {
        StudentFacade::delete($studentView_id);
        return redirect()->back();
    }


    public function update(Request $request,$studentView_id)
    {
        StudentFacade::update($request->all(), $studentView_id);
        return redirect()->back();
    }
    public function edit(Request $request)
    {

        $response['student'] = StudentFacade::get($request['studentView_id']);
        return view('pages.studentView.edit')->with($response);
    }
    public function status($studentView_id)
    {
        StudentFacade::status($studentView_id);
        return redirect()->back();
    }
}
