<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffBranch;
use App\Models\Staff;
use App\Models\Branch;


class StaffBranchController extends Controller
{
    public function index(){
        //select * from post;
        $StaffBranch = StaffBranch::all();
        $Staff = Staff::all();
        $branch = Branch::all();
        return view('staffbranch.index',compact('StaffBranch','Staff','branch'));
    }
}
?>