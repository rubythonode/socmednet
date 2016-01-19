<?php

namespace Socmednet\Http\Controllers\Main;

use Illuminate\Http\Request;

use Socmednet\Http\Requests;
use Socmednet\Http\Controllers\BaseController;
use Socmednet\Http\Requests\RolePostRequest;
use Socmednet\Role;
use Session;

class RoleController extends BaseController
{
    function __construct() {
        $this->set_initial_data([
            "page" => "ROLES",
            "title" => "Role"
        ]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $this->add_to_data([
            "subpage" => "ROLES_LIST",
            "subtitle" => "Available roles in the system.",
            "data_list" => $roles
        ]);
        return view('main.role_list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->add_to_data([
            "subpage" => "ROLES_LIST",
            "subtitle" => "Add a new role.",
        ]);
        return view('main.role_modify', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolePostRequest $request)
    {
        $role = new Role;
        $role->code = $request->code;
        $role->name = $request->name;
        $role->description = $request->description;
        
        if ($role->save()) {
            Session::flash('message', 'Your data has been successfully saved.');
            return redirect('roles/edit/'.$role->id);
        } else {
            Session::flash('error', 'Failed to update the data. Please try again later.');
            return redirect('roles/add');
        }
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $this->add_to_data([
            "subpage" => "ROLES_LIST",
            "subtitle" => "Edit a user.",
            "data" => $role
        ]);
        return view('main.role_modify', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolePostRequest $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->name;
        $role->description = $request->description;
        
        if ($role->save()) {
            Session::flash('message', 'Your data has been successfully saved.');
        } else {
            Session::flash('error', 'Failed to update the data. Please try again later.');
        }
        return redirect('roles/edit/'.$role->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin_role = Role::where('code', 'ADMINISTRATOR')->first();
        if ($id != $admin_role->id) {
            $role = Role::find($id);
            $role->delete();
            Session::flash('message', 'Data successfully deleted.');
            return redirect('roles');
        }
        Session::flash('message', 'Data cannot be deleted.');
        return redirect('roles');
    }
}
