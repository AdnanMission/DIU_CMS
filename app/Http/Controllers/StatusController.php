<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\complaint_tbl;
use Mail;
use App\Mailfile;
use Redirect;

class StatusController extends Controller
{
    

    // update data table
    public function update1(Request $request, $id)
    {
       
        $complaint_tbl = complaint_tbl::find($id);
        $complaint_tbl->name = $request->name;
        $complaint_tbl->student_id = $request->student_id;
        $complaint_tbl->categories = $request->categories;
        $complaint_tbl->complaint_date = $request->complaint_date;
        $complaint_tbl->department = $request->department;
        $complaint_tbl->campus = $request->campus;
        $complaint_tbl->description_of_complaint = $request->description_of_complaint;
        $complaint_tbl->uplode_file = $request->uplode_file;
        $complaint_tbl->action = $request->Action;
        $complaint_tbl->save();
        return redirect()->route('show12');
    }

   //delete the data
    public function delete1($id)
    {
        $complaint_tbl = complaint_tbl::find($id);
        $complaint_tbl->delete();
        return redirect()->route('show');



    }
    //show all value
    public function show12()
    {
        $complaint_tbl= complaint_tbl::all();
        return view('adminnewcomplaint')->with('complaint_tbl', $complaint_tbl);
        
    }
    

   

    //edit the value from table or form
    public function edit1($id)
    {
        $complaint_tbl = complaint_tbl::find($id);
        return view('takingaction')->with('complaint_tbl', $complaint_tbl);
    }


    public function sendemail($id)
    {
        $complaint_tbl = complaint_tbl::find($id);
        //$complaint_tbl->student_id = $request->student_id;
        //$complaint_tbl->description_of_complaint = $request->description_of_complaint;
        return view('send_email')->with('complaint_tbl', $complaint_tbl);
    }

    

}
