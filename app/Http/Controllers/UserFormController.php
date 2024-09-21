<?php

namespace App\Http\Controllers;

use App\Models\UserForm;
use Illuminate\Http\Request;

class UserFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* resources -> views -> auth -> register.blade.php */
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer'],
            'gender' => ['required'],
            'countryResidence' => ['required'],
            'countryNationality' => ['required'],
            'theme' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user_forms'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8'],
            'phoneNumber' => ['required'],
            'observations' => ['max:255']
        ]);

        $userForm = new UserForm();

        $userForm->name = $request->input('name');
        $userForm->last_name = $request->input('lastName');
        $userForm->age = $request->input('age');
        $userForm->gender = $request->input('gender');
        $userForm->country_residence = $request->input('countryResidence');
        $userForm->country_nationality = $request->input('countryNationality');
        $userForm->theme = $request->input('theme');
        $userForm->email = $request->input('email');
        $userForm->password = bcrypt($request->input('password'));
        $userForm->phone_number = $request->input('phoneNumber');
        $userForm->observation = $request->input('observations');

        $userForm->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
