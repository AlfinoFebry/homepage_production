<?php

namespace App\Http\Controllers;

use App\Models\Password;
use App\Http\Requests\StorePasswordRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;

class PasswordController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePasswordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Password $password)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Password $password)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePasswordRequest $request, Password $password)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Password $password)
    {
        //
    }

    public function check(Request $request)
    {
        $password = $request->input('password');
        $pass = Password::where('pw', $password)->first();
        
        if ($pass) {
            return response()->json(['message' => 'Password is correct'], 200);
        }
        
        return response()->json(['message' => 'Password is incorrect'], 200);
    }
}
