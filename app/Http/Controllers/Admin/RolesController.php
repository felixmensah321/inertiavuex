<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $roles = Role::all();
        return Inertia::render('Admin/Role/Index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Role/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        if(!$request->has('role_name') || $request['role_name'] == null){
            return 'enter role';
        }
        $roleName = $request['role_name'];

        try {
            Role::create(['name' => $roleName]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        Return 'Role saved successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Inertia\Response
     */
    public function edit($id)
    {
        $role = Role::findById($id);
        return Inertia::render('Admin/Role/Edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'role_name' => 'required',
        ]);
        $role = Role::findById($request['role_id']);
        $role->name = $request['role_name'];
        $role->save();
//        return redirect()->action([RolesController::class, 'index']);
        return Inertia::location('/admin/roles/');
        /* $input = $request->all();
        $role->fill($input)->save();
        dd($role);*/
//        $role->update(['name' => $request['role_name']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Role::destroy($id);
        return Inertia::location('/admin/roles/');
    }
}
