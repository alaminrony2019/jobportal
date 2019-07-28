<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Skill;
use Session;
use Image;
use File;
use Validator;

class UsersController extends Controller
{

    public function applicantRegistration(){
      $login     = Session::get("applicantLogin");
      if($login == false){
        $meta_title="Applicant-Register | Job finder";
        return view('applicant-registration')->with(compact('meta_title'));
      }else{
        return redirect('/');
      }
    }


    public function register(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		// Check if User already exists
    		$usersCount = User::where('email',$data['email'])->count();
    		if($usersCount>0){
    			return redirect()->back()->with('flash_message_error','Email already exists!');
    		}
        else{
             $validator =$request->validate([
                  'first_name' => 'required|regex:/^[\pL\s\-]+$/u|max:150',
                  'last_name' => 'required|regex:/^[\pL\s\-]+$/u|max:150',
                  'email' => 'required|email|unique:users,email',
                  'password'=>'required|min:5'
               ]);

    			      $user = new User;
                $user->first_name = $data['first_name'];
                $user->last_name = $data['last_name'];
                $user->email = $data['email'];
                $user->password =md5($data['password']);
                $user->save();
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
            $applicantDetails = User::where(['email' => $data['email'],'password'=>md5($data['password'])])->get();
            if($applicantDetails->count() > 0){
              foreach($applicantDetails as $applicant){
                $applicantId = $applicant->id;
                $email       = $applicant->email;
                $first_name  = $applicant->first_name;
                $last_name   = $applicant->last_name;
              }
                  Session::put('applicantSession',$email);
                  Session::put("applicantLogin",true);
                  Session::put("applicantId",$applicantId);
                  Session::put("first_name",$first_name);
                  Session::put("last_name",$last_name);
                  return redirect('applicant/dashboard');
          }
          else{
                return redirect('/applicant-login')->with('flash_message_error','Invalid Username or Password');
          }
      }
        $meta_title="Applicant-Login | Job finder";
        return view('/applicant-login')->with(compact('meta_title'));

    }

    public function dashboard(){
      $user_id     = Session::get("applicantId");
      $userDetails = User::find($user_id);
      $meta_title="Applicant-Profile | Job finder";
      return view('applicant/dashboard')->with(compact('userDetails','meta_title'));
      }

    public function updateProfile(Request $request ,$id){
         $user_id     = Session::get("applicantId");
         if($user_id != $id){
            return redirect('applicant/dashboard');
         }

         if($request->isMethod('post')){
			    $data = $request->all();

          $validator =$request->validate([
            'profile_pic' => 'required|mimes:jpg,jpeg,png',
            'description' => 'required',
            'resume' => 'required|mimes:pdf,zip',
            ]);

			     // Upload Image
            if($request->hasFile('profile_pic')){
            	$image_tmp = Input::file('profile_pic');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $file_Name = $image_tmp->getClientOriginalName();
                    $small_image_path = 'images/applicant'.'/'.$file_Name;
     				        Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                }
            }

						//resume upload
              if($request->hasFile('resume')){
   						 $resume_temp = Input::file('resume');
   						 $resume_name = $resume_temp->getClientOriginalName();
   						 $resume_path ='resume/';
   						 $resume_temp->move($resume_path,$resume_name);
   						 $resumeName = $resume_name;
            }

            if(!empty($data['description'])){
            	$description =$data['description'];
            }

			User::select('profile_pic','resume','description')->where(['id'=>$id])->update(['profile_pic'=>$file_Name,'resume'=>$resumeName,'description'=>$description]);

			return redirect()->back()->with('flash_message_success', 'Profile has been Updated successfully');
      }
      $meta_title="Profile-update | Job finder";
      return view('applicant/update')->with(compact('id','meta_title'));
    }


    public function updateSkills(Request $request,$id){
      $user_id     = Session::get("applicantId");
      if($user_id != $id){
         return redirect('applicant/dashboard');
      }

      if($request->isMethod('post')){
          $data = $request->all();
          $validator =$request->validate([
               'skills' => 'required',
               'lavel'=>'required'
            ]);
          // echo "<pre>"; print_r($data); die;
          $skill = new Skill;
          $skill->user_id = $data['user_id'];
          $skill->lavel   = $data['lavel'];
          $skill->skills  = $data['skills'];
          $skill->save();
          return redirect()->back()->with('flash_message_success', 'Skill successfully Added !!');
        }
      $meta_title="Skill | Job finder";
      return view('applicant/skills')->with(compact('id','meta_title'));
    }

    public function logout(){
      Session::forget('applicantlogin');
        session()->flush();
        return redirect('/');
    }


}
