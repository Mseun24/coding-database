<?php

namespace App\Http\Controllers;
use App\Models\Teacher; 

use Illuminate\Http\Request;

class FetchController extends Controller
{
    public function query(Request $request)
    {
        if($request->has('search')) {
            $teacher_data = Teacher::search($request->search)->get();
        } 
        else {
            $teacher_data = Teacher::get();

        }
        return view('search.show', [
            'teachers_data' => $teacher_data
        ]);
    }
}
