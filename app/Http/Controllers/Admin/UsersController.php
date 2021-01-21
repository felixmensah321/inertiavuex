<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $users = User::all();
//        dd($users);
        /*Profile::create([
            'user_id' => 1,
           'company' => 'SQLI',
           'cellnumber' => '0123456789',
           'email' => 'tettehfelix880@yahoo.com',
           'role' => 'admin'
        ]);
        Profile::create([
            'user_id' => 2,
            'company' => 'Citruse',
            'cellnumber' => '0123456789',
            'email' => 'tettehfelix080@yahoo.com',
            'role' => 'sales'
        ]);
        Profile::create([
            'user_id' => 3,
            'company' => 'SQLICitruse',
            'cellnumber' => '0123456789',
            'email' => 'tettehfelix80@yahoo.com',
            'role' => 'manager'
        ]);*/
        return Inertia::render('Admin/Index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userProfile = User::find($id)->profile;
        return $userProfile;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
