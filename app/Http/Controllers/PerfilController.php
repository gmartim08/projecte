<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('perfil');
    }
    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //perfil
        $user= User::find($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        if($request['password']<>""){
            $user->password=Hash::make($request['password']);
        }        
        $user->rol=$request->get('rol');
        $user->save();
        return redirect('perfil');        
    }
}