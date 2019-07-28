<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\User;
use App\Applyjob;
use Session;


class JobController extends Controller
{
    public function applyJobs(Request $request,$id){
      $login     = Session::get("applicantLogin");
      if($login == false){
        return redirect()->back()->with('flash_message_error','You have to login first! Please login to your applicant account !!');
      }


         if($request->isMethod('post')){
           $data = $request->all();
           $jobId = $data['job_id'];
           $employerId = Job::find($jobId)->employer->id;
           $user_id = Session::get("applicantId");

           $applyJobs = new Applyjob;
           $applyJobs->job_id = $jobId;
           $applyJobs->user_id= $user_id;
           $applyJobs->employer_id=$employerId;
           $applyJobs->save();
           return redirect()->back()->with('flash_message_success','You Have successfully applied this job!!');
       }

}



}
