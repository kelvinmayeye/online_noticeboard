<?php

namespace App\Http\Controllers;
use App\Models\Staff;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function addStaff(Request $request){


        return $request->all();
        return redirect("/");
    }
}
