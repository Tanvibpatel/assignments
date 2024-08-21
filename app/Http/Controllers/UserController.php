<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class UserController extends Controller
{
    //
    function home(){
        return view('home');
    }

    function addassignment(){
        return view('addassignment');
    }

    function contact(){
        return view('contact');
    }

    function viewassignment(){
        $assign_data = DB::table('tbl_assign')->get();
        return view('viewassignment', ['assign_data' => $assign_data]);
    }

    function addassign(Request $request){
        $a_file = $request->file('sn');
        $a_file_name = 'sn' . time() . '.' . $a_file->getClientOriginalExtension();
        $a_file->move(public_path('assign_file/'), $a_file_name);

        DB::table('tbl_assign')->insert([
           'atitle' =>$request->input('title'),
           'asub' =>$request->input('subname'),
           'afacultyname' =>$request->input('facname'),
           'afile' =>$a_file_name,
           'adate' => $request->input('date'),

        ]);
        return redirect('/')->with('success','Product added successfully');
    }

    function deletea(Request $request){
        $assignmentId = $request->input('assignment_id');
        DB::table('tbl_assign')->where('aid',$assignmentId)->delete();
        return view('addassignment');
    }
}
