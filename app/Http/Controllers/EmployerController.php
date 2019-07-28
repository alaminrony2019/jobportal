<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;
use App\Job;
use App\Applyjob;
use App\User;
use Auth;
use Session;
use DB;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
  public function employerRegistration(){
    $meta_title="Employer-Register | Job finder";
      return view('employer-registration')->with(compact('meta_title'));
  }

  public function employerRegister(Request $request){
    if($request->isMethod('post')){
      $data = $request->all();
      // Check if User already exists
      $usersCount = Employer::where('email',$data['email'])->count();
      if($usersCount>0){
        return redirect()->back()->with('flash_message_error','Email already exists!');
      }
      else{
           $validator =$request->validate([
                'first_name' => 'required|regex:/^[\pL\s\-]+$/u|max:150',
                'last_name' => 'required|regex:/^[\pL\s\-]+$/u|max:150',
                'business_name' => 'required',
                  'email' => 'required|email|unique:users,email',
                'password'=>'required|min:5'
             ]);

              $employer = new Employer;
              $employer->first_name = $data['first_name'];
              $employer->last_name = $data['last_name'];
              $employer->business_name = $data['business_name'];
              $employer->email = $data['email'];
              $employer->password = md5($data['password']);
              $employer->save();
              return redirect()->back()->with('flash_message_success','You have successfully Registerd');
      }
    }
  }


  public function login(Request $request){
    if($request->isMethod('post')){
          $data = $request->all();
          $validator =$request->validate([
               'email' => 'required',
               'password'=>'required'
            ]);
          $employerCount = Employer::where(['email' => $data['email'],'password'=>md5($data['password'])])->get();
          if($employerCount->count() >0){
              foreach($employerCount as $employer){
                $employertId = $employer->id;
                $email       = $employer->email;
                $first_name  = $employer->first_name;
                $last_name   = $employer->last_name;
              }
                  Session::put('employerSession',$email);
                  Session::put("employerLogin",true);
                  Session::put("employerId",$employertId);
                  Session::put("first_name",$first_name);
                  Session::put("last_name",$last_name);
                  return redirect('employer/dashboard');
          }
           else{
              return redirect('/employer-login')->with('flash_message_error','Invalid Username or Password');
        }
    }
      $meta_title="Employer-Login | Job finder";
      return view('/employer-login')->with(compact('meta_title'));
  }

  public function dashboard(){
    $emp_id     = Session::get("employerId");
    $emp_details = Employer::find($emp_id);
    $jobs         =Employer::find($emp_id)->jobs()->paginate(3);
    $meta_title="Employer-Profile | Job finder";
    return view('employer/dashboard')->with(compact('emp_details','meta_title','jobs'));
    }

  public function jobpost(Request $request, $id){
    $employertId     = Session::get("employerId");
    if($employertId != $id){
       return redirect('employer/dashboard');
    }
    if($request->isMethod('post')){
          $data = $request->all();
          $validator =$request->validate([
               'title' => 'required',
               'salary'=>'required',
               'country'=>'required',
               'location'=>'required',
               'description'=>'required',
            ]);

            $job = new Job;
            $job->employer_id = $data['employer_id'];
            $job->title = $data['title'];
            $job->salary = $data['salary'];
            $job->country = $data['country'];
            $job->location = $data['location'];
            $job->description = $data['description'];
            $job->save();
            return redirect()->back()->with('flash_message_success','Job Posted on Successfully !!');

    }
    $meta_title="Employer-Job Post | Job finder";
    return view('employer/jobpost')->with(compact('id','meta_title'));
  }

  public function viewApplicant(){
    $employertId= Session::get("employerId");
    $applicants =  DB::table('users')
    ->join('applyJobs','applyJobs.user_id','users.id')
    ->where('employer_id',$employertId)
    ->paginate(5);
    // echo "<pre>"; print_r($applicants);die;
    $meta_title="View Applicant | Job finder";
    return view('employer/applicant')->with(compact('meta_title','applicants'));
  }


    public function logout(){
        Session::forget('employerlogin');
        session()->flush();
        return redirect('/');
    }

}
