<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
class IndexController extends Controller
{
    public function allJobs(){
      $jobs =  Job::latest()->paginate(6);
      return view('index')->with(compact('jobs'));
    }
}
