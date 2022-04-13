<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function addStudent(Request $request){


        $student = new User();//refering a modal class
        $c_pass = $request->c_password;
        $role = "student";

        if($c_pass == $request->password){
        $student->reg_number=$request->reg_number;
        $student->name=$request->fullname;
        $student->password=bcrypt($request->password);
        $student->gender=$request->gender;
        $student->email=$request->email;
        $student->phone_number=$request->phone_no;
        $student->sec_qn=$request->sec_qn;
        $student->sec_answer=$request->sec_answer;
        $student->role=$role;

        $student->save(); 
        Session::flash("success","Successfully Registered");  
        }else{
            Session::flash("fail","Sorry password didnt match");
        }    
        
        return redirect("/");  
    }

    public function addStaff(Request $request){

        $staff = new User();//refering a modal class
        $c_pass = $request->c_password;
        $role = "leader";

        if($c_pass == $request->password){
        $staff->reg_number=$request->reg_number;
        $staff->name=$request->fullname;
        $staff->password=bcrypt($request->password);
        $staff->gender=$request->gender;
        $staff->email=$request->email;
        $staff->phone_number=$request->phone_no;
        $staff->sec_qn=$request->sec_qn;
        $staff->sec_answer=$request->sec_answer;
        $staff->role=$role;

        $staff->save(); 
        Session::flash("alert","succefully submitted,please for verification from admin");  
        }else{
            Session::flash("fail","Sorry password didnt match");
        }    
        
        return redirect("/");

    }

    public function login(Request $request){
        

        $this->validate($request,[
            "reg_number"=>"required",
            "password"=>"required"
        ]);

        $credentials = [
            "reg_number"=>$request->reg_number,
            "password"=>$request->password
        ];

        if(Auth::attempt($credentials)){

            return redirect()->intended('home');
        }

        session::flash("fail","Reg number or password is not valid");
        return back();

    }

    public function home(){
        return view('dashboard.home');
    }


    //get all leaders
    public function getLeaders(){
         $leader = User::whereIn('role',['leader'])->get();
        return view('dashboard.leaders.all_leaders',compact("leader"));
    }

    public function getPendingLeaders(){
        $leader = User::whereIn('status',['pending'])->get();
        return view('dashboard.leaders.leader_pending',compact('leader'));
    }

    public function getDeniedLeaders(){
        $leader = User::whereIn('role',['leader','student']);
        return view('dashboard.leaders.denied_leaders',compact('leader'));
    }

    public function getCurrentStudent(){
        $end_regnumber = date("y") -1;

        $student = User::where('reg_number', 'LIKE', "%{$end_regnumber}")->get();
        //$student = User::whereIn('role',['student'])->get();
        return view('dashboard.students.currentstudent',compact('student'));
    }

    public function getfinishedstudent(){
        $end_regnumber = date("y")-2;

        $finstudent = User::where('reg_number','LIKE',"%{$end_regnumber}")->get();
        return view('dashboard.students.finishedstudent',compact('finstudent'));
    }

    public function getAddPost(){
        return view('dashboard.posts.addpost');
    }

}

