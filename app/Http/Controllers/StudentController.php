<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent(Request $request){


        $student = new Student();//refering a modal class
        $c_pass = $request->c_password;

        if($c_pass == $request->password){
        $student->reg_number=$request->reg_number;
        $student->fullname=$request->fullname;
        $student->password=$request->password;
        $student->gender=$request->gender;
        $student->email=$request->email;
        $student->phone_number=$request->phone_no;
        $student->sec_qn=$request->sec_qn;
        $student->sec_answer=$request->sec_answer;

        $student->save(); 
        Session::flash("success","Successfully Registered");  
        }else{
            Session::flash("fail","Sorry password didnt match");
        }    
        
        return redirect("/");  
    }
}
