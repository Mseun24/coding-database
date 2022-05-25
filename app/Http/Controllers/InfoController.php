<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Cviebrock\EloquentSluggable\Services\SlugService;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teachers.index')
        ->with('teachers_data', Teacher::orderBy('updated_at', 'DESC')
        ->get());
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'core_skills' => 'required',
            'qualification' =>'required',
            'phone_number' => 'required',
            'location' => 'required',
            'contact_address' => 'required',
            'image' => 'required|mimes:jpg, png, jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->first_name . '-' . 
        $request->image->extension(); 
        
        $request->image->move(public_path('images'), $newImageName);
    

        Teacher::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'core_skills' => $request->input('core_skills'),
            'qualification' => $request->input('qualification'),
            'phone_number' => $request->input('phone_number'),
            'location' => $request->input('location'),
            'contact_address' => $request->input('contact_address'),
            'slug' => SlugService::createSlug(Teacher::class, 'slug', $request->first_name),
            'image_path' => $newImageName,
            
        ]);

        return redirect('/teachers')
            ->with('status', 'Your credentials has been submitted !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('teachers.profile')
            ->with('teachers_data', Teacher::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('teachers.edit')
        ->with('teachers_data', Teacher::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'phone_number' => 'required',
        'core_skills' => 'required'
        ]);

        $newImageName = uniqid() . '-' . $request->first_name . '-' . 
        $request->image->extension(); 
        
        $request->image->move(public_path('images'), $newImageName);

    Teacher::where('slug', $slug)
        ->update([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'email' => $request->input('email'),
        'phone_number' => $request->input('phone_number'),
        'core_skills' => $request->input('core_skills'),
        'image_path' => $newImageName,
        'slug' => SlugService::createSlug(Teacher::class, 'slug', $request->first_name),

        ]);

        return redirect('/teachers')
            ->with('status','Your credentials has been updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $teacher_data = Teacher::where('slug', $slug);
            $teacher_data->delete();

        return redirect('/teachers')
            ->with('status', 'Teacher details has been deleted successfully !');
    }
}
