<?php

namespace App\Http\Controllers;

use App\Mail\Verification;
use App\Models\Contact_Model;
use App\Models\Faq_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Admin_Controller extends Controller
{
    public function contactForm(Request $request)
    {

        if ($request->isMethod('post')) {
            $request->validate([
                'full_name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'message' => 'required',

            ]);

            //Get all details and save in an array
            $data['name'] = $request->input('full_name');
            $data['email'] = $request->input('email');
            $data['phone_number'] = $request->input('phone_number');
            $data['message'] = $request->input('message');

            //Insert into database;
            
            //Cheak if insertion was successfull
            $coupon_code = uniqid();
            // $data = $request->all();
            $data['coupon'] = $coupon_code;
            
            $insert_database = Contact_Model::create($data);
            if ($insert_database) {

                Mail::to($request->email)->send(new Verification($data));

                return back()->with('success', "Your message was sent");
            } else {
                return back()->with('error', "Your message was not sent");
            }
        }

        return view('/contact_us');
    }

    public  function addNew(Request $request)
    {

        if ($request->isMethod('post')) {

            $request->validate([
                'question' => 'required',
                'answer' => 'required',
            ]);


            $SaveData = Faq_Model::create($request->all());
            

            if ($SaveData) {

                return redirect('/dashboard')->with('success', 'your message was sent');
            } else {
               
                return back()->with('error', "Your message was not sent");
            }
        }
    }


}
