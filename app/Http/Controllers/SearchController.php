<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Teacher; 

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function query(Request $request)
    {
        if($request->has('search')) {
            $teacher_data = Teacher::search($request->search)->get();
        } 
        else {
            $teacher_data = Teacher::get();

        }
        return view('search.index', [
            'teachers_data' => $teacher_data
        ]);
    }

    // public function contact(Request $request) {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'message' => 'required'
    //     ]);

    //     Admin::create([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'message' => $request->input('message')
    //     ]);
    //     $request->save();
    // }
}
