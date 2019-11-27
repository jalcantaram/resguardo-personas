<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.locatel.create');
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
    public function show(User $user)
    {
        return view('user.show', [
            'user' =>$user,
        ]);
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

    /**
     * Formulario rol.
     *
    */
    public function assign_role(User $user)
    {
        return view('user.assign_role', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Asignar rol.
     *
    */
    public function role_assignment(Request $request, User $user)
    {
        $user->role_assignment($request);
        return redirect()->route('dashboard.user.show', $user);
    }

    /**
     * Formulario permisos.
     *
    */
    public function assign_permission(User $user)
    {
        return view('user.assign_permission', [
            'user' => $user,
            'roles' => $user->roles,
        ]);
    }

    /**
     * Asignar permisos.
     *
    */
    public function permission_assignment(Request $request, User $user)
    {
        $user->permissions()->sync($request->permissions);    
        alert()->success('Éxito','Permisos asignados', 'succes')->showConfirmButton();
        return redirect()->route('dashboard.user.show', $user);
    }
}
