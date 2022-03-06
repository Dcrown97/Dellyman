<?php

namespace App\Http\Controllers;

use App\Mail\Singup;
use App\Models\AdminModel;
use App\Models\Contact_Model;
use App\Models\Faq_Model;
use App\Models\Register;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Symfony\Contracts\Service\Attribute\Required;

class DellymanController extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function howItWorksPage()
    {
        return view('how_it_works');
    }

    public function conf(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'otp' => 'required'
            ]);

            $otp = Register::all()->where('coupon', $request->otp)->count();
            if ($otp > 0){
                Register::where(['coupon' => $request->otp])->update(['status' => 'Approved']);

                return redirect('/login')->with('success', "Account Verified");
            }
            else {
                return back()->with('error', "Account Not Verified");
            }
        }
        return view('confirm');
    }

    public function contactPage()
    {
        return view('contact_us');
    }

    public function registerPage(Request $request)
    {

        if ($request->isMethod('post')) {
            $request->validate([
                'full_name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);

            //Get all details and save into an array
            $data['name'] = $request->input('full_name');
            $data['email'] = $request->input('email');
            // $data['password'] = Hash::make($request->input('password'));

            
            $coupon_code = uniqid();
            $data['coupon'] = $coupon_code;
            $status = 'Pending...';
            $data['status'] = $status;

            //Insert into database
            $insert_database = Register::create($data);
            if ($insert_database){

                Mail::to($request->email)->send(new Singup($data));

                return redirect('/confirm')->with('success', "Registered");
            }else {
                return back()->with('error', "Retry");
            }

        }

        return view('/register');
    }

    public function faqPage()
    {
        $allfaqs = Faq_Model::all();
        return view('faq', compact('allfaqs'));
    }

    public function showDashboard(Request $request)
    {
        $allfaqs = Faq_Model::all();
        $allContacts = Contact_Model::all();
      

        return view('dashboard', compact('allfaqs', 'allContacts'));
    }

    public function adminLogin(Request $request)
    {
        if($request->isMethod('POST')){
            // dd('dsdd');
            $request->validate([
                'admin_email' => 'required|email',
                'admin_password' => 'required',
            ]);

            $email_pass = Register::where(['email'=>$request->admin_email, 'password'=>$request->admin_password])->count();

            $confirm_status = Register::where(['email' => $request->admin_email, 'password' =>$request->admin_password, 'status' => 'Approved'])->first();

            if ($email_pass > 0 && $confirm_status !== null){
                return redirect('/dashboard')->with('success', "Welcome");
            }elseif($email_pass > 0 && $confirm_status == null){
                return redirect('/confirm');
            } else{
                return back()->with('error', "Email or Password Incorrect");
            }
        }
        return view('login');
    }

    public function dashfq(Request $request){

        $allfaqs = Faq_Model::all();

        return view('dashfaq', compact('allfaqs'));
    }
    public function dashcont(Request $request){

        $allContacts = Contact_Model::all();

        return view('cont', compact('allContacts'));
    }
}
