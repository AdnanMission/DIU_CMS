<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\complaint_tbl;
use Mail;
use App\Mailfile;
use Redirect;

class complaintcontroller extends Controller
{
	public function index00()
    {
    
        return view('complaint');
    }
    public function index000()
    {
    
        return view('complaint2');
    }


    public function academic()
    {
    
        return view('academic');
    }
    public function lab()
    {
    
        return view('lab');
    }
   
    public function library()
    {
    
        return view('library');
    }
   
   public function transport()
    {
    
        return view('transport');
    }
   
   public function canteen()
    {
    
        return view('canteen');
    }
   
   public function account()
    {
    
        return view('account');
    }
   
   public function hostel()
    {
    
        return view('hostel');
    }
   
   




    //insert into data table
    public function insert(Request $request)
    {
        $complaint = new complaint_tbl;
        $complaint->name = $request->name;
        $complaint->student_id = $request->student_id;
        $complaint->categories = $request->categories;
        $complaint->complaint_date = $request->complaint_date;
        $complaint->department = $request->department;
        $complaint->campus = $request->campus;
        $complaint->description_of_complaint = $request->description_of_complaint;
        $complaint->uplode_file = $request->uplode_file;
        $complaint->action = $request->Action;
        $complaint->save();

        return redirect()->route('show');



    }

    // update data table
    public function update(Request $request, $id)
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
        $complaint_tbl->save();
        return redirect()->route('show');
    }

   //delete the data
    public function delete($id)
    {
        $complaint_tbl = complaint_tbl::find($id);
        $complaint_tbl->delete();
        return redirect()->route('show');



    }
    //show all value
    public function show()
    {
    	$complaint_tbl= complaint_tbl::all();
        return view('show')->with('complaint_tbl', $complaint_tbl);
        
    }
    

    //Complaint details view
    public function viw()
    {
        $complaint_tbl= complaint_tbl::all();
        return view('viewcomplient')->with('complaint_tbl', $complaint_tbl);
        
    }
    

    //edit the value from table or form
    public function edit($id)
    {
        $complaint_tbl = complaint_tbl::find($id);
        return view('edit')->with('complaint_tbl', $complaint_tbl);
    }

    //send the value from table or form(edit)
    public function send($id)
    {
        $complaint_tbl = complaint_tbl::find($id);
        return view('transmit')->with('complaint_tbl', $complaint_tbl);
    }

     //update the vlaue or send email
    /*public function submit(Request $request)
    {
       
        $this-> validate($request,[
            'complaint_no'=> 'required|complaint_no',
            'subject' => 'min:3',
            'email' => 'required|email',
            'message' =>'min:10'

        ]);
        $data = array(
         'complaint_no'=> $request->complaint_no, 
         'subject'=> $request->subject, 
         'email'=> $request->email,
         'message'=> $request->message

        );

        Mail::send('transmit',$data,function($message) use ($data){
          $message->to($data['email']);
          $message->subject('Diu_cms');
          $message->from('adnanshahriar016@gmail.com');



        });
        
        session::flash('success',"Congrats! Mail send successfully. ");
        //return Redirect::to('/submit');
        //return redirect()->route('submit');
         return view('transmit');
    }*/
//show for admin page
    public function show00()
    {
        $complaint_tbl= complaint_tbl::all();
        return view('adminnewcomplaint')->with('complaint_tbl', $complaint_tbl);
        
    }
    public function show01()
    {
        $complaint_tbl= complaint_tbl::all();
        return view('pnewcomplaint')->with('complaint_tbl', $complaint_tbl);
        
    }
    public function show02()
    {
        $complaint_tbl= complaint_tbl::all();
        return view('cnewcomplaint')->with('complaint_tbl', $complaint_tbl);
        
    }
    public function show03()
    {
        $complaint_tbl= complaint_tbl::all();
        return view('dnewcomplaint')->with('complaint_tbl', $complaint_tbl);
        
    }

     public function statuscomplaint()
    {
        $complaint_tbl= complaint_tbl::all();
        return view('statuscomplaint')->with('complaint_tbl', $complaint_tbl);
        
    }
    
    public function adminaction()
    {
        
        return view('adminaction');
    }

    public function action($id)
    {
        //$complaint_tbl = complaint_tbl::find($id);
        $complaint_tbl = complaint_tbl::find($id);

        //$complaint_tbl= complaint_tbl::all();
        return view('adminaction')->with('complaint_tbl', $complaint_tbl);
        
    }

    public function complaintdetails($id)
    {
        //$complaint_tbl = complaint_tbl::find($id);
        $complaint_tbl = complaint_tbl::find($id);

        //$complaint_tbl= complaint_tbl::all();
        return view('complaintdetails')->with('complaint_tbl', $complaint_tbl);
        
    }

    public function details()
    {
        $complaint_tbl= complaint_tbl::all();
        return view('adminnewcomplaint')->with('complaint_tbl', $complaint_tbl);
        
    }

    


    public function ins(Request $request)
    {
        $complaint = new complaint_tbl;
        
        $complaint->action = $request->action;
        $complaint->save();

        return redirect()->route('complaintdetails');



    }

    
    public function show06()
    {
        $complaint_tbl= complaint_tbl::all();
        return view('processnewcomplaint')->with('complaint_tbl', $complaint_tbl);
        
    }



}
