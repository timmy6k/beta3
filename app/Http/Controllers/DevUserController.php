<?php

namespace App\Http\Controllers;

use App\Tablerole;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('dev.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_role = Role::where('name', 'user')->orWhere('name', 'admin')->orWhere('name', 'dev')->orWhere('name', 'super admin')->pluck('name', 'id')->all();
        $table_role = Tablerole::pluck('name', 'id')->all();
        return view('dev.user.create', compact('user_role', 'table_role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(trim($request->password) == ''){
            $input = $request->except('password');
        }else{
            $input  = $request->all();

            $input['password'] = bcrypt($request->password);
        }

        $input['created_by'] = Auth::user()->id;

        User::create($input);

        return redirect('dev/user');
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
        $user = User::findOrFail($id);
        $user_role = Role::where('name', 'user')->orWhere('name', 'admin')->orWhere('name', 'dev')->orWhere('name', 'super admin')->pluck('name', 'id')->all();
        $table_role = Tablerole::pluck('name', 'id')->all();
        return view('dev.user.edit', compact('user','user_role', 'table_role'));
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
        if(trim($request->password) == ''){
            $input = $request->except('password');
        }else{
            $input  = $request->all();

            $input['password'] = bcrypt($request->password);
        }

        $input['updated_by'] = Auth::user()->id;

        User::whereId($id)->first()->update($input);

        return redirect('dev/user');
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
