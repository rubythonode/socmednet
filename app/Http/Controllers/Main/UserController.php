<?php

namespace Socmednet\Http\Controllers\Main;

use Illuminate\Http\Request;

use Socmednet\Http\Requests;
use Socmednet\Http\Controllers\BaseController;
use Socmednet\User;
use Socmednet\Http\Requests\UserPostRequest;
use Session;
use Auth;
use Gate;

class UserController extends BaseController
{
    function __construct() {
        $this->set_initial_data([
            "page" => "USERS",
            "title" => "User"
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('index', Auth::user())) {
            abort(503);
        }
        
        $users = User::all();
        $this->add_to_data([
            "subpage" => "USERS_LIST",
            "subtitle" => "Available users in the system.",
            "data_list" => $users
        ]);
        return view('main.user_list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->add_to_data([
            "subpage" => "USERS_ADD",
            "subtitle" => "Add a new user.",
        ]);
        return view('main.user_modify', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserPostRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->active = $request->active;
        if ($user->active != 1) {
            $user->active = 0;
        }
        
        if ($user->save()) {
            Session::flash('message', 'Your data has been successfully saved.');
            return redirect('users/edit/'.$user->id);
        } else {
            Session::flash('error', 'Failed to update the data. Please try again later.');
            return redirect('users/add');
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
        $user = User::find($id);
        $this->add_to_data([
            "subpage" => "USERS_LIST",
            "subtitle" => "Edit a user.",
            "data" => $user
        ]);
        return view('main.user_modify', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserPostRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->active = $request->active;
        if ($user->active != 1) {
            $user->active = 0;
        }
        
        if ($user->save()) {
            Session::flash('message', 'Your data has been successfully saved.');
        } else {
            Session::flash('error', 'Failed to update the data. Please try again later.');
        }
        return redirect('users/edit/'.$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = User::where('name', 'Administrator')->first();
        if ($id != $admin->id) {
            $user = User::find($id);
            $user->delete();
            Session::flash('message', 'Data successfully deleted.');
            return redirect('users');
        }
        Session::flash('message', 'Data cannot be deleted.');
        return redirect('users');
    }
}
