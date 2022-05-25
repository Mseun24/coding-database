<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Controllers\Auth\RegisteredUserController;

class AdminController extends Controller
{
    public function index() {

    return view('admin.login');
    
    }

    public function customRegistration(Request $request) {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'location' => 'required',
            'contact_address' => 'required',
            'phone_num' => 'required',
            'gender' => 'required'
        ]);

        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->with('Message', 'You have signed In');
    }
}
